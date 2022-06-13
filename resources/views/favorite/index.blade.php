<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            気になる
        </h2>
    </x-slot>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>



    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($likeItems as $item)
    @if(isset($item->title))
    @if(isset($item->price))
    @if(isset($item->image1))

      <a href="{{ route('products.show',['id'=>"$item->id"]) }}" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src='{{ asset("storage/$item->image1") }}' class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">{{ $item->title }}</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">￥{{ $item->price }}</p>
      </a>

      <!-- More products... -->
      @endif
    @endif
    @endif
@endforeach

    </div>
  </div>
</div>

</x-app-layout>
