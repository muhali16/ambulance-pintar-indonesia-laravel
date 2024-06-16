<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyInformationResource\Pages;
use App\Filament\Resources\CompanyInformationResource\RelationManagers;
use App\Models\CompanyInformation;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyInformationResource extends Resource
{
    protected static ?string $model = CompanyInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Company';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->minLength(3)->maxLength(255),
                Forms\Components\TextInput::make('body'),
                Forms\Components\TextInput::make('link'),
                Forms\Components\TextInput::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('body'),
                Tables\Columns\TextColumn::make('link')->limit(20),
                Tables\Columns\TextColumn::make('description')->limit(20),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListCompanyInformation::route('/'),
            'create' => Pages\CreateCompanyInformation::route('/create'),
            'edit' => Pages\EditCompanyInformation::route('/{record}/edit'),
        ];
    }
}
