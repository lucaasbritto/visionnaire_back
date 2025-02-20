<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhoneNumberController;


Route::get('phone-numbers', [PhoneNumberController::class, 'index']);
Route::post('phone-numbers', [PhoneNumberController::class, 'store']);
Route::get('phone-numbers/{id}', [PhoneNumberController::class, 'show']);
Route::put('phone-numbers/{id}', [PhoneNumberController::class, 'update']);
Route::delete('phone-numbers/{id}', [PhoneNumberController::class, 'destroy']);