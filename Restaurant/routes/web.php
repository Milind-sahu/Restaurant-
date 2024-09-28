<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('index2');
// });

// Route::get('clear', [Controller::class, 'getArtisanCommand']);

Route::match(['get','post'],"/", [\App\Http\Controllers\HomeController::class,'login']);
Route::match(['get','post'],"/Adminlogin", [\App\Http\Controllers\HomeController::class,'Adminlogin']);
// Route::match(["get", "post"],"/signup", [\App\Http\Controllers\HomeController::class,'signup']);



Route::get('/signup', [\App\Http\Controllers\HomeController::class, 'signup']); // Show the form


Route::post('/signup', [\App\Http\Controllers\HomeController::class, 'storeuser']); // Handle form submission

Route::middleware([\App\Http\Middleware\login::class])->group(function () {

    Route::get("/home", [\App\Http\Controllers\HomeController::class,'home']);
    Route::post("/home", [\App\Http\Controllers\HomeController::class,'reservation']);
    Route::post("/feedback", [\App\Http\Controllers\HomeController::class,'feedback']);
    Route::get("/menu", [\App\Http\Controllers\HomeController::class,'menu']);
    Route::get("/menulist", [\App\Http\Controllers\HomeController::class,'menulist']);
});

    Route::get("/Admin", [\App\Http\Controllers\adminController::class,'Admin_dashboard']);
    Route::get("/employee", [\App\Http\Controllers\adminController::class,'employee']);
    Route::get("/user", [\App\Http\Controllers\adminController::class,'user']);
    Route::get("/profile", [\App\Http\Controllers\adminController::class,'profile']);
    Route::get("/request", [\App\Http\Controllers\adminController::class,'request']);
    Route::get("/Feed-backs", [\App\Http\Controllers\adminController::class,'Feed_backs']);
    // Route::match(["get", "post"], "/addemp", [\App\Http\Controllers\adminController::class,'add']);

    Route::get('/addemp', [\App\Http\Controllers\adminController::class, 'add']); // Show the form
    Route::post('/addemp', [\App\Http\Controllers\adminController::class, 'store']); // Handle form submission

    Route::get('/Stats', [\App\Http\Controllers\adminController::class, 'stats']); // Show the form
    Route::post('/storestats', [\App\Http\Controllers\adminController::class, 'storestats']); // Handle form submission

    Route::get('/updatemenu', [\App\Http\Controllers\adminController::class, 'updatemenu']); // Show the form
    Route::post('/updatemenu', [\App\Http\Controllers\adminController::class, 'storemenu']); // Handle form submission

    Route::get("/dbcheck", [\App\Http\Controllers\adminController::class,'dbcheck']);
    Route::get("/logout", [\App\Http\Controllers\HomeController::class,'logout']);


