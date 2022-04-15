<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            マイページ
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
  <div class="border-b-2 border-gray-800">
    <div class="lg:w-4/6 mx-auto">
      <div class=" mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">名前が入る</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">コメントが入ります</p>
          </div>
        </div>
        </div>
        </div>
      </div>

        <div class="text-center mt-12">
            <div class="">
            <a href="#" class="no-underline ...">出品中</a>
            </div>
            <div class="">
            <a href="#" class="no-underline ...">購入済み</a>
            </div>
            <div class="">
            <a href="#" class="no-underline ...">お気に入り</a>
            </div>
          </div>

</section>
</x-app-layout>

