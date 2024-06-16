<?php

namespace App\Filament\Resources\CompanyInformationResource\Pages;

use App\Filament\Resources\CompanyInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyInformation extends ListRecords
{
    protected static string $resource = CompanyInformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
