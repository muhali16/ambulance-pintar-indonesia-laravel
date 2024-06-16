<?php

namespace App\Filament\Resources\HeroSliderConfigResource\Pages;

use App\Filament\Resources\HeroSliderConfigResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroSliderConfig extends EditRecord
{
    protected static string $resource = HeroSliderConfigResource::class;

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
