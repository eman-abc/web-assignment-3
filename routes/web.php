<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Middleware\CheckQueryParameter;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'home']);
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

// Route to display the contact form
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

// Route to handle the form submission
Route::post('/contact-submit', [ContactController::class, 'handleSubmit'])->name('contact.submit');

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


Route::get('/modifyservices', function () {
    return view("frontend.modifyservices");
})->name('modifyservices');

//services

Route::middleware([CheckQueryParameter::class])->group(function () {
    // Bootcamp: Routes for adding/removing/updating services
    Route::get('/bootcamp/create', [ServiceController::class, 'createBootcamp'])->name('bootcamp.create');
    Route::post('/bootcamp/store', [ServiceController::class, 'storeBootcamp'])->name('bootcamp.store');
    Route::get('/bootcamp/edit/{id}', [ServiceController::class, 'editBootcamp'])->name('bootcamp.edit');
    Route::put('/bootcamp/update/{id}', [ServiceController::class, 'updateBootcamp'])->name('bootcamp.update');
    Route::delete('/bootcamp/destroy/{id}', [ServiceController::class, 'destroyBootcamp'])->name('bootcamp.destroy');

    // Sports-Training: Routes for adding/removing/updating services
    Route::get('/sports-training/create', [ServiceController::class, 'createSportsTraining'])->name('sportsTraining.create');
    Route::post('/sports-training/store', [ServiceController::class, 'storeSportsTraining'])->name('sportsTraining.store');
    Route::get('/sports-training/edit/{id}', [ServiceController::class, 'editSportsTraining'])->name('sportsTraining.edit');
    Route::put('/sports-training/update/{id}', [ServiceController::class, 'updateSportsTraining'])->name('sportsTraining.update');
    Route::delete('/sports-training/destroy/{id}', [ServiceController::class, 'destroySportsTraining'])->name('sportsTraining.destroy');
});



Route::post('/create-service', [ServiceController::class, 'storeService'])->name('storeService');


// Yoga: Display only (no CRUD operations for Yoga)
Route::get('/yoga', [ServiceController::class, 'yoga'])->name('yoga');
Route::get('/bootcamp', [ServiceController::class, 'bootcamp'])->name('bootcamp');
Route::get('/sports-training', [ServiceController::class, 'sportsTraining'])->name('sports-training');
