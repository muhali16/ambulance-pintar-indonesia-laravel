<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesResource\Pages;
use App\Filament\Resources\ArticlesResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticlesResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'News & Articles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_publish')->name('is_publish')->label("Publish artikel?")->inline(false)->required(),
                Forms\Components\TextInput::make('title')->name('title')->required()->minLength(10)->maxLength(255)->reactive()->afterStateUpdated(function (\Closure $set, $state) {
                    $set('slug', Str::slug($state));
                }),
                Forms\Components\TextInput::make('slug')->name('slug')->required(),
                Forms\Components\FileUpload::make("thumbnail")->name('thumbnail')->image()->disk('public')->directory('article-thumbnail')->required()->enableOpen(),
                Forms\Components\RichEditor::make('body')->name('body')->required()->disableToolbarButtons(['attachFiles', 'codeBlock', ]),
                Forms\Components\Select::make('category_id')->name('category_id')->label('Category')->options(Category::all()->pluck('name', 'id'))->required()->searchable(),
                Forms\Components\TagsInput::make("tags")->label('Tag')->name('tags')->separator(','),
//                Forms\Components\TextInput::make('user_id')->default(Filament::auth()->user()->getAuthIdentifier())->hidden(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('views')->sortable(),
                Tables\Columns\IconColumn::make('is_publish')->label('Pusblish')->boolean()->trueIcon('heroicon-o-badge-check')->falseIcon('heroicon-o-x-circle'),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')->sortable()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->mutateFormDataUsing(function ($data) {
                    if (file_exists('storage/' . $data->thumbnail)) {
                        Storage::disk('public')->delete('storage/' . $data->thumbnail);
                    }
                }),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticles::route('/create'),
            'view' => Pages\ViewArticle::route('/{record}'),
            'edit' => Pages\EditArticles::route('/{record}/edit'),
        ];
    }
}
