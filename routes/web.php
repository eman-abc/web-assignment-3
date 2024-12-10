<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'home']);
Route::get('/yoga', function () {
    return view('frontend.yoga');
})->name('yoga');
Route::get('/bootcamp', function () {
    return view('frontend.bootcamp');
})->name('bootcamp');
Route::get('/sports-training', function () {
    return view('frontend.sports-training');
})->name('sports-training');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/mentalhealth', function () {
    return view('frontend.mentalhealth');
})->name('mentalhealth');

Route::get('/exerciseteens', function () {
    return view('frontend.exerciseteens');
})->name('exerciseteens');

Route::get('/physicalactivity', function () {
    return view('frontend.physicalactivity');
})->name('physicalactivity');

Route::get('/stressmanage', function () {
    return view('frontend.stressmanage');
})->name('stressmanage');

Route::get('/regularexercise', function () {
    return view('frontend.regularexercise');
})->name('regularexercise');

Route::get('/topnutrition', function () {
    return view('frontend.topnutrition');
})->name('topnutrition');




// Route::middleware(['auth'])->group(function () {
//     Route::resource('services', ServiceController::class);
// });



Route::prefix('services')->group(function () {
    Route::get('/yoga', [ServiceController::class, 'yoga'])->name('services.yoga');
    Route::get('/sports-training', [ServiceController::class, 'sportsTraining'])->name('services.sportsTraining');
    Route::get('/bootcamp', [ServiceController::class, 'bootcamp'])->name('services.bootcamp');
});

