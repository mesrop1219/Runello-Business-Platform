<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'index'])->name('index');
Route::get('order', [PageController::class, 'order'])->name('order.page');
Route::post('order/register', [OrderController::class, 'create'])->name('order.create');