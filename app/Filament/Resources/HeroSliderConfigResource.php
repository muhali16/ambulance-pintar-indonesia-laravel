<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSliderConfigResource\Pages;
use App\Filament\Resources\HeroSliderConfigResource\RelationManagers;
use App\Models\HeroSliderConfig;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSliderConfigResource extends Resource
{
    protected static ?string $model = HeroSliderConfig::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Web Configuration';

    protected static ?string $navigationLabel = 'Hero Slider';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make("thumbnail")->name('thumbnail')->image()->disk('public')->directory('article-thumbnail')->required()->enableOpen(),
                Forms\Components\Textarea::make('caption')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('caption')->limit(30),
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('created_at')->since()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroSliderConfigs::route('/'),
            'create' => Pages\CreateHeroSliderConfig::route('/create'),
            'edit' => Pages\EditHeroSliderConfig::route('/{record}/edit'),
        ];
    }
}
