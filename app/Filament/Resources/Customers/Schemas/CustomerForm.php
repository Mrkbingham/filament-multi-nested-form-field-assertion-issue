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
                // Section::make() // Changing this to a section will cause the 'customerGroup' key to get dropped from the nest field's keys
                Group::make()
                    ->relationship('customerGroup')
                    ->schema([
                            TextInput::make('single_nested_field')
                                ->label('Single Nested Field')
                                ->required(),
                            Section::make()
                                // ->key('customerOrg') // Adding a key will add the key to the `double_nested_field` field's key inheritance path
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
