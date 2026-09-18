<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex mb-5 mt-5">
    <flux:input wire:model.live="search" label="Search:"/>
    <flux:spacer/>
    <flux:modal.trigger name="filter">
        <flux:button icon="funnel" icon:variant="outline" class="mr-4 mt-7"/>
    </flux:modal.trigger>
    <flux:button icon="plus" href="{{ route('employees.show') }}" class="mr-4 mt-7"/>
</div>
