<?php


Route::prefix("admin")->as("admin.")->middleware("admin")->namespace("\\App\\Http\\Controllers\\Back")->group(function () {
    Route::get("/", "DashboardController@index")->name("dashboard.index");
    Route::get("/dashboard", "DashboardController@index");

    Route::get("children/getList","ChildrenController@getChildren")->name("children.getList");
    Route::resource("children", "ChildrenController")->except(["store", "update"]);
    Route::match(["put","post"],"children","ChildrenController@store")->name("children.store");


    Route::resource("supports","SupportController")->only(['index',"show"]);
});
