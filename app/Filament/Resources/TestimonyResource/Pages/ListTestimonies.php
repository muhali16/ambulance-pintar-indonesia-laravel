<?php

namespace App\Filament\Resources\TestimonyResource\Pages;

use App\Filament\Resources\TestimonyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonies extends ListRecords
{
    protected static string $resource = TestimonyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
