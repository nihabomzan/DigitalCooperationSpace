<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <!-- Page Background Color (Light Blue) via Inline CSS -->
        <div style="background-color: #e0f7fa; min-height: 80vh; display: flex; justify-content: center; align-items: center; padding-top: 2rem; padding-bottom: 2rem;">
            
            <!-- Form Container with Background Color via Inline CSS -->
            <div style="background-color: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 500px;">
                
                <!-- Heading with "Log in to your account" -->
                <h2 style="text-align: center; font-size: 1.5rem; font-weight: 600; color: rgb(7, 7, 7); margin-bottom: 1rem;">
                    {{ __('Log in to your account') }}
                </h2>

                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <!-- Log In Button with Blue Color via Inline CSS -->
                        <x-button class="ms-4" style="background-color: #007bff; border-color: #007bff; color: white;">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
