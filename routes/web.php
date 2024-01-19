<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;

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
// routes/web.php

Route::get('/', [HomeController::class,'index']);

Route::get('/showLoginForm', [AuthController::class , 'showLoginForm']);

Route::get('/showSignUpForm', [HomeController::class, 'showSignUpForm']);

Route::post('/login', [AuthController::class , 'login']);

Route::middleware(['auth.user'])->group(function(){

    Route::get('/dashboard',[AdminController::class,'counts'])->name('admin.dashboard'); 

    Route::get('/MyAccount/{id}',[AdminController::class,'myAccount']); 

    Route::post('/updateAccount/{id}', [AdminController::class, 'updateAccount']);
    
    Route::post('/AddNewCar', [AdminController::class,'AddNewCar']);

    Route::get('/AddNew', [AdminController::class,'AddNew']);

    Route::get('/SalesAnalytics', [AdminController::class, 'SalesAnalytics']);

    Route::get('/Clients', [AdminController::class, 'showClients']);

    Route::get('/Inventory', [AdminController::class, 'showInventory']);

    Route::get('/ViewCars', [AdminController::class, 'ViewCars']);

    Route::get('/RemoveCar' ,[AdminController::class, 'showRemoveCar']);

    Route::get('/remove/{id}', [AdminController::class, 'removeCarId']);

    Route::get('editCar/{id}', [AdminController::class, 'editCar']);

    Route::post('updateCar/{id}', [AdminController::class, 'updateCar']);

    Route::get('/Recruitments', [ManagerController::class, 'hrRecruitments']);
    
    Route::post('/postAJob', [ManagerController::class, 'AddJob_post']);

    Route::get('/hrDashboard', [ManagerController::class, 'hrDashboard']);

    Route::get('/hrDatabase', [ManagerController::class, 'ShowWorkers']);
        
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
        
    Route::post('/saveWelcomeText', [AdminController::class, 'saveWelcomeText']);

    Route::post('/saveNewbrand', [AdminController::class, 'saveNewbrand']);

    Route::get('/udashboard', [HomeController::class, 'showUserdashboard']);
});


Route::get('/register', [RegistrationController::class, 'register']);

Route::get('/Homejob', [HomeController::class, 'Homejob']);

Route::get('/BuyACar', [HomeController::class, 'BuyACar']);


Route::get('/aboutUs', [HomeController::class, 'aboutUs']);

Route::middleware(['web'])->group(function(){});

Route::get('/Jobs', [HomeController::class, 'showJobs']);

Route::post('/BuyACar/{cars}',[HomeController::class,'MakeAnOrder'])->name('order.cars');

Route::post('/RateUs',[HomeController::class, 'rateus']);

Route::post('/saveEmail',[HomeController::class, 'saveEmail']);