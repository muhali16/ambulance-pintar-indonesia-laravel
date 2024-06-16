<?php

namespace App\Filament\Resources\TestimonyResource\Pages;

use App\Filament\Resources\TestimonyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimony extends CreateRecord
{
    protected static string $resource = TestimonyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
