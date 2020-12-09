<?php


Route::prefix("admin")->as("admin.")->namespace("\\App\\Http\\Controllers\\Back")->group(function () {
    Route::get("/dashboard", "DashboardController@index")->name("dashboard.index");

    Route::resource("children", "ChildrenController")->except(["store", "update"]);
    Route::match(["put","post"],"children","ChildrenController@store")->name("children.store");
});
