
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bdy">
    <div class="py-2">
    @if(session()->has('status'))
        <div class="stat mb-5 bg-black text-white text-sm py-2 px-4 ">
            {{ session('status') }}
        </div>
    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="hhh3 min-w-full divide-y divide-gray-400">
                                <thead class="bg-gray-700">
                                <tr class="hhh2">
                                    <th scope="col" class="pl1 hh2 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Name
                                    </th>
                                    <th scope="col" class="pl1 hh2 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Notice
                                    </th>
                                    <th scope="col" class="hh2  text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Description
                                    </th>
                                    <th scope="col" class="hh2  text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                    Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-gray-600 text-white divide-y divide-gray-500">
                                    @foreach ($posts as $post)   
                                    <tr>
                                        <td class="pl1 px-6 py-4 whitespace-nowrap">{{$post->user->name}}</td>
                                        <td class="pl1 px-6 py-4 whitespace-nowrap">{{$post->title}}</td>
                                        <td class="pl1 px-6 py-4 whitespace-nowrap">{{$post->body}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ url('/post/edit', $post->id) }}" class="edits bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Edit</a>
                                        <a href="{{ url('/post/delete', $post->id) }}" class="delets bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded ml-5">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
  
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

