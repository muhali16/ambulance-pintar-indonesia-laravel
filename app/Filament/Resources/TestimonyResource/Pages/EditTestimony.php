<?php

namespace App\Filament\Resources\TestimonyResource\Pages;

use App\Filament\Resources\TestimonyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimony extends EditRecord
{
    protected static string $resource = TestimonyResource::class;

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
