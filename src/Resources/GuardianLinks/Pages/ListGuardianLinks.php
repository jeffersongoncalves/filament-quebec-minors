<?php

namespace JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\QuebecMinors\Resources\GuardianLinks\GuardianLinkResource;

class ListGuardianLinks extends ListRecords
{
    protected static string $resource = GuardianLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
