<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserInterface;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/jhhhhhhhffgy***',[Dashboard::class,'index'])->middleware('auth');
Route::get('/c@@n',[Dashboard::class,'pro'])->name('jam')->middleware('auth');
Route::get('/c**cc*',[Dashboard::class,'creatnp'])->name('map')->middleware('auth');
Route::get('/fhcfxx',[Dashboard::class,'deletem'])->name('jarr')->middleware('auth');
Route::get('/xx**/{ed}',[Dashboard::class,'editedit'])->name('kmlr')->middleware('auth');
Route::get('/dbbbb*@',[Dashboard::class,'updateupdate'])->name('mnnmo')->middleware('auth');
Route::get('/hfdskkksdfiid8dddddddu',[Dashboard::class,'showproduct_details'])->name('msmp')->middleware('auth');
Route::post('/mvclkfjdls',[Dashboard::class,'create_new_details'])->name('ccckkmm')->middleware('auth');

Route::get('/',[UserInterface::class,'indexu'])->name('bbggff');
Route::get('/ct@@@@@@@@',[UserInterface::class,'electr'])->name('eeelll');
Route::get('/erreerredgddxx',[UserInterface::class,'player'])->name('ppplll');
Route::get('/aassfevvjhg',[UserInterface::class,'homeapp'])->name('hhhaaa');
Route::get('/kjopvfdsghg/{id}',[UserInterface::class,'pduse'])->name('pnbp');
Route::get('/hhnbbvcrtddrgg',[UserInterface::class,'addtocart'])->name('hmklo');
Route::get('/crtddrgg',[UserInterface::class,'Continuebuying'])->name('loklo');

Route::get('/category/{category}', [UserInterface::class, 'showByCategory'])->name('category.show');



//Route::get('/drbnvhdhdfhgg',[UserInterface::class,'showpdui'])->name('hjdlcn');
//Route::get('/dgg/{id}/{category}',[Dashboard::class,'updateCategory'])->name('kkkk');
//Route::get('/bbbbbbbbb',[UserInterface::class,'updateCate'])->name('ddddddd');

//Route::get('mmmL',[Dashboard::class,'showp'])->name('cnvp');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
