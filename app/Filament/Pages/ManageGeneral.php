<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use BackedEnum;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageGeneral extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = GeneralSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Configuration')->columnSpanFull()
                    ->description('General website settings and visibility options')
                    ->icon('heroicon-o-globe-alt')
                    ->schema([
                        Grid::make(2)
                            ->schema([


                                Select::make('theme')
                                    ->label('Site Theme')
                                    ->options([
                                        'light' => 'Light',
                                        'black' => 'Black',
                                        'dark' => 'Dark',
                                    ])
                                    ->required()
                                    ->native(false)
                                    ->default('light')
                                    ->selectablePlaceholder(false),
                            ]),


                    ]),

                Section::make('Social Media')->columnSpanFull()
                    ->description('Configure social media links and visibility')
                    ->icon('heroicon-o-share')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('instagram_url')
                                    ->label('Instagram URL')
                                    ->url()
                                    ->placeholder('https://instagram.com/username'),

                                Toggle::make('instagram_active')
                                    ->label('Show Instagram')
                                    ->required()
                                    ->inline(false),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('facebook_url')
                                    ->label('Facebook URL')
                                    ->url()
                                    ->placeholder('https://facebook.com/page'),

                                Toggle::make('facebook_active')
                                    ->label('Show Facebook')
                                    ->required()
                                    ->inline(false),
                            ]),
                    ]),

                Section::make('Contact Information')->columnSpanFull()
                    ->description('Configure contact methods and availability')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('whatsapp_number')
                                    ->label('WhatsApp Number')
                                    ->tel()
                                    ->placeholder('+1234567890'),

                                Grid::make(1)
                                    ->schema([
                                        Toggle::make('whatsapp_active')
                                            ->label('Enable WhatsApp')
                                            ->required()
                                            ->inline(false),

                                        Toggle::make('whatsapp_number_on_top')
                                            ->label('Show WhatsApp on Top')
                                            ->helperText('Display WhatsApp prominently')
                                            ->required()
                                            ->inline(false),
                                    ]),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('phone_number')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->placeholder('+1234567890'),

                                Toggle::make('phone_active')
                                    ->label('Show Phone Number')
                                    ->required()
                                    ->inline(false),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('location_url')
                                    ->label('Location URL')
                                    ->url()
                                    ->placeholder('https://maps.google.com/...'),

                                Toggle::make('location_active')
                                    ->label('Show Location')
                                    ->required()
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
