<x-app-layout>
    <x-slot name="header">
    <script src="https://kit.fontawesome.com/3d2bf1d45e.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            購入
        </h2>
    </x-slot>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>
    <form action="" method="get">
    <div class="mb-10">
    <select name="category" value="カテゴリー">
        <option value="0" @if(\Request::get('category') === '0' || null) selected @endif>全て</option>
              @foreach($Selectcategory as $serchcategory)
              <optgroup label="{{ $serchcategory->name }}">
                @foreach($serchcategory->secondary as $secondary)
                <option value="{{ $secondary->id }}" @if(\Request::get('category') == $secondary->id) selected @endif>
                  {{ $secondary->name }}
                </option>
              @endforeach
              @endforeach
            </select>
            <input type="text" name="word" placeholder="検索" value="{{ old('word') }}">
            <button type="submit"><i class="fa-2x fa-solid fa-magnifying-glass"></i></button>
            </form>
            </div>
            
    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($products as $product)
    <?php $num = $product->secondary_category_id - 1 ; ?>

      <a href="<?php echo route('products.show',['id'=>"$product->id"]) ?>" class="group">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src='{{ asset("storage/$product->image1") }}' class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <h4 class="mt-2 text-gray-500 text-xs tracking-widest title-font mb-1">{{ $category[$num] }}</h4>
        <h3 class="mt-4 text-sm text-gray-700">{{ $product->title }}</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">￥{{ number_format($product->price) }}</p>
      </a>
      @endforeach

      <!-- More products... -->

    </div>

  </div>

</div>

</x-app-layout>
