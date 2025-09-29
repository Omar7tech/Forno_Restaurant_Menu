<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Upload Images')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('products')
                    ->image()
                    ->downloadable()
                    ->openable()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                        '3:4',
                    ])
                    ->maxSize(2048)
                    ->helperText('📸 Upload high-quality image (max 2MB)'),
                TextInput::make('name')
                    ->required(),
                TextInput::make('description'),

                Toggle::make('active')
                    ->required(),
                Toggle::make('featured')
                    ->required(),
                Toggle::make('new')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')->required()->searchable()->preload(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
            ]);
    }
}
