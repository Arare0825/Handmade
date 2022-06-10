<x-app-layout>
    <x-slot name="header">
    <script src="https://kit.fontawesome.com/3d2bf1d45e.js" crossorigin="anonymous"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           設定
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex flex-col">
  <div class="border-b-2 border-gray-800">
    <div class="lg:w-4/6 mx-auto">
      <div class="text-center mt-10">
        <div class="sm:w-1/3  sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">
              @if($user->name)
              {{ $user->name }}
              @else
              {{ 名無しさん }}
              @endif
            </h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">
              @if($user->message)
              {{ $user->message }}
              @else
              {{ メッセージはありません }}
              @endif
             </p>
          </div>
        </div>
        <!-- </div> -->
      <!-- </div> -->


  <!-- <div class="container px-5 py-24 mx-auto flex"> -->
    <!-- <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md"> -->
      <!-- <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
      <form action="{{ route('plofile.store')}}" method="post" enctype="multipart/form-data">
          @csrf
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">ニックネーム</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">ひとこと</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
    <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>
   <button class="mx-12 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
    </div>
  </div>
  </div>
  <input type="hidden" name="userId" value="{{ Auth::id() }}">
  </form>
</section>
</section>
</x-app-layout>

