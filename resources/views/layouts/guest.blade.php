<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            #bg {
                background-image: url("../images/Rectangle 828.png");
                
                
                font-family: cursive;
                
                color: #142146;
            
                
                
           


            }
            .img{
                
                width: 204px;
                height: 51.76px;
                left: 86px;
                top: 256px;
                  
                 
                  
                  
                  
                


            }
            
           
        </style>
    </head>
    <body>
        <div class="flex flex-row w-full">
           
            <div class="font-sans text-gray-900 antialiased flex-1">
                {{ $slot }}
            </div>
            
             <div id="bg" class=" min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 flex-1">
                <img class="img object-top	" src="{{asset('images/Logo.png')}}"  />
                <p style="margin: 10" class="font-light	text-base "> Hershel est aujourd’hui un site de renommé international. C’est aussi une boutique créée à l’aide de la plateforme shopify en 2009. Le site est surtout reconnu à cause de la qualité des produits qu’il fournit. Aucun détail n’est négligé sur le site et les services offerts sont de qualité.</p></div>
        </div>
    </body>
</html>
