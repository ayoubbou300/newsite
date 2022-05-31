<x-app-layout >
    <div style=" margin-top: 100px; display: flex;  border: 3px solid green; padding: 10px; width: 1432px; left: 104px;background: #FFFFFF; border: 1px solid #F7F9FC; box-sizing: border-box; box-shadow: 4px 4px 4px ring-blue-50, 8px 16px 40px ring-blue-50; border-radius: 8px;">
        <form action="{{route('searchitem')}}" style="display: flex ;margin: auto; border: 3px;width: 1432px; " method="GET">
            <img src="{{asset('images/search.png')}}" style="margin: auto" >
            <input name="Nom" style=" border-style: none;padding-left: 6rem; padding-right: 6rem; opacity: 0.5;margin: auto ;box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color); " type="text" placeholder="Terme de recherche (entreprise, produit…)">
            <img src="{{asset('images/Line.png')}}" style="margin: auto" >
            <select  name="categorie_id" id="categorie" style="border-style: none; margin: auto ;opacity: 0.5;padding-left: 4rem; padding-right: 4rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);"  >
                <option value=1>électricité</option>
                <option value=2>Electronic</option>
                <option value=3>Réparation</option>
                <option value=4>Marketing</option>
            </select>
            <img src="{{asset('images/Line.png')}}" style="margin: auto" >
            <select name="Type" id="Type" style=" border-style: none; margin: auto;opacity: 0.5;padding-left: 4rem; padding-right: 4rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color); margin-right: 70px">
                
                <option value="Service">Service</option>
                <option value="Produit">Produit</option>
            </select>
            
            <x-jet-button style="   font-size: 13px; background-color: #FE9A00;padding-left: 2rem; padding-right: 2rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);" type="submit">Chercher</x-jet-button>
        </form>
    </div>
    <div style="">
        <div style=" padding-left: 4rem ;padding-top: 4rem">
           
            <div style="display: flex; flex-direction: column;">
                <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1D2B56;font-family: 'Montserrat', sans-serif ; margin:30px ">Produits à la une </h1>
                <div style="display:flex">
                    
                    @foreach($produits as $produit)
                        
                    
                    <div style="background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; width:290px ;margin:30px;">
                        <img src="{{asset('images/image 5.png')}}" style="margin: auto ;border-radius: 0.5rem;" >
                        <h6 style="font-style: normal;  font-weight: 400;  font-size: 10px; line-height: 120%; text-transform: uppercase; width: 12rem;width: 400, Regular; size: 10px;color: #A5AABB;margin: 20px;">{{$produit->Type}}</h6> 
                        <h1 style=" font-family: 'Montserrat', sans-serif ;  font-style: normal;  font-weight: 550;  font-size: 16px; line-height: 120%; color: #1D2B56;margin: 20px;">{{$produit->Nom}}</h1>
                        <p style="font-family: 'Montserrat', sans-serif; font-style: normal;text-align: center;  font-weight: 300; font-size: 10px; line-height: 150%; color: #A5AABB;  width: 226px;margin: 20px;">{{$produit->Description}}</p>
                        <div style="display: flex; background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;">
                            <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">New</p>
                            <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">electronic</p>
                        </div>
                    </div>
                
                    
                    @endforeach
                </div>
            
            </div>
            <div style="display: flex; flex-direction: column;">
                <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1A1A1A;font-family: 'Montserrat', sans-serif ; margin:30px">Services aux entreprises </h1>
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
                    
                    
                    
                   
                </div>    
            
            </div>

</x-app-layout>
