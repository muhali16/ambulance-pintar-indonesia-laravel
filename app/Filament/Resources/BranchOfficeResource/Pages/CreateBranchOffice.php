<?php

namespace App\Filament\Resources\BranchOfficeResource\Pages;

use App\Filament\Resources\BranchOfficeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBranchOffice extends CreateRecord
{
    protected static string $resource = BranchOfficeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
