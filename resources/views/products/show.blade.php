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

          <?php if(!$product->image2 == null): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image2") }}"></div>
          <?php endif ; ?>

          <?php if(!$product->image3 == null): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image3") }}"></div>
          <?php endif ; ?>

          <?php if(!$product->image4 == null): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image4") }}"></div>
          <?php endif ; ?>

          <?php if(!$product->image5 == null): ?>
          <div class="swiper-slide"><img src="{{ asset("storage/$product->image5") }}"></div>
         <?php endif ; ?>

          </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
      </div>

      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
      <form action="{{ route('buy.checkout')}}" method="post">
        @csrf
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->title }} </h1>
        <div class="flex mb-4">
        </div>
        <p style="white-space:pre-wrap;" class="leading-relaxed">{{ $product->detail }} </p>

        @if( $haveLike == 1)
        <div class="flex flex-row-reverse">
        <p>{{ $count }}</p>
          <a class="" href="{{ route('dislike',['id'=> $product->id])  }}"><i class="fa-3x fa-solid fa-star mr-2" style="color: #F6E05E;"></i>
          <p>気になる</p>
          </a>
          </div>
          @else
          <div class="flex flex-row-reverse">
          <a class="" href="{{ route('like',['id'=> $product->id])  }}"><i class="fa-3x fa-regular fa-star mr-2"></i>
          <p>気になる</p>
          </a>
          </div>
            @endif
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
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">￥{{ number_format($product->price) }}</span>
          <button type="submit" class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">購入する</button>
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            </svg>
        </div>
      </div>

    </div>

  </div>

  <!-- </section> -->
  <input type="hidden" name="id" value="{{ $product->id }}">
      <input type="hidden" name="title" value="{{ $product->title }}">
      <input type="hidden" name="detail" value="{{ $product->detail }}">
      <input type="hidden" name="price" value="{{ $product->price }}">
</form>
    </form>

<!-- <section class="rounded-b-lg  mt-4 "> -->
  

  <div class="font-semibold">

<form action="{{ route('comment.store',['id'=> "$product->user_id"]) }}" accept-charset="UTF-8" method="post">
  @csrf

<textarea name="comment" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="質問内容を記載してください" require></textarea>


<button type="submit" class="font-medium py-2 px-4 w-full bg-gray-700 text-lg text-white shadow-md rounded-lg ">質問する </button>
<input type="hidden" name="productId" value="{{ $product->id }}">
<input type="hidden" name="userId" value="{{ auth()->id() }}">
<input type="hidden" name="name" value="{{ auth()->user()->name }}">
</form>
<div id="task-comments" class="pt-4">
    <!--     comment-->
    @foreach ($comments as $comment)
<div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
<div class="flex flex-row justify-center mr-2">
  @if($comment->users_id == $product->user_id)
<h3 class="text-green font-black text-lg text-center md:text-left ml-2">
  {{ $comment->name }}さん(出品者)
</h3>
@else
<h3 class="text-black font-black text-lg text-center md:text-left ml-2">
  {{ $comment->name }}さん
</h3>
@endif
</div>


<p style="width: 90%" class="text-gray-500 text-lg font-medium text-center md:text-left mt-2 ml-2">{{ $comment->comment }}</p>

</div>
  </div>
  @endforeach


</div>
</section>

    </x-app-layout>
    <script src="{{ mix('js/swiper.js') }}"></script>

