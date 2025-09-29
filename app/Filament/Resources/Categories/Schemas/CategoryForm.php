<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Information')
                    ->description('Enter the category details')
                    ->icon('heroicon-o-tag')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Category Name')
                                    ->required()
                                    ->columnSpan(1),

                                TextInput::make('description')
                                    ->label('Description')
                                    ->columnSpan(1),
                            ]),
                    ]),

                Section::make('Settings')
                    ->description('Configure category status')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->schema([
                        Toggle::make('active')
                            ->label('Active')
                            ->required()
                            ->inline(false),
                    ]),
            ]);
    }
}
