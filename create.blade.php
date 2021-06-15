<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Add a new car to the dealer') }}
        </h2>
    </x-slot>
    
    <x-form>
    <form method="POST" action="{{ action([App\Http\Controllers\CarController::class, 'store']) }}">
        @csrf

        
        <div>
            <x-label for="VIN_Nr" value="{{ __('VIN_Nr') }}" />

            <x-input id="VIN_Nr" class="block mt-1 w-full" type="text" name="VIN_Nr" :value="old('VIN_Nr')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="VIN_Nr"/>            
        </div>

        
        <div>
            <x-label for="Manufacturer" value="{{ __('messages.Manufacturer') }}" />

            <x-input id="Manufacturer" class="block mt-1 w-full" type="text" name="Manufacturer" :value="old('Manufacturer')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Manufacturer"/>            
        </div>

        
        <div>
            <x-label for="New_Used" value="{{ __('messages.New/Used') }}" />

            <x-input id="New_Used" class="block mt-1 w-full" type="text" name="New_Used" :value="old('New_Used')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="New_Used"/>            
        </div>

        
        <div>
            <x-label for="Type" value="{{ __('messages.Type') }}" />
            
            <x-input id="Type" class="block mt-1 w-full" type="text" name="Type" :value="old('Type')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Type"/>            
        </div>
        
        
        <div>
            <x-label for="Model" value="{{ __('messages.Model') }}" />
            
            <x-input id="Model" class="block mt-1 w-full" type="text" name="Model" :value="old('Model')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Model"/>            
        </div>
        
        
        <div>
            <x-label for="Year" value="{{ __('messages.Year') }}" />

            <x-input id="Year" class="block mt-1 w-full" type="number" name="Year" :value="old('Year')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Year"/>            
        </div>
        
        
        <div>
            <x-label for="Engine_Type" value="{{ __('messages.Engine Type') }}" />
            
            <x-input id="Engine_Type" class="block mt-1 w-full" type="text" name="Engine_Type" :value="old('Engine_Type')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Engine_Type"/>            
        </div>
        
        
        <div>
            <x-label for="Power" value="{{ __('messages.Power') }}" />
            
            <x-input id="Power" class="block mt-1 w-full" type="number" name="Power" :value="old('Power')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Power"/>            
        </div>
        
        
        <div>
            <x-label for="Mileage" value="{{ __('messages.Mileage') }}" />
            
            <x-input id="Mileage" class="block mt-1 w-full" type='number' name="Mileage" :value="old('Mileage')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Mileage"/>            
        </div>
        
        
        <div>
            <x-label for="Price" value="{{ __('messages.Price') }}" />
            
            <x-input id="Price" class="block mt-1 w-full" type='number' name="Price" :value="old('Price')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Price"/>            
        </div>
        
        
        <div>
            <x-label for="Tax" value="{{ __('messages.Tax') }}" />

            <x-input id="Tax" class="block mt-1 w-full" type='number' step='any' name="Tax" :value="old('Tax')" required />

            <x-validation-error class="mb-4" :errors="$errors" title="Tax"/>            
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('messages.ADD') }}
            </x-button>
        </div>
    </form>
    </x-form>
</x-app-layout>