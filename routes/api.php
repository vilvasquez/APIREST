<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController  as PostV2;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;

//CONFIGURACION VERSION 1 DEL API  V1
Route::apiResource('v1/posts', PostV1::class)
->only(['index','show','destroy']);

//CONFIGURACION VERSION 2 DEL API V2
Route::apiResource('v2/posts', PostV2::class)
->only(['index','show'])
->Middleware('auth:sanctum');

Route::post('login',[
    App\Http\Controllers\Api\LoginController::class,
    'Login'
]);
