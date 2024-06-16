<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = "Product";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_publish')->label('Apakah anda ingin publish produk?')->inline(false)->required(),
                Forms\Components\Select::make('product_category_id')->name('product_category_id')->label('Pilih Kategori Produk')->required()->options(ProductCategory::all()->pluck('name', 'id'))->searchable(),
                Forms\Components\TextInput::make('name')->label('Nama Produk')->required()->minLength(2)->maxLength(255),
                Forms\Components\Textarea::make('caption')->label('Deskripsi Singkat Produk')->required()->minLength(2)->maxLength(255),
                Forms\Components\FileUpload::make("photo")->label('Masukan Foto Produk')->image()->disk('public')->directory('product-photo')->required()->enableOpen(),
                Forms\Components\Toggle::make('is_use_product_specification')->label('Gunakan spesifikasi yang sudah ada?')->onColor('success')->offColor('warning')->required()->inline(false)->reactive(),
                Forms\Components\CheckboxList::make('product_specification_id')->label('Pilih spesifikasi ambulance')->options(ProductSpecification::all()->pluck('name', 'id'))->hidden(fn (\Closure $get) => $get('is_use_product_specification') == false)->columns(4),

//                Forms\Components\Select::make('product_specification_id')->name('product_specification_id')->label('Pilih spesifikasi')->options(ProductSpecification::all()->pluck('name', 'id'))->searchable()->hidden(fn (\Closure $get) => $get('is_use_product_specification') == false),

                Forms\Components\RichEditor::make('specification')->name('specification')->label('Spesifikasi Tambahan (Opsional)')->disableToolbarButtons(['attachFiles', 'codeBlock', ]),
                Forms\Components\TextInput::make('brosure')->label('Masukan Link Brosure')->required()->minLength(2)->maxLength(255),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('productCategory.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('views')->sortable(),
                Tables\Columns\IconColumn::make('is_publish')->label('Pusblish')->boolean()->trueIcon('heroicon-o-badge-check')->falseIcon('heroicon-o-x-circle'),
                Tables\Columns\TextColumn::make('created_at')->since()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->since()->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
