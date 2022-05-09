<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            出品
        </h2>
    </x-slot>

    <form method="post" action="{{route('Sell.store')}}" enctype="multipart/form-data">
      @csrf
    <div class="md:col-span-1">
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="title" class="block text-sm font-medium text-gray-700"> 商品名 </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input required type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="商品名を入力してください">
                </div>
              </div>
            </div>
            <div>
              <label for="about" class="block text-sm font-medium text-gray-700"> 詳細 </label>
              <div class="mt-1">
                <textarea required id="detail" name="detail" rows="3" class="resize rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="色、素材、注意点など"></textarea>
              </div>
            </div>

        <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image1' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>
   <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image2' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>
   <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image3' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>
   <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image4' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>
        <div class="flex mt-6 my-3 items-center justify-center bg-grey-lighter">
       <label class="flex mx-3 flex-col items-center px-8 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="mt-2 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-xs">image</span>
        <input class="" type='file' name='image5' accept="image/png, image/jpeg, image/jpg"/>
    </label>
   </div>


        <label for="price" class="block text-sm font-medium text-gray-700">価格</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="text-gray-500 sm:text-sm"> ￥ </span>
            </div>
            <input required type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="">
            <div class="absolute inset-y-0 right-0 flex items-center">
            <label for="currency" class="sr-only">Currency</label>
            </div>
            <input type="hidden" name="user_id" value="{{$user->id}}" >

        </div>
        <div class="text-right">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                確認する
        </button>        
        </div>

    </form>

    </x-app-layout>

