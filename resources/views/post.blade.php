<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    <div class="bdys py-2">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="ff bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
           <h1 class="head p-5 font-bold text-white">Post Notice !!</h1>
           <hr class="border-gray-600">
             <div class="p-6 bg-gray-700">
                <form class="w-full max-w-sm" method="POST">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="white block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">Heading</label>
                      </div>
                      <div class="md:w-2/3">
                        <input class="border-2 border-gray-200 rounded w-full py-2 px-4" id="title" type="text" name="title">
                      </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        <label class="white block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="body">Description</label>
                      </div>
                      <div class="md:w-2/3">
                        <textarea class="resize border rounded-md" name="body" style="width:255px;"></textarea>
                      </div>
                    </div>
                    <div class="md:flex md:items-center">
                      <div class="md:w-1/3"></div>
                      <div class="md:w-2/3">
                        <input type="submit" class="btnpost shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" value="Post">
                      </div>
                    </div>
                  </form>
                  @if(session()->has('status'))
                    <div class="stat mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">
                        {{ session('status') }}
                    </div>
                  @endif
             </div>
         </div>
     </div>
 </div>               
</x-app-layout>
