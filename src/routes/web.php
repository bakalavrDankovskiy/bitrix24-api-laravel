<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //todo поменять
    header('Location: https://x3group.ru');
});

Route::match(['head'],'/app/', function () {
    return '';
});
Route::match(['head'],'/install/', function () {
    return '';
});

