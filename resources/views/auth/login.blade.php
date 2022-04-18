
<head>
    <style>
        .connexion {
            height: 38px;
            width: 152px;
            top: 118px;
            border-radius: nullpx;
            font-family: Montserrat;
            font-size: 27px;
            font-weight: 700;
            line-height: 38px;
            letter-spacing: 0em;
            position: absolute;
            left: 4.71%;
            right: 84.09%;
            
            


            }
            .login{
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                color: black
            }
            #email{
                border: 1px solid rgba(16, 23, 57, 0.1);
                box-sizing: border-box;
                border-radius: 10px;
            }
            #password{
                border: 1px solid rgba(16, 23, 57, 0.1);
                box-sizing: border-box;
                border-radius: 10px;
            }
            
                

    </style>
</head>
<x-guest-layout>
    <div class="connexion">Connexion</div>
    <x-jet-authentication-card 	>
        <x-slot name="logo">
            
            
        </x-slot>
        <label for=""></label>
        

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600"  >
                {{ session('status') }}
            </div>
        @endif
        

        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div >
                
                <x-jet-input id="email"  class="block mt-1 w-full   rounded-lg" type="email"  name=" email"  :value="old('email')" required  >
                    <x-slot name="image">
                        <img src="{{asset('images/Message.png')}}" />

                    </x-slot>
                    Adresse e-mail
                
                </x-jet-input>
            </div>

            <div class="mt-4">
                
                <x-jet-input id="password"  class="block mt-1 w-full   rounded-lg" type="password" name="password" required autocomplete="current-password" >
                    <x-slot name="image">
                        <img src="{{asset('images/Lock.png')}}" />
    
                    </x-slot>
                    Mot de passe
                </x-jet-input>
                
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
            <div>
                
                <a style="position: absolute; bottom: 30% ;font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-size: 12px; line-height: 15px; color: #FE9A00;" class="flex underline text-sm text-gray-600 hover:text-gray-900" href="{{url('/register')}}">
                    <p style="color: black">Pas encore inscrit? </p>{{ __(" S'inscrire gratuitement.") }}
                </a>
            
            </div>
        </form>
    </x-jet-authentication-card>
    
</x-guest-layout>
