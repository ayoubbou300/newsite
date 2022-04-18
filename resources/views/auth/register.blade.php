<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<head>
    <style>
        .registrer{
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                color: black
            }
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
            .p{
                
                left: 8.47%;
                right: 84.83%;
                top: 32.88%;
                bottom: 65.5%;

                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 500;
                font-size: 13px;
                line-height: 10px;

                color: black;

                opacity: 1.5; 
                height: 30px;
                width: 19px;
                left: 130px;
                top: 270px;
                
          
                }
                
                
    </style>
</head>
<x-guest-layout>
    <div class="connexion">  Inscrivez-vous   </div>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                
                <x-jet-input id="name" class="block mt-1 w-full fontF rounded-lg " type="text" name="name" :value="old('name')" required  autocomplete="name" >
                    <x-slot name="image">
                        <img src="{{asset('images/name.png')}}" width="19.54px" height="16px" />

                    </x-slot>
                    <p class="fontF">Nom Complet*</p></x-jet-input>
            </div>

            <div class="mt-4">
                
                <x-jet-input id="email" class="block mt-1 w-full fontF rounded-lg"  type="email" name="email" :value="old('email')" required >
                    <x-slot name="image">
                        <img src="{{asset('images/arroba.png')}}" width="19.54px" height="16px" />

                    </x-slot>
                    <p class="fontF">Email*</p></x-jet-input>
            </div>

            <div class="mt-4">
                
                <x-jet-input id="password" class="block mt-1 w-full fontF rounded-lg"  type="password" name="password" required autocomplete="new-password" >
                    <x-slot name="image">
                        <img src="{{asset('images/padlock.png')}}" width="19.54px" height="16px" />

                    </x-slot>
                    <p class="fontF">Mot de passe*</p></x-jet-input>
            </div>

            <div class="mt-4">
               
                <x-jet-input id="password_confirmation" class="block mt-1 w-full fontF rounded-lg"  type="password" name="password_confirmation" required autocomplete="new-password" >
                    <x-slot name="image">
                        <img src="{{asset('images/password.png')}}" width="19.54px" height="16px" />

                    </x-slot>
                    <p class="fontF">Confirmation du Mot de passe*</p></x-jet-input>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div  class="flex items-center justify-end mt-4">
                <div style="position: absolute; bottom: 30% ;right: 70%" class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('J’ai lu et j’accepte les conditions générales et les termes d’utilisation') }}</span>
                    </label>
                </div>
                
                <a style="position: absolute; bottom: 20% ;right: 80% ;" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 " style="background-color: #F3F4F6">
                    <div class="registrer">{{ __('Register') }}</div>
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
