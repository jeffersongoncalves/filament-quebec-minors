<?php

namespace JeffersonGoncalves\Filament\QuebecMinors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\QuebecMinors\QuebecMinorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                QuebecMinorsPlugin::make(),
            ]);
    }
}
