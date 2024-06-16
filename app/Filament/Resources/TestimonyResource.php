<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonyResource\Pages;
use App\Filament\Resources\TestimonyResource\RelationManagers;
use App\Models\Testimony;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonyResource extends Resource
{
    protected static ?string $model = Testimony::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = "Web Configuration";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('institution_name')->required(),
                Forms\Components\Textarea::make('body')->required(),
                Forms\Components\FileUpload::make("thumbnail")->name('thumbnail')->image()->disk('public')->directory('testimony-thumbnail')->required()->enableOpen(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institution_name')->searchable(),
                Tables\Columns\TextColumn::make('thumbnail'),
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
            'index' => Pages\ListTestimonies::route('/'),
            'create' => Pages\CreateTestimony::route('/create'),
            'edit' => Pages\EditTestimony::route('/{record}/edit'),
        ];
    }
}
