<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            購入
        </h2>
    </x-slot>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>


    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($products as $product)

      <a href="<?php echo route('products.show',['id'=>"$product->id"]) ?>" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src='{{ asset("storage/$product->image1") }}' class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">{{ $product->title }}</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">￥{{ number_format($product->price) }}</p>
      </a>

      <!-- More products... -->
      @endforeach

    </div>

  </div>
</div>

</x-app-layout>
