<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Akreditasi Univ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-row mx-auto sm:px-6 lg:px-8">
            @livewire('pemutu-univ')
        </div>
    </div>
</x-guest-layout>
