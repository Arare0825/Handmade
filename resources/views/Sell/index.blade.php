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

    <?php  foreach($users as $user) : ?>
    <a href="<?php echo route('Sell.show',['Sell'=>$user->id]); ?>">詳細......</a><br>
    <?php endforeach; ?>

    
    </x-app-layout>

    <img src="storage/<?php echo $user->image1; ?>">



