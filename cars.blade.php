<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ( $cars as $car )
                    <p class='text-lg'>
                        <a href="{{ url('car', $car->id) }}">{{ $car->Manufacturer }} {{ $car->Model }} {{ $car->Price }} EUR</a>
                    </p>
                    @endforeach
                    
                    @can('is-admin')
                    <x-nav-link :href="route('car.create')">
                        {{ __('ADD A NEW CAR') }}
                    </x-nav-link>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>