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
Route::post("children/submitSupportList","ChildrenController@storeSupportList")->name("children.list");
Route::get("supports/{uuid}","SupportController@show")->name("supports.show");

Auth::routes();

Route::get("sketch",function(){
    return view("sketch");
});


Route::get("import",function(){
    $children = \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\ChildrenImport(),storage_path("/emdad-excel/report.xlsx"));
    dd($children);
});

Route::get("about","FrontController@about")->name("about");
Route::get("contact","FrontController@contact")->name("contact");

