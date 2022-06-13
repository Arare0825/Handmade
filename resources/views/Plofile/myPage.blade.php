<x-app-layout>
    <x-slot name="header">
    <script src="https://kit.fontawesome.com/3d2bf1d45e.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            マイページ
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
  <div class="border-b-2 border-gray-800">
    <div class="lg:w-4/6 mx-auto">
      <div class="text-center mt-10">
      <div class="flex justify-end">
    <a href="{{ route('plofile.setting')}}"><i class="fa-2x fa-solid fa-gear"></i></a>
    </div>
        <div class="sm:w-1/3  sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            @if(isset($myPage->image))
            <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white" src="{{ asset("storage/plofile/$fileName") }}" alt=""> 
            @else
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            @endif
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            @if(isset($myPage->name))
          <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $myPage->name }}</h2>
          @else
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">名前が入る</h2>
            @endif
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            @if(isset($myPage->message))
            <p class="text-base">{{ $myPage->message }}</p>
            @else
            <p class="text-base">コメントが入ります</p>
            @endif
          </div>
        </div>
        </div>
        </div>
      </div>

        <div class="text-center mt-16">
          <div class="mb-6">
            <a href="<?php echo route("Sell.index"); ?>" class="no-underline ...">出品中</a>
            </div>
            <div class="mb-6">
            <a href="{{ route('bought.index') }}" class="no-underline ...">購入済み</a>
           </div>
          <div class="mb-6">
            <a href="{{ route('favorite.index') }}" class="no-underline ...">お気に入り</a>
            </div>
            </div>
          </div>

</section>
</x-app-layout>

