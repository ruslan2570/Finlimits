<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, 'index'])->name('index');

Route::get("/auth/login", [AuthController::class, 'showLogin'])->name("auth.login.show");
Route::get("/auth/registration", [AuthController::class, 'showRegistration'])->name("auth.registration.show");
Route::get("/auth/restore", [AuthController::class, 'showRestore'])->name("auth.restore.show");
Route::get("/auth/logout", [AuthController::class, 'logout'])->name("auth.logout");


Route::post("/auth/login", [AuthController::class, 'login'])->name('auth.login');
Route::post("/auth/registration", [AuthController::class, 'registration'])->name("auth.registration");