<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            FileUpload::make('thumbnail')
                ->image()
                ->directory('projects')
                ->disk('public')
                ->imageEditor(),
            TextInput::make('project_title')
                ->required(),
            TextInput::make('project_type')
                ->required(),
            TextInput::make('role')
                ->required(),
            Toggle::make('is_ongoing'),
            Textarea::make('description'),
            Textarea::make('technologies'),
            TextInput::make('github_url'),
        ]);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('thumbnail')
                ->disk('public')
                ->width(100)
                ->height(100),
            TextColumn::make('project_title')
                ->searchable()
                ->sortable(),
            TextColumn::make('project_type'),
            TextColumn::make('role'),
            IconColumn::make('is_ongoing')
                ->boolean(),
            TextColumn::make('description')
                ->limit(50),
            TextColumn::make('technologies')
                ->limit(30),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
