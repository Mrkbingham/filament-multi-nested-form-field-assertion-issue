<?php

use App\Filament\Resources\Customers\Pages\CreateCustomer;

use function Pest\Livewire\livewire;

it('confirm single nested field exists', function () {
    livewire(CreateCustomer::class)
        ->assertFormFieldExists('customerGroup.single_nested_field');
});

it('confirm doubly nested field exists', function () {
    livewire(CreateCustomer::class)
        ->assertFormFieldExists('customerGroup.customerOrg.double_nested_field');
});

it('confirm doubly nested field exists - this passes and should not', function () {
    livewire(CreateCustomer::class)
        ->assertFormFieldExists('customerGroup.double_nested_field');
});
