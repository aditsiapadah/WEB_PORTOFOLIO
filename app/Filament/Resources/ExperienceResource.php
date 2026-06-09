<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),

            Forms\Components\TextInput::make('position_title')
                ->required(),

            Forms\Components\TextInput::make('organization_name')
                ->required(),

            Forms\Components\DatePicker::make('start_date')
                ->required(),

            Forms\Components\DatePicker::make('end_date'),

            Forms\Components\Toggle::make('is_current'),

            Forms\Components\Textarea::make('description')
                ->required(),

        ]);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([

            Tables\Columns\TextColumn::make('position_title'),

            Tables\Columns\TextColumn::make('organization_name'),

            Tables\Columns\TextColumn::make('start_date'),

            Tables\Columns\IconColumn::make('is_current')
                ->boolean(),

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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
