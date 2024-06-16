<?php

namespace App\Filament\Resources\HeroSliderConfigResource\Pages;

use App\Filament\Resources\HeroSliderConfigResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroSliderConfig extends CreateRecord
{
    protected static string $resource = HeroSliderConfigResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
