<?php

namespace App\Filament\Resources\CompanyInformationResource\Pages;

use App\Filament\Resources\CompanyInformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyInformation extends CreateRecord
{
    protected static string $resource = CompanyInformationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
