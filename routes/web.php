<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('about-us', function () {return view('pages.about');})->name('about');
Route::get('blog', function () {return view('pages.blog');})->name('bog');
Route::get('contact', function () {return view('pages.contact');})->name('contact');
// Route::get('portfolio', function () {return view('pages.portfolio');})->name('portfolio');
Route::get('terms', function () {return view('pages.terms');})->name('terms');
Route::get('privacy', function () {return view('pages.privacy');})->name('privacy');
Route::get('faq', function () {return view('pages.faq');})->name('faq');
Route::get('service', function () {return view('pages.services');})->name('service');
