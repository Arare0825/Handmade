<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            出品
        </h2>
    </x-slot>

    <div class="text-center mt-12">
    <a href="{{route('Sell.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-24 rounded">
    出品する
   </a>
    </div>
    </x-app-layout>


