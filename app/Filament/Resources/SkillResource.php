<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Models\Skill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),

            Forms\Components\TextInput::make('skill_name')
                ->required(),

            Select::make('proficiency_level')
                ->label('Proficiency Level')
                ->options([
                    'Beginner' => 'Beginner',
                    'Intermediate' => 'Intermediate',
                    'Advanced' => 'Advanced',
                    'Expert' => 'Expert',
            ])
                ->required()
                ->native(false),

            Forms\Components\TextInput::make('category')
                ->required(),

        ]);
}
    public static function table(Table $table): Table
{
    return $table
        ->columns([

            Tables\Columns\TextColumn::make('skill_name'),

            Tables\Columns\TextColumn::make('proficiency_level'),

            Tables\Columns\TextColumn::make('category'),

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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
