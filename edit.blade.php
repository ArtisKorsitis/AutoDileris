<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Edit/Update a car in the dealer') }}
        </h2>
    </x-slot>
    
    <form method="POST" action="{{ action([App\Http\Controllers\CarController::class, 'update'], $car->id) }}">
        @csrf
        @method('PUT')
        
        <div class="flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
            <x-label for="Price" value="{{ __('messages.Price') }}" />
            
            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="Price" class="block mt-1 w-full" type='number' name="Price" :value="{{ old('Price')}}" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Price"/>            
        </div>
        
        <div class="flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
            <x-label for="Discount" value="{{ __('messages.Discount') }}" />

            <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="Discount" class="block mt-1 w-full" type='number' name="Discount" :value="{{ old('Discount') }}" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Discount"/>            
        </div>
        
        <div class="flex items-center justify-center mt-4">
            <x-button type="submit" class="ml-0">
                {{ __('messages.EDIT/UPDATE') }}
            </x-button>
        </div>
    </form>
</x-app-layout>

