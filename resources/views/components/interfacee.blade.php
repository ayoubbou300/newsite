



@props(['items'])
        <div style="display:flex;" >
            <div style="flex-direction: column; ; margin-top: 10rem;">
                <p style="font-family:'Montserrat', sans-serif ; font-style: normal; font-weight: 500; font-size: 5rem; line-height: 1;letter-spacing: 0em;text-align: left; color: #1D2B56; padding-left: 5rem" >Votre hub digital pour un business plus efficient</p>
                <p style="font-family: 'Montserrat', sans-serif ;  font-size: 27px; font-weight: 390; line-height: 32px; letter-spacing: 0em; text-align: left; padding-left: 5rem; padding-top: 4rem;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                
            </div>
            <div style=" float: right; padding: 4.5rem;  margin:  50px;">
                <img src="{{asset('images/multitasking or branding or product planninh.png')}}" style="width: 2000px; height:auto; " >
                
            </div>
        </div>
        <div style="display: flex; margin: auto; border: 3px solid green; padding: 10px; width: 1432px; left: 104px; top: 720px; background: #FFFFFF; border: 1px solid #F7F9FC; box-sizing: border-box; box-shadow: 4px 4px 4px ring-blue-50, 8px 16px 40px ring-blue-50; border-radius: 8px;">
            <img src="{{asset('images/search.png')}}" style="margin: auto" >
            <input style=" border-style: none;padding-left: 6rem; padding-right: 6rem; opacity: 0.5;margin: auto ;box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color); " type="text" placeholder="Terme de recherche (entreprise, produit…)">
            <img src="{{asset('images/Line.png')}}" style="margin: auto" >
            <select  name="" id="" style="border-style: none; margin: auto ;opacity: 0.5;padding-left: 4rem; padding-right: 4rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);"  ><option value="">Secteur</option></select>
            <img src="{{asset('images/Line.png')}}" style="margin: auto" >
            <select name="" id="" style=" border-style: none; margin: auto;opacity: 0.5;padding-left: 4rem; padding-right: 4rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);"><option value="">Type</option></select>
            <img src="{{asset('images/Line.png')}}" style="margin: auto" >
            <select name="" id="" style="border-style: none; margin: auto;opacity: 0.5;padding-left: 4rem; padding-right: 4rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);"><option value="">Province</option></select>
            <x-jet-button style="   font-size: 13px; background-color: #FE9A00;padding-left: 2rem; padding-right: 2rem; box-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);" type="submit">Chercher</x-jet-button>
        </div>
        <div style="">
            <div style=" padding-left: 4rem ;padding-top: 4rem">
                <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1D2B56;font-family: 'Montserrat', sans-serif ;">Explorer les secteurs <a href="" style=" font-family: 'Montserrat', sans-serif ;font-style: normal; font-weight: 400; font-size: 16px; line-height: 24px; opacity: 0.75; margin: 10px">Toutes les categories</a></h1>
                <div style=" padding-left: 4rem ;padding-top: 4rem">
                    <button style=" margin-right: 30px; padding: 10px; border-color: #FFFFFF; border-width: 30px  ; font-family:'Montserrat', sans-serif ; background-color: #FFFFFF;  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;margin: 2rem;width: 12rem;"><img src="{{asset('images/Group86.png')}}" style="margin: auto ;padding-bottom: 20px" >Agroalimentaire</button>
                    <button style="margin-right: 30px; padding: 9px;  padding-left: 25px; padding-right: 25px; border-color: #FFFFFF; border-width: 30px  ; font-family:'Montserrat', sans-serif ; background-color: #FFFFFF;  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; margin: 2rem;width: 12rem; "><img src="{{asset('images/Group2563.png')}}" style="margin: auto ;padding-bottom: 20px; " >Métallurgie</button>
                    <button style="margin-right: 30px; padding: 9px;  padding-left: 25px; padding-right: 25px; border-color: #FFFFFF; border-width: 30px  ; font-family:'Montserrat', sans-serif ; background-color: #FFFFFF;  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; margin: 2rem;width: 12rem;"><img src="{{asset('images/Group2564.png')}}" style="margin: auto ;padding-bottom: 20px; " >Textile</button>
                    <button style="margin-right: 30px; padding: 9px;  padding-left: 25px; padding-right: 25px; border-color: #FFFFFF; border-width: 30px  ; font-family:'Montserrat', sans-serif ; background-color: #FFFFFF;  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; margin: 2rem;width: 12rem;"><img src="{{asset('images/gear.png')}}" style="margin: auto ;padding-bottom: 30px; " >Mécanique</button>
                    <button style="margin-right: 30px; padding: 9px;  padding-left: 25px; padding-right: 25px; border-color: #FFFFFF; border-width: 30px  ; font-family:'Montserrat', sans-serif ; background-color: #FFFFFF;  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; margin: 2rem;width: 12rem; height: 11rem;"><img src="{{asset('images/mask 1.png')}}" style="margin: auto ;padding-bottom: 30px; " >Soins de santé</button>
                    
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1D2B56;font-family: 'Montserrat', sans-serif ; margin:30px ">Produits à la une <a href="" style=" font-family: 'Montserrat', sans-serif ;font-style: normal; font-weight: 400; font-size: 16px; line-height: 24px; opacity: 0.75; margin: 10px">Toutes les produits</a></h1>
                    <div style="display:flex">
                        
                        @for($i=0;$i<4;$i++)
                            
                        
                        <div style="background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; width:290px ;margin:30px;">
                            <img src="{{asset('images/image 5.png')}}" style="margin: auto ;border-radius: 0.5rem;" >
                            <h6 style="font-style: normal;  font-weight: 400;  font-size: 10px; line-height: 120%; text-transform: uppercase; width: 12rem;width: 400, Regular; size: 10px;color: #A5AABB;margin: 20px;">{{$items}}</h6>
                            <h1 style=" font-family: 'Montserrat', sans-serif ;  font-style: normal;  font-weight: 550;  font-size: 16px; line-height: 120%; color: #1D2B56;margin: 20px;">Exide Car Battery</h1>
                            <p style="font-family: 'Montserrat', sans-serif; font-style: normal;text-align: center;  font-weight: 300; font-size: 10px; line-height: 150%; color: #A5AABB;  width: 226px;margin: 20px;">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise.</p>
                            <div style="display: flex; background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;">
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">New</p>
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">electronic</p>
                            </div>
                        </div>
                    
                        
                        @endfor
                    </div>
                
                </div>
                <div style="display: flex; flex-direction: column;">
                    <h1 style="font-style: normal; font-weight: 500;  font-size: 30px; line-height: 130%; color: #1A1A1A;font-family: 'Montserrat', sans-serif ; margin:30px">Services aux entreprises <x-jet-button style="margin-left: 1100px;  background: #FE9A00; border-radius: 8px;">Explorer les services</x-jet-button></h1>
                    <div style="display:flex">
                        @for($i=0;$i<4;$i++)
                        <div style=" background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px; width:288px ;margin:30px;">
                            <img src="{{asset('images/Rectangle 88.png')}}" style="margin: auto ;border-radius: 0.5rem;" >
                            <h6 style="font-style: normal;  font-weight: 400;  font-size: 10px; line-height: 120%; text-transform: uppercase; width: 12rem;width: 400, Regular; size: 10px;color: #A5AABB;margin: 20px;">{{$items}}</h6>
                            <h1 style=" font-family: 'Montserrat', sans-serif ;  font-style: normal;  font-weight: 550;  font-size: 16px; line-height: 120%; color: #1D2B56;margin: 20px;">Réparation</h1>
                            <p style="font-family: 'Montserrat', sans-serif; font-style: normal;text-align: center;  font-weight: 300; font-size: 10px; line-height: 150%; color: #A5AABB;  width: 226px;margin: 20px;">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise.</p>
                            <div style="display: flex; background: #FFFFFF; box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.05); border-radius: 8px;">
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 62px; height: 20px; text-align: center ;margin: 10px;">New</p>
                                <p style="background: #EDEDED; border-radius: 20px; font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 300; font-size: 10px; line-height: 225%; color: #696B72;width: 70px; height: 20px; text-align: center ;margin: 10px;">électronique</p>
                            </div>
                            
                        </div>
                        @endfor
                        
                        
                        
                       
                    </div>    
                
                </div>
                <div style="background: #FFF4D9;width: 1532px; height: 860px; border-radius: 40px; margin: auto">
                    <p style="text-align: center; text-justify: inter-word; font-family: 'Montserrat', sans-serif; padding-top: 100px; font-style: normal;  font-weight: 600; font-size: 40px; line-height: 150%;color: #1D2B56;">Get you free package of marketing and advertising</p>
                    <p style="font-family:  'Montserrat', sans-serif;  font-style: normal;  font-weight: 400; font-size: 22px; line-height: 170%;text-align: center;  color: #1D2B56;  opacity: 0.75; padding-top: 100px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                    <x-jet-button style="text-align: center;justify-content: center; margin-left: 43%; margin-top: 6%; background: #FE9A00; border-radius: 8px;width: 192px;height: 56px;;box-shadow: 6px 8px 16px rgba(223, 56, 72, 0.3); ">Get it now</x-jet-button>
                    <img src="{{asset('images/Group (3).png')}}" style="margin: auto " >
                </div>
                    <div style="display: flex ;margin-top: 100px;">
                        <div style=" display: flex; background: #FFFFFF; box-shadow: 4px 4px 4px rgba(29, 43, 86, 0.04), 8px 16px 40px rgba(29, 43, 86, 0.04); border-radius: 16px;width: 600px; height: 200px; margin: auto ;margin-bottom: 60px">
                            <div>
                                <img src="{{asset('images/Frame 5.png')}}" style="border-radius: 16px 0px 104px 16px; " >
                            </div>
                            <div>
                                <p style=" width: 320px;font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 500; font-size: 25px; line-height: 130%; color: #1D2B56; margin: 10px">Lorem ipsum dolor sit ?</p>
                                <p style="font-family: 'Montserrat', sans-serif; font-style: normal; font-weight: 400; font-size: 16px; line-height: 170%;  opacity: 0.75;margin: 10px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyd tempor invidunt ut  sit amet, consetetur sadips.</p>

                            </div>
                            
                        </div>
                        <div style="display: flex; background: #FFFFFF; box-shadow: 4px 4px 4px rgba(29, 43, 86, 0.04), 8px 16px 40px rgba(29, 43, 86, 0.04); border-radius: 16px;width: 600px; height: 200px; margin: auto;margin-bottom: 60px">
                            <div>
                                <img src="{{asset('images/Frame 5 (1).png')}}" style="border-radius: 16px 0px 104px 16px;" >
                            </div>
                            
                            <div sty>
                                <p style=" width: 320px;font-family: 'Montserrat', sans-serif; font-style: normal;  font-weight: 500; font-size: 25px; line-height: 130%; color: #1D2B56; margin: 10px">Lorem ipsum dolor sit ?</p>
                                <p style="font-family: 'Montserrat', sans-serif; font-style: normal; font-weight: 400; font-size: 16px; line-height: 170%;  opacity: 0.75;margin: 10px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyd tempor invidunt ut  sit amet, consetetur sadips.</p>
                            </div>

                        </div>
                    </div>
            </div>
            

            
            
            

        </div>
              
        


        
