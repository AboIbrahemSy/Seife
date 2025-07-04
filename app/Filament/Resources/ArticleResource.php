<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTitle(): string
    {
        return __('pages.article');
    }
    public static function getPluralLabel(): string
    {
        return __('pages.article');
    }
    public static function getNavigationLabel(): string
    {
        return __('pages.article');
    }
    public static function getBreadcrumb(): string
    {
        return __('pages.article');
    }
    public static function getModelLabel(): string
    {
        return __('pages.article');
    }
    public static function getSubheading(): string
    {
        return __('pages.article');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\Section::make(__('forms.article_section'))
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label(__('forms.title'))
                            ->required(),
                        Forms\Components\TextInput::make('author')
                            ->label(__('forms.author'))
                            ->required(),
                        Forms\Components\MarkdownEditor::make('content')
                            ->label(__('forms.content'))
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label(__('forms.image'))
                            ->image(),
                        Forms\Components\Select::make('lang')
                            ->label(__('forms.language'))
                            ->native(false)
                            ->default('ar')
                            ->options([
                                'en' => __('forms.language_en'),
                                'ar' => __('forms.language_ar'),
                            ]),
                        Forms\Components\Toggle::make('published')
                            ->label(__('forms.published'))
                            ->default(false),
                    ])
                    ])]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label(__('forms.title')),
                Tables\Columns\TextColumn::make('author')
                    ->label(__('forms.author')),
                Tables\Columns\BooleanColumn::make('published')
                    ->label(__('forms.published')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('forms.created_at'))
                    ->dateTime('Y-m-d H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
