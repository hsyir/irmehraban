<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage as Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/avatarNames', function () {
    $files = Storage::disk("avatars")->files();
    foreach ($files as $key => $file) {
        $files = Storage::disk("avatars")->files();
        Storage::disk("avatars")->move($file, "avatar_" . (string)($key + 1) . ".png");
    }
});

Route::get("/","HomeController@index")->name("home");
Route::get("getChildrenList","ChildrenController@childrenList")->name("children.list");

Auth::routes();


Route::get("sketch",function(){
    return view("sketch");
});
