<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Components\Grid;
use Filament\Infolists\Components\IconEntry;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Product Details')
                    ->icon('heroicon-o-cube')
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextEntry::make('name')
                                    ->label('Product Name')
                                    ->weight('bold')
                                    ->size('lg'),


                            ]),

                        TextEntry::make('description')
                            ->label('Description')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        Grid::make(2)
                            ->schema([
                                TextEntry::make('category.name')
                                    ->label('Category')
                                    ->placeholder('-')
                                    ->badge()
                                    ->color('primary'),

                                TextEntry::make('price')
                                    ->label('Price')
                                    ->money()
                                    ->size('lg')
                                    ->weight('bold')
                                    ->color('success'),


                            ]),
                    ]),

                Section::make('Status & Flags')
                    ->icon('heroicon-o-flag')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                IconEntry::make('active')
                                    ->label('Active')
                                    ->boolean(),

                                IconEntry::make('featured')
                                    ->label('Featured')
                                    ->boolean(),

                                IconEntry::make('new')
                                    ->label('New Product')
                                    ->boolean(),
                            ]),
                    ]),

                Section::make('Timestamps')
                    ->icon('heroicon-o-clock')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('created_at')
                                    ->label('Created At')
                                    ->dateTime()
                                    ->placeholder('-')
                                    ->since(),

                                TextEntry::make('updated_at')
                                    ->label('Updated At')
                                    ->dateTime()
                                    ->placeholder('-')
                                    ->since(),
                            ]),
                    ])
                    ->collapsible(),
            ]);
    }
}
