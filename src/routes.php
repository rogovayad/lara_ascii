<?php
use Illuminate\Support\Facades\Route;
use Rogovaya_d\LaraAscii\Controller\UploadController;

Route::group(['prefix'=>'ascii','as'=>'ascii.'],function() {
    Route::get('/lib', fn() => "<h1>From lib!</h1>");
    Route::get('/upload_form', [UploadController::class,'showForm'])->name('showForm');
});