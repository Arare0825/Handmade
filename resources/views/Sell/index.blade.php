<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            出品
        </h2>
    </x-slot>

    <div class="text-center mt-12">
    <a href="<?php echo route('Sell.create'); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-24 rounded">
    出品する
   </a>
    </div>

    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
        <?php foreach($users as $user): ?>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a href="<?php echo route('Sell.show',['Sell'=>$user->id]) ?>" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo asset("storage/$user->image1") ?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $user->title }}</h2>
          <p class="mt-1">￥{{ $user->price }}</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
    
    </x-app-layout>

