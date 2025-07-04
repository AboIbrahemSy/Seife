<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticipationResource\Pages;
use App\Models\Participation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ParticipationResource extends Resource
{
    protected static ?string $model = Participation::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTitle(): string
    {
        return __('forms.participation');
    }
    public static function getPluralLabel(): string
    {
        return __('forms.participation');
    }
    public static function getNavigationLabel(): string
    {
        return __('forms.participation');
    }
    public static function getBreadcrumb(): string
    {
        return __('forms.participation');
    }
    public static function getModelLabel(): string
    {
        return __('forms.participation');
    }
    public static function getSubheading(): string
    {
        return __('forms.participation');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('forms.company_info'))
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('company_name')
                            ->label(__('forms.company_name'))
                            ->required(),

                        Forms\Components\TextInput::make('commercial_registration_no')
                            ->label(__('forms.commercial_registration_no'))
                            ->required(),

                        Forms\Components\TextInput::make('activity_type')
                            ->label(__('forms.activity_type'))
                            ->required(),

                        Forms\Components\TextInput::make('full_address')
                            ->label(__('forms.full_address'))
                            ->required(),
                    ]),

                Forms\Components\Section::make(__('forms.personal_info'))
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('responsible_person')
                            ->label(__('forms.responsible_person'))
                            ->required(),

                        Forms\Components\TextInput::make('job_title')
                            ->label(__('forms.job_title'))
                            ->required(),

                        Forms\Components\TextInput::make('nationality')
                            ->label(__('forms.nationality'))
                            ->required(),

                        Forms\Components\TextInput::make('email')
                            ->label(__('forms.email'))
                            ->email()
                            ->required(),

                        Forms\Components\TextInput::make('phone_number')
                            ->label(__('forms.phone_number'))
                            ->required(),
                    ]),

                Forms\Components\Section::make(__('forms.participation_info'))
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('requested_area')
                            ->label(__('forms.requested_area'))
                            ->numeric()
                            ->required(),

                        Forms\Components\Select::make('setup_preference')
                            ->label(__('forms.setup_preference'))
                            ->options([
                                'raw_space'      => __('forms.setup_options.raw_space'),
                                'not_equipped'   => __('forms.setup_options.not_equipped'),
                                'fully_equipped' => __('forms.setup_options.fully_equipped'),
                            ])
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                    ->label(__('forms.company_name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('responsible_person')
                    ->label(__('forms.responsible_person')),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('forms.email')),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label(__('forms.phone_number')),
                Tables\Columns\TextColumn::make('requested_area')
                    ->label(__('forms.requested_area')),
                Tables\Columns\TextColumn::make('setup_preference')
                    ->label(__('forms.setup_preference'))
                    ->formatStateUsing(function ($state) {
                        // ترجمة الخيار في الجدول
                        return __('forms.setup_options.' . $state);
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('forms.created_at'))
                    ->dateTime('Y-m-d H:i'),
            ])
            ->filters([
                // يمكن إضافة فلاتر هنا
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListParticipations::route('/'),
            'create' => Pages\CreateParticipation::route('/create'),
            'edit'   => Pages\EditParticipation::route('/{record}/edit'),
        ];
    }
}
