<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchOfficeResource\Pages;
use App\Filament\Resources\BranchOfficeResource\RelationManagers;
use App\Models\BranchOffice;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BranchOfficeResource extends Resource
{
    protected static ?string $model = BranchOffice::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Company';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('city_name')->label('Lokasi Cabang')->required()->minLength(3)->maxLength(255),
                Forms\Components\RichEditor::make('contact_address')->label('Kontak dan Alamat Cabang')->required()->toolbarButtons(['bold', 'italic', 'underline', 'blockQuote', 'undo', 'redo', 'link', 'bulletList']),
                Forms\Components\TextInput::make('maps_link')->label('Embed Link Google Maps')->required()->minLength(2),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('city_name')->label('Lokasi Cabang')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('maps_link')->label('Kode Unik GMaps')->limit(40),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')->since(),
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
            'index' => Pages\ListBranchOffices::route('/'),
            'create' => Pages\CreateBranchOffice::route('/create'),
            'edit' => Pages\EditBranchOffice::route('/{record}/edit'),
        ];
    }
}
