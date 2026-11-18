<?php

namespace JeffersonGoncalves\Filament\QuebecMinors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecMinorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-minors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
