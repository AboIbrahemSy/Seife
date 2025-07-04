<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AudioResource\Pages;
use App\Filament\Resources\AudioResource\RelationManagers;
use App\Models\Audio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AudioResource extends Resource
{
    protected static ?string $model = Audio::class;

    protected static ?string $navigationIcon = 'heroicon-o-musical-note';

    public static function getTitle(): string
    {
        return __('pages.audio');
    }
    public static function getPluralLabel(): string
    {
        return __('pages.audio');
    }
    public static function getNavigationLabel(): string
    {
        return __('pages.audio');
    }
    public static function getBreadcrumb(): string
    {
        return __('pages.audio');
    }
    public static function getModelLabel(): string
    {
        return __('pages.audio');
    }
    public static function getSubheading(): string
    {
        return __('pages.audio');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('forms.audio_section_basic'))
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label(__('forms.audio_title'))
                            ->required(),

                        Forms\Components\Select::make('language_id')
                            ->label(__('forms.audio_language'))
                            ->relationship('language', 'name')
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('forms.audio_section_files'))
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->label(__('forms.audio_cover'))
                            ->required(),

                        Forms\Components\FileUpload::make('file_name')
                            ->label(__('forms.audio_audio_file'))
                            ->acceptedFileTypes(['audio/mpeg', 'audio/mp3'])
                            ->directory('audios')
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make(__('forms.audio_section_description'))
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label(__('forms.audio_description'))
                            ->rows(4),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('forms.audio_cover'))
                    ->rounded(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('forms.audio_title'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('language.name')
                    ->label(__('forms.audio_language')),
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
            'index' => Pages\ListAudio::route('/'),
            'create' => Pages\CreateAudio::route('/create'),
            'edit' => Pages\EditAudio::route('/{record}/edit'),
        ];
    }
}
