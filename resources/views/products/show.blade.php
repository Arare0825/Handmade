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
      <form action="{{ route('buy.checkout')}}" method="post">
        @csrf
        <a href="" class="text-sm title-font text-gray-500 tracking-widest">出品者のリンクを貼る</a>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->title }} </h1>
        <div class="flex mb-4">
        </div>
        <p style="white-space:pre-wrap;" class="leading-relaxed">{{ $product->detail }} </p>

        @if(! $haveLike == true)
        <div class="flex flex-row-reverse">
          <a class="" href="{{ route('like',['id'=> $product->id])  }}"><i class="fa-3x fa-regular fa-star mr-2"></i>
          <p>気になる</p>
          </a>
          </div>
          @else
          <div class="flex flex-row-reverse">
          <a class="" href="{{ route('dislike',['id'=> $product->id])  }}"><i class="fa-3x fa-solid fa-star mr-2" style="color: #F6E05E;"></i>
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
  <div>

<!-- <section class="rounded-b-lg  mt-4 "> -->
  


<form action="{{ route('comment.store',['id'=> "$product->user_id"]) }}" accept-charset="UTF-8" method="post">
  @csrf
<textarea name="comment" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="Ask questions here." cols="6" rows="6" id="comment_content" spellcheck="false"></textarea>
<button type="submit" class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Comment </button>
<input type="hidden" name="productId" value="{{ $product->id }}">
<input type="hidden" name="userId" value="{{ auth()->id() }}">
<input type="hidden" name="name" value="{{ auth()->user()->name }}">
</form>
<div id="task-comments" class="pt-4">
    <!--     comment-->
    @foreach ($comments as $comment)
<div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
<div class="flex flex-row justify-center mr-2">
<img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
<h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">
  {{ $comment->name }}
</h3>
</div>


<p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->comment }}</p>

</div>
  </div>
  @endforeach

</section>

</div>

    </x-app-layout>
    <script src="{{ mix('js/swiper.js') }}"></script>

