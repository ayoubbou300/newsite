<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="edititems" method="PUT" >
                            @csrf
                            <div class="elem-group">
                            <label class="block mt-1 w-full   rounded-lg" for="name">Nom</label>
                            <input class="block mt-1 w-full   rounded-lg" type="text" name="nom" name="visitor_name" placeholder="" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <div class="elem-group">
                            <label class="block mt-1 w-full   rounded-lg" for="">Description</label>
                            <input class="block mt-1 w-full   rounded-lg" type="text" name="description" name="visitor_email" placeholder="" required>
                            </div>
                            <div class="elem-group">
                                <label class="block mt-1 w-full   rounded-lg" for="" name="type">Type</label>
                                <select name="Type" id="Type">
                                    <option value="Service">Service</option>
                                    <option value="Produit">Produit</option>
                                </select>
                            </div>
                            
                            
                            
                            <button class="block w-full mt-4    content-center 	border-amber-600 "  type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </body>
    </html>
</x-app-layout>