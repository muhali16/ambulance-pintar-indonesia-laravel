<?php

namespace App\Filament\Resources\HeroSliderConfigResource\Pages;

use App\Filament\Resources\HeroSliderConfigResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroSliderConfigs extends ListRecords
{
    protected static string $resource = HeroSliderConfigResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
