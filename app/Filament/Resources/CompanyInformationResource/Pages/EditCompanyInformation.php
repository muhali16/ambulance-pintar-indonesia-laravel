<?php

namespace App\Filament\Resources\CompanyInformationResource\Pages;

use App\Filament\Resources\CompanyInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyInformation extends EditRecord
{
    protected static string $resource = CompanyInformationResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
