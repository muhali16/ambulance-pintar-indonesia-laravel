<?php

namespace App\Filament\Resources\ProductSpecificationResource\Pages;

use App\Filament\Resources\ProductSpecificationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductSpecification extends EditRecord
{
    protected static string $resource = ProductSpecificationResource::class;

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
