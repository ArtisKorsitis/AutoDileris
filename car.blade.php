<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Car Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Manufacturer') }}:</strong>{{ $car->Manufacturer}}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Model') }}:</strong> {{ $car->Model }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Price') }}:</strong> {{ $car->Price }} EUR</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.New/Used') }}:</strong> {{ $car->New_Used }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Type') }}:</strong>{{ $car->Type }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Year') }}:</strong> {{ $car->Year }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Engine Type') }}:</strong>{{ $car->Engine_Type }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Power') }}:</strong> {{ $car->Power }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Mileage') }}:</strong>{{ $car->Mileage }}</a></p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Tax') }}:</strong> {{ $car->Tax }}</p>
                <p class='text-lg'><strong class='font-semibold'>{{ __('messages.Discount') }}:</strong> {{ $car->Discount }}</p>
                    
                <br>
                
                <form action="{{ url('car/'.$car->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit" class="btn btn-sm btn-danger">{{ __('messages.PURCHASE THIS CAR') }} </x-button>
                </form>
                
                <br>
               
                @can('is-admin')
                <a href="{{action([App\Http\Controllers\CarController::class, 'edit'], $car->id) }}"> 
                    <x-button> {{ __('messages.EDIT THIS CAR') }} </x-button>
                </a> 
                @endcan
                    
            </div>
        </div>
                
                                  
</x-app-layout>

