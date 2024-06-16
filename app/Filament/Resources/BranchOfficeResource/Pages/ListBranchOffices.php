<?php

namespace App\Filament\Resources\BranchOfficeResource\Pages;

use App\Filament\Resources\BranchOfficeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBranchOffices extends ListRecords
{
    protected static string $resource = BranchOfficeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
