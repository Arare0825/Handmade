<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlofileController;

Route::resource('Plofile', PlofileController::class);

require __DIR__.'/auth.php';
