<?php

use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/college-aqar-data', function () {
    return view('collegeAqarData');
})->name('college-aqar-data');
Route::get('/college-ssr', function () {
    return view('collegeSsr');
})->name('college-ssr');

Route::get('/gallery/{type}', [GalleryController::class, 'index'])->name('gallery');
Route::get('/naac/{type}', [PageController::class, 'naac'])->name('naac');
Route::get('/annual-report/{type}', [PageController::class, 'report'])->name('annual-report');
Route::get('/activities/{type}', [PageController::class, 'activities'])->name('activities');
Route::get('/academics/{type}', [PageController::class, 'academics'])->name('academics');
Route:: prefix('alumni')->name('alumni/')->group(function(){
    Route::get('/registration', function () {
        return view('Alumni.registration');
    })->name('registration');


    Route::get('/feedback', function () {
        return view('Alumni.feedback');
    })->name('feedback');


    Route::get('/our-alumni', function () {
        return view('Alumni.ourAlumni');
    })->name('our-alumni');


});
Route:: prefix('administration')->name('administration/')->group(function(){
    Route::get('/principal-message', function () {
        return view('Administration.principalMessage');
    })->name('principal-message');
    Route::get('/teaching-staff', function () {
        return view('Administration.teachingStaff');
    })->name('teaching-staff');
    Route::get('/non-teaching-staff', function () {
        return view('Administration.nonTeachingStaff');
    })->name('non-teaching-staff');
    Route::get('/about-college', function () {
        return view('Administration.aboutCollege');
    })->name('about-college');

});





Route::get('/condition/{type}', [ConditionsController::class, 'index'])->name('condition');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
