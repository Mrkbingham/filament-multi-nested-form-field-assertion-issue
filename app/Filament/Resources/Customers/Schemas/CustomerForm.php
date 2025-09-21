<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Section::make() // If you change this to a section, it also doesn't work
                Group::make()
                    ->relationship('customerGroup')
                    ->schema([
                            TextInput::make('single_nested_field')
                                ->label('Single Nested Field')
                                ->required(),
                            Section::make()
                                // ->key('customerOrg') // If you add a key, this works
                                ->relationship('customerOrg')
                                ->schema([
                                    TextInput::make('double_nested_field')
                                        ->label('Double Nested Field')
                                        ->required(),
                                ]),
                        ]),
            ]);
    }
}
