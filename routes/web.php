<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// NAVIGATION CONTROLLER //

// Front page
Route::get('/', [NavigationController::class, 'frontPageView']);

// Type of pet (Dogs, Cats)
Route::get('/pets/{type}', [NavigationController::class, 'pets']);

// Other types of pet from above
Route::get('/pets', [NavigationController::class, 'otherPets']);

// Specific pet (any kind)
Route::get('/pet/{id}', [NavigationController::class, 'singlePet']);

// About us page
Route::get('/aboutUs', [NavigationController::class, 'aboutUsView']);


// USER CONTROLLER //

// Login page
Route::get('/login', [UserController::class, 'loginView'])
->middleware('guest');

// Signup page
Route::get('/signup', [UserController::class, 'signupView'])
->middleware('guest');

// Reset password page
Route::get('/reset-password', [UserController::class, 'resetPasswordView']);

//Profile page
Route::get('/profile', [UserController::class, 'profileView'])
->middleware('auth');

//Edit information handling
Route::post('/profile', [UserController::class, 'profileEdit'])
->middleware('auth');

// Authentication/Login handling
Route::post('/login', [UserController::class, 'login'])
->name('login')
->middleware('guest');

// User creation handling
Route::post('/signup', [UserController::class, 'signUp'])
->middleware('guest');

// Session destroyer / Logout handling
Route::post('/logout', [UserController::class, 'logOut'])
->middleware('auth');


//POST CONTROLLER

// Create post page
Route::post('/create', [PostController::class, 'createPost'])
->middleware('auth');

Route::get('/create', [PostController::class, 'createPostView'])
->middleware('auth');

// Edit post page
Route::post('/edit', [PostController::class, 'editPost'])
->middleware('auth');

Route::get('/edit/{id}', [PostController::class, 'editPostView'])
->middleware('auth');

//Delete route
Route::post('/delete-post', [PostController::class, 'deletePost'])
->middleware('auth');
