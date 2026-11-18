<?php

use JeffersonGoncalves\Filament\QuebecMinors\QuebecMinorsPlugin;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\QuebecMinors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\QuebecMinors\Enums\AssuranceMethod;
use JeffersonGoncalves\QuebecMinors\Facades\QuebecMinors;
use JeffersonGoncalves\QuebecMinors\Models\GuardianLink;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
    $this->child = TestUser::create(['name' => 'Léa']);
    $this->mother = TestUser::create(['name' => 'Anna']);
});

it('lists age checks with age and method, and filters those below the consent age', function () {
    $child = QuebecMinors::assure($this->child, 12, AssuranceMethod::StoreSignal);
    $adult = QuebecMinors::assure($this->mother, 40, AssuranceMethod::Document);

    Livewire::test(ListAgeAssurances::class)
        ->assertCanSeeTableRecords([$child, $adult])
        ->assertSee('Léa (#2)')
        ->assertSee('App store signal')
        ->filterTable('below_consent_age', true)
        ->assertCanSeeTableRecords([$child])
        ->assertCanNotSeeTableRecords([$adult]);
});

it('links a verified parent, which lets the minor consent', function () {
    QuebecMinors::assure($this->child, 12, AssuranceMethod::Document);

    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->mother->id, 'relationship' => 'mother', 'verified' => true])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(GuardianLink::sole()->relationship)->toBe('mother')
        ->and(QuebecMinors::canConsent($this->child))->toBeTrue();
});

it('does not link someone to themselves', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->child->id])
        ->call('create')
        ->assertHasFormErrors(['guardian_id' => 'different']);
});

it('verifies and revokes a link', function () {
    $link = QuebecMinors::link($this->child, $this->mother);

    Livewire::test(ListGuardianLinks::class)
        ->assertSee('Pending verification')
        ->callTableAction('verify', $link);

    expect($link->fresh()->isActive())->toBeTrue();

    Livewire::test(ListGuardianLinks::class)->callTableAction('revoke', $link);

    expect($link->fresh()->revoked_at)->not->toBeNull();
});

it('applies the fluent plugin options', function () {
    QuebecMinorsPlugin::get()->navigationGroup('Quebec')->subjectTitleAttribute('email');

    expect(GuardianLinkResource::getNavigationGroup())->toBe('Quebec')
        ->and(QuebecMinorsPlugin::get()->getSubjectModel())->toBe(TestUser::class);
});
