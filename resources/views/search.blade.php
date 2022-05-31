<x-app-layout >
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div>
            <form action="{{route('searchitem')}}" method="POST">
                @csrf
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1D2B56;font-family: 'Montserrat', sans-serif ; margin:30px ">Produits à la une <a href="" style=" font-family: 'Montserrat', sans-serif ;font-style: normal; font-weight: 400; font-size: 16px; line-height: 24px; opacity: 0.75; margin: 10px">Toutes les produits</a></h1>
                    <div style="display:flex">
                        @method('search')
                        
                        @foreach($items as $item)
                            
                        
                        <div style="background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; width:290px ;margin:30px;">
                            <img src="{{asset('images/image 5.png')}}" style="margin: auto ;border-radius: 0.5rem;" >
                            <h6 style="font-style: normal;  font-weight: 400;  font-size: 10px; line-height: 120%; text-transform: uppercase; width: 12rem;width: 400, Regular; size: 10px;color: #A5AABB;margin: 20px;">{{$item->Type}}</h6>
                            <h1 style=" font-family: 'Montserrat', sans-serif ;  font-style: normal;  font-weight: 550;  font-size: 16px; line-height: 120%; color: #1D2B56;margin: 20px;">{{$item->Nom}}</h1>
                            <p style="font-family: 'Montserrat', sans-serif; font-style: normal;text-align: center;  font-weight: 300; font-size: 10px; line-height: 150%; color: #A5AABB;  width: 226px;margin: 20px;">{{$item->Description}}</p>
                            <div style="display: flex; background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;">
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">New</p>
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">electronic</p>
                            </div>
                        </div>
                    
                        
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
        {{-- <div style="display: flex; flex-direction: column;">
        <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1A1A1A;font-family: 'Montserrat', sans-serif ; margin:30px">Services aux entreprises <x-jet-button style="margin-left: 1100px;  background: #FE9A00; border-radius: 8px;">Explorer les services</x-jet-button></h1>
        <div style="display:flex">
            @foreach($services as $service)
            <div style=" background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; width:288px ;margin:30px;">
                <img src="{{asset('images/Rectangle 88.png')}}" style="margin: auto ;border-radius: 0.5rem;" >
                <h6 style="font-style: normal;  font-weight: 400;  font-size: 10px; line-height: 120%; text-transform: uppercase; width: 12rem;width: 400, Regular; size: 10px;color: #A5AABB;margin: 20px;">{{$service->Type}}</h6>
                <h1 style=" font-family: 'Montserrat', sans-serif ;  font-style: normal;  font-weight: 550;  font-size: 16px; line-height: 120%; color: #1D2B56;margin: 20px;">{{$service->Nom}}</h1>
                <p style="font-family: 'Montserrat', sans-serif; font-style: normal;text-align: center;  font-weight: 300; font-size: 10px; line-height: 150%; color: #A5AABB;  width: 226px;margin: 20px;">{{$service->Description}}</p>
                <div style="display: flex; background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;">
                    <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">New</p>
                    <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 70px; height: 20px; text-align: center ;margin: 10px;">électronique</p>
                </div>
                
            </div>
            @endforeach
            
            
            
           
        </div>     --}}
    
     



</x-app-layout>