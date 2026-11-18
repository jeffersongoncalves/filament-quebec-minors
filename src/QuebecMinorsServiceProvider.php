<?php

namespace JeffersonGoncalves\Filament\QuebecMinors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecMinorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec-minors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
