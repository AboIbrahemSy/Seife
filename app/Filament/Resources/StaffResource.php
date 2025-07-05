<?php
namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Models\Staff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StaffResource extends Resource
{
    use Translatable;
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTitle(): string
    {
        return __('pages.staff');
    }
    public static function getPluralLabel(): string
    {
        return __('pages.staff');
    }
    public static function getNavigationLabel(): string
    {
        return __('pages.staff');
    }
    public static function getBreadcrumb(): string
    {
        return __('pages.staff');
    }
    public static function getModelLabel(): string
    {
        return __('pages.staff');
    }
    public static function getSubheading(): string
    {
        return __('pages.staff');
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('forms.name'))
                    ->required(),

                Forms\Components\TextInput::make('job_title')
                    ->label(__('forms.job_title')),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->label(__('forms.email')),

                Forms\Components\TextInput::make('phone')
                    ->label(__('forms.phone')),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('images/staff')
                    ->label(__('forms.image_path'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('forms.name')),
                Tables\Columns\TextColumn::make('job_title')
                    ->label(__('forms.job_title')),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('forms.email')),
                Tables\Columns\TextColumn::make('phone')
                    ->label(__('forms.phone')),
                Tables\Columns\ImageColumn::make('image')
                    ->rounded()
                    ->label(__('forms.image_path')),
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
            'index'  => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit'   => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
