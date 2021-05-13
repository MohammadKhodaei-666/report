<?php

use Illuminate\Support\Facades\Route;

Route::get("/reportpkg",function(){
    return "report package";
});
Route::group(["namespace" => "Anisa\Report\Http\Controllers"],function(){
    Route::get("/cc","ReportController@index");
});
