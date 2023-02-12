<?php

use App\Models\About;
use App\Models\Portfolio;
use Barryvdh\DomPDF\Facade\Pdf;
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

Route::get('/download-cv', function () {
    $abouts = About::first();
    $pdf = Pdf::loadView('pdf.cv', compact('abouts'));
    return $pdf->stream('CV-MAYONOBE-Hugo.pdf');

//    $pdf = Pdf::loadView('pdf.cv', compact('abouts'))->outputHtml();
//    return view('pdf.test', compact('pdf'));
})->name('download-cv');
