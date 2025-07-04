<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BreakingNews;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BreakingNewsResource\Pages;
use App\Filament\Resources\BreakingNewsResource\RelationManagers;

class BreakingNewsResource extends Resource
{
    protected static ?string $model = BreakingNews::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTitle(): string
    {
        return __('pages.breaking_news');
    }
    public static function getPluralLabel(): string
    {
        return __('pages.breaking_news');
    }
    public static function getNavigationLabel(): string
    {
        return __('pages.breaking_news');
    }
    public static function getBreadcrumb(): string
    {
        return __('pages.breaking_news');
    }
    public static function getModelLabel(): string
    {
        return __('pages.breaking_news');
    }
    public static function getSubheading(): string
    {
        return __('pages.breaking_news');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('forms.breaking_news_section'))
                    ->columns(2)
                    ->schema([
                        Forms\Components\Textarea::make('headline')
                            ->label(__('forms.breaking_news_headline'))
                            ->required(),

                        Forms\Components\Select::make('lang')
                            ->label(__('forms.language'))
                            ->native(false)
                            ->default('ar')
                            ->options([
                                'en' => __('forms.language_en'),
                                'ar' => __('forms.language_ar'),
                            ]),

                        Forms\Components\Toggle::make('active')
                            ->label(__('forms.active'))
                            ->default(true),
                            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                            Tables\Columns\TextColumn::make('headline')
                ->label(__('forms.breaking_news_headline'))
                ->searchable(),
                                BooleanColumn::make('active')
                    ->label(__('forms.active')),
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
            'index' => Pages\ListBreakingNews::route('/'),
            'create' => Pages\CreateBreakingNews::route('/create'),
            'edit' => Pages\EditBreakingNews::route('/{record}/edit'),
        ];
    }
}
