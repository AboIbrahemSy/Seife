<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorResource\Pages;
use App\Filament\Resources\VisitorResource\RelationManagers;
use App\Models\Visitor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisitorResource extends Resource
{
    protected static ?string $model = Visitor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTitle(): string
    {
        return __('pages.visitor');
    }
    public static function getPluralLabel(): string
    {
        return __('pages.visitor');
    }
    public static function getNavigationLabel(): string
    {
        return __('pages.visitor');
    }
    public static function getBreadcrumb(): string
    {
        return __('pages.visitor');
    }
    public static function getModelLabel(): string
    {
        return __('pages.visitor');
    }
    public static function getSubheading(): string
    {
        return __('pages.visitor');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')->label(__('forms.first_name'))->required(),
                Forms\Components\TextInput::make('last_name')->label(__('forms.last_name'))->required(),
                Forms\Components\TextInput::make('phone_number')->label(__('forms.phone_number')),
                Forms\Components\TextInput::make('email')->label(__('forms.email')),
                Forms\Components\TextInput::make('company')->label(__('forms.company')),
                Forms\Components\TextInput::make('job_title')->label(__('forms.job_title')),
                Forms\Components\TextInput::make('country')->label(__('forms.country'))->required(),
                Forms\Components\TextInput::make('address')->label(__('forms.address')),
                Forms\Components\Textarea::make('company_info')->label(__('forms.company_info')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label(__('forms.first_name')),
                Tables\Columns\TextColumn::make('last_name')->label(__('forms.last_name')),
                Tables\Columns\TextColumn::make('email')->label(__('forms.email')),
                Tables\Columns\TextColumn::make('company')->label(__('forms.company')),
                Tables\Columns\TextColumn::make('country')->label(__('forms.country')),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListVisitors::route('/'),
            'create' => Pages\CreateVisitor::route('/create'),
            'edit' => Pages\EditVisitor::route('/{record}/edit'),
        ];
    }
}
