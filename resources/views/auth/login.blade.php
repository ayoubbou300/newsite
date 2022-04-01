<head>
    <style>
        .connexion {
            height: 38px;
            width: 152px;
            left: 64px;
            top: 100px;
            font-family: Montserrat;
            font-size: 27px;
            font-weight: 700;
            line-height: 38px;
            letter-spacing: 0em;
            text-align: left;
            }
            .login{
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                color: black
            }

    </style>
</head>
<x-guest-layout>
    <x-jet-authentication-card 	>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
            <div class="connexion">Connexion</div>
        </x-slot>
        

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600"  >
                {{ session('status') }}
            </div>
        @endif
        

        <form method="POST" action="{{ route('login') }}" style="background-color: #FE9A00 ">
            @csrf

            <div >
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email"  class="block mt-1 w-full  bg-gray-100	 " type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password"  class="block mt-1 w-full  bg-gray-100 " type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 " style="background-color: #F3F4F6 ">
                    <div class="login">{{ __('Log in') }}</div>
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    
</x-guest-layout>
