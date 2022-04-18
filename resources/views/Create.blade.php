<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="contact.php" method="post">
                        <div class="elem-group">
                          <label class="block mt-1 w-full   rounded-lg" for="name">Your Name</label>
                          <input class="block mt-1 w-full   rounded-lg" type="text" id="name" name="visitor_name" placeholder="" pattern=[A-Z\sa-z]{3,20} required>
                        </div>
                        <div class="elem-group">
                          <label class="block mt-1 w-full   rounded-lg" for="">Your E-mail</label>
                          <input class="block mt-1 w-full   rounded-lg" type="text" id="email" name="visitor_email" placeholder="" required>
                        </div>
                        
                        
                        
                        <button class="block w-full mt-4    content-center 	border-amber-600		 "  type="submit">Send</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>