<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticipationResource\Pages;
use App\Filament\Resources\ParticipationResource\RelationManagers;
use App\Models\Participation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParticipationResource extends Resource
{
    protected static ?string $model = Participation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                            Forms\Components\TextInput::make('company_name')->required(),
            Forms\Components\TextInput::make('responsible_person')->required(),
            Forms\Components\TextInput::make('job_title')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('phone_number')->required(),
            Forms\Components\TextInput::make('nationality')->required(),
            Forms\Components\Textarea::make('full_address')->required(),
            Forms\Components\TextInput::make('commercial_registration_no')->required(),
            Forms\Components\TextInput::make('activity_type')->required(),
            Forms\Components\TextInput::make('requested_area')->numeric()->required(),
            Forms\Components\Select::make('setup_preference')
                ->options([
                    'raw_space' => 'Raw Space Only',
                    'not_equipped' => 'Not Equipped Booth',
                    'fully_equipped' => 'Fully Equipped Booth'
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                            Tables\Columns\TextColumn::make('company_name'),
            Tables\Columns\TextColumn::make('responsible_person'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('requested_area'),
            Tables\Columns\TextColumn::make('setup_preference'),
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
            'index' => Pages\ListParticipations::route('/'),
            'create' => Pages\CreateParticipation::route('/create'),
            'edit' => Pages\EditParticipation::route('/{record}/edit'),
        ];
    }
}
