<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p class='text-lg'><strong class='font-semibold'>{{ __('Manufacturer') }}:</strong>{{ $car->Manufacturer}}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Model') }}:</strong> {{ $car->Model }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Price') }}:</strong> {{ $car->Price }} EUR</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('New/Used') }}:</strong> {{ $car->New_Used }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Type') }}:</strong>{{ $car->Type }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Year') }}:</strong> {{ $car->Year }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Engine Type') }}:</strong>{{ $car->Engine_Type }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Power') }}:</strong> {{ $car->Power }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Mileage') }}:</strong>{{ $car->Mileage }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Tax') }}:</strong> {{ $car->Tax }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('Discount') }}:</strong> {{ $car->Discount }}</p>
                
                <x-button id="btn-buy" car-id="{{ $car->id }}">
                    {{ __('PURCHASE THIS CAR') }}
                </x-button>
            </div>
        </div>
                
                                  
</x-app-layout>

