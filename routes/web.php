<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

Route::get('/users/edit/{id}',function(){
    return view('modifier');
});
Route::post('/users/edit/{id}',[CreateController::class,'index']);
