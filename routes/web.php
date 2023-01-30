<?php

use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Livewire\Content::class)->name('home');

Route::get('/portfolio/{slug}', function ($slug) {
    $portfolio = Portfolio::whereSlug($slug)->first();

    return view('pages.project', compact('portfolio'));
})->name('portfolio');
