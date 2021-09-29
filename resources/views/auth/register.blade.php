{{-- <x-guest-layout> --}}
    <x-layout.static-page>
    
        <x-auth-card>
            <x-slot name="formname">
                Sign up and start dreaming with Remi today!
            </x-slot>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="/register">
            {{-- {{ route('register') }} --}}
                @csrf
                
                <div class="grid grid-cols-2 gap-4 mt-2">
                <!-- First Name -->
                <div>
                    <x-label for="first_name" :value="__('First Name')" />
    
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                </div>

                <!-- Last Name -->
                <div>
                    <x-label for="last_name" :value="__('Last Name')" />
    
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <!-- Username -->
                <div >
                    <x-label for="username" :value="__('Username')" />
                    
                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>
                    <!-- Date of Birth -->
                    <div>
                        <x-label for="date_of_birth" :value="__('date_of_birth')"/>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" :value="old('date_format:Y-m-d')" required autofocus>
                    </div>
                    </div>
    
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <div class="grid grid-cols-2 gap-4 mt-4">
                <!-- Password -->
                <div>
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
    
                <!-- Confirm Password -->
                <div>
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
    
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>
            </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
    
                    <x-auth-button class="ml-4">
                        Register
                        {{-- {{ __('Register') }} --}}
                    </x-auth-button>
                </div>
            </form>
        </x-auth-card>
    </x-layout.static-page>
    
    {{-- </x-guest-layout> --}}
    