<?php

namespace JeffersonGoncalves\Filament\QuebecMinors;

use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\AgeAssurances\AgeAssuranceResource;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\FilamentPluginCore\BasePlugin;

class QuebecMinorsPlugin extends BasePlugin
{
    protected ?string $navigationGroup = null;

    protected ?int $navigationSort = null;

    /** @var class-string<Model>|null */
    protected ?string $subjectModel = null;

    protected string $subjectTitleAttribute = 'name';

    public function getId(): string
    {
        return 'filament-quebec-minors';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            AgeAssuranceResource::class,
            GuardianLinkResource::class,
        ]);
    }

    public function navigationGroup(?string $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function getNavigationGroup(): ?string
    {
        return $this->navigationGroup;
    }

    public function navigationSort(?int $sort): static
    {
        $this->navigationSort = $sort;

        return $this;
    }

    public function getNavigationSort(): ?int
    {
        return $this->navigationSort;
    }

    /**
     * The model of your users (minors and their parents or tutors). Defaults to auth.providers.users.model.
     *
     * @param  class-string<Model>  $model
     */
    public function subjectModel(string $model): static
    {
        $this->subjectModel = $model;

        return $this;
    }

    /**
     * @return class-string<Model>
     */
    public function getSubjectModel(): string
    {
        return $this->subjectModel ?? config('auth.providers.users.model');
    }

    public function subjectTitleAttribute(string $attribute): static
    {
        $this->subjectTitleAttribute = $attribute;

        return $this;
    }

    public function getSubjectTitleAttribute(): string
    {
        return $this->subjectTitleAttribute;
    }
}
