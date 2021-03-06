<x-app-layout>
    <x-slot name="header">
    <script src="https://kit.fontawesome.com/3d2bf1d45e.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品情報
        </h2>
    </x-slot>    
<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php if(isset($product->image1)): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image1") }}"></div>
          <?php endif ;  ?>

          <?php if(isset($product->image2)): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image2") }}"></div>
          <?php endif ; ?>

          <?php if(isset($product->image3)): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image3") }}"></div>
          <?php endif ; ?>

          <?php if(isset($product->image4)): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image4") }}"></div>
          <?php endif ; ?>

          <?php if(isset($product->image5)): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image5") }}"></div>
         <?php endif ; ?>

          </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
      </div>

      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <a href="" class="text-sm title-font text-gray-500 tracking-widest">出品者のリンクを貼る</a>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->title }} </h1>
        <div class="flex mb-4">
        </div>
        <p style="white-space:pre-wrap;" class="leading-relaxed">{{ $product->detail }} </p>

        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex ml-6 items-center">
            <div class="relative">
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                </svg>
              </span>
            </div>
          </div>
        </div>
        <div class="flex mx-auto">
          <h4 class="title-font font-medium text-2xl text-gray-900">￥{{ number_format($product->price) }}</h4>
          <button type="block" class="flex ml-auto text-white bg-gray-700 border-0 py-2 px-6 opacity-50 cursor-not-allowed rounded">購入済み</button>
          <p class="ml-4 mt-2">{{ date('Y/m/d',strtotime($product->created_at)) }}</p>
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            </svg>
        </div>
      </div>

    </div>

  </div>

  <!-- </section> -->

</div>
</section>

    </x-app-layout>
    <script src="{{ mix('js/swiper.js') }}"></script>

