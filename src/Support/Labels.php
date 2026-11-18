<?php

namespace JeffersonGoncalves\Filament\QuebecMinors\Support;

use BackedEnum;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\QuebecMinors\QuebecMinorsPlugin;
use JeffersonGoncalves\QuebecMinors\Models\GuardianLink;

class Labels
{
    public static function get(string $key): string
    {
        return __("filament-quebec-minors::filament-quebec-minors.{$key}");
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function options(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::get("{$group}.{$case->value}")])
            ->all();
    }

    public static function subject(?Model $subject, int|string|null $fallbackId = null): string
    {
        if ($subject === null) {
            return '#'.$fallbackId;
        }

        $title = $subject->getAttribute(QuebecMinorsPlugin::get()->getSubjectTitleAttribute());

        return filled($title) ? "{$title} (#{$subject->getKey()})" : '#'.$subject->getKey();
    }

    /** Searchable select over the plugin's subject model. */
    public static function subjectSelect(string $name): Select
    {
        $plugin = QuebecMinorsPlugin::get();
        $model = $plugin->getSubjectModel();
        $title = $plugin->getSubjectTitleAttribute();

        return Select::make($name)
            ->searchable()
            ->required()
            ->getSearchResultsUsing(fn (string $search): array => $model::query()
                ->where($title, 'like', "%{$search}%")
                ->limit(50)
                ->get()
                ->mapWithKeys(fn (Model $subject): array => [$subject->getKey() => static::subject($subject)])
                ->all())
            ->getOptionLabelUsing(fn (int|string $value): string => static::subject($model::query()->find($value), $value));
    }

    public static function ageColor(int $age): string
    {
        return match (true) {
            $age < (int) config('quebec-minors.consent_age', 14) => 'danger',
            $age < 18 => 'warning',
            default => 'success',
        };
    }

    public static function linkStatus(GuardianLink $link): string
    {
        return match (true) {
            $link->revoked_at !== null => 'revoked',
            $link->verified_at !== null => 'active',
            default => 'pending',
        };
    }

    public static function statusColor(string $status): string
    {
        return match ($status) {
            'active', 'lifted' => 'success',
            'pending', 'appealed' => 'warning',
            'revoked' => 'gray',
            default => 'danger',
        };
    }
}
