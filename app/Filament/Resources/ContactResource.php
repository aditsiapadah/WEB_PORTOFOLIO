<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),

            Forms\Components\Select::make('contact_type')
                ->options([
                    'Email' => 'Email',
                    'WhatsApp' => 'WhatsApp',
                    'Instagram' => 'Instagram',
                    'LinkedIn' => 'LinkedIn',
                    'Github' => 'Github',
                ])
                ->required(),

            Forms\Components\TextInput::make('contact_value')
                ->required(),

            Forms\Components\Toggle::make('is_public')
                ->default(true),

        ]);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([

            Tables\Columns\TextColumn::make('contact_type'),

            Tables\Columns\TextColumn::make('contact_value'),

            Tables\Columns\IconColumn::make('is_public')
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
        'index' => Pages\ListContacts::route('/'),
        'create' => Pages\CreateContact::route('/create'),
        'edit' => Pages\EditContact::route('/{record}/edit'),
    ];
}
}
