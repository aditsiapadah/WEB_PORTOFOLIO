<?php

namespace App\Filament\Resources;

use App\Models\Profile;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use App\Filament\Resources\ProfileResource\Pages;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Portfolio';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),

            Forms\Components\TextInput::make('username')
                ->required(),

            Forms\Components\FileUpload::make('photo_profile')
                ->image()
                ->disk('public')
                ->directory('profiles')
                ->visibility('public'),

            Forms\Components\Textarea::make('short_bio'),

            Forms\Components\Textarea::make('professional_vision'),

            Forms\Components\Textarea::make('mission'),

            Forms\Components\TextInput::make('location'),

            Forms\Components\DatePicker::make('date_of_birth'),
        ]);
    }

    public static function table(Table $table): Table
{
    return $table->columns([
        Tables\Columns\ImageColumn::make('photo_profile'),
        Tables\Columns\TextColumn::make('username'),
        Tables\Columns\TextColumn::make('location'),

        Tables\Columns\TextColumn::make('date_of_birth')
            ->date('d/m/Y'),
    ]);
}

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}