<?php

namespace App\Filament\Resources\BranchOfficeResource\Pages;

use App\Filament\Resources\BranchOfficeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBranchOffice extends EditRecord
{
    protected static string $resource = BranchOfficeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
