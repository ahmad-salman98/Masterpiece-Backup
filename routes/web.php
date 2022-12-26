<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// ----------------------- app routes -----------------------

// ---------- main page -------------
Route::get('/', [AppController::class, 'index'])->name('home');

Route::post('payment', [AppController::class, 'payment'])->name('payment');

// ---------- appointment page -------------

//view appointment page
Route::get('/appointment', [AppController::class, 'appointment'])->name('appointment')->middleware('auth');

//make appointment
Route::post('/make-appointment', [AppController::class, 'makeAppointment'])->name('makeAppointment');


//confirm appointment
Route::post('/confirm-appointment', [AppController::class, 'confirmAppointment'])->name('confirmAppointment');




// ---------- Contact page -------------

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');


// ---------- Checkout page -------------

Route::get('/checkout', [AppController::class, 'checkout'])->name('checkout')->middleware('auth');




// ---------- About page -------------

Route::get('/about', [AppController::class, 'about'])->name('about');


// ---------- Contact page -------------

Route::post('/contact', [AppController::class, 'contact'])->name('contact');



// ----------------------- User routes -----------------------

// ---------- store new user -------------
Route::post('/store', [UserController::class, 'store'])->name('store');

// ---------- login / signup page -------------
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

// ---------- login auth  -------------
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authentication');

// ---------- logout user -------------
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ---------- view profile page -------------
Route::get('/profile/{id?}', [UserController::class, 'profile'])->name('profile')->middleware('auth');

// ---------- update profile info -------------
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');

// ---------- view user's video -------------
Route::get('/show/video/{id}/{userId}', [UserController::class, 'viewVideo'])->name('viewVideo');

// ---------- edit password -------------
Route::post('/updatePassword', [UserController::class, 'updatePassword'])->name('updatePassword');

// ---------- edit profile info -------------
Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('editProfile')->middleware('auth');

// upload new video

Route::post('/add-video', [UserController::class, 'addVideo'])->name('addVideo');
