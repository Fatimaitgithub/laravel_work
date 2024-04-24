<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LevelTwoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Artisan;
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

// use Illuminate\Support\Facades\Mail;

// Route::get('/send_mail', function () {
//     $email = 'official.thenestacademy@gmail.com';
//     Mail::to($email)->send(new SendgridMail());
//     return "Email sent successfully!";
// });



Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('event:clear');
    echo 'Cache Cleared';
});
Route::controller(PagesController::class)->group(function () {
    // Route::get('/', 'home');
    Route::get('/get_category/{value}', 'category');
    Route::get('/get_subcategory/{value}', 'subcategory');
    Route::get('/get_leveltwo/{value}', 'leveltwo');
    Route::get('/', 'signin')->name('authentication.signin');
    Route::get('/signup', 'signup')->name('authentication.signup');
    Route::get('/forget', 'forget')->name('authentication.forget');
    Route::get('/resend', 'resend')->name('authentication.resend');
    Route::get('/offline', 'offline')->name('authentication.offline');
    Route::get('/gmail', 'getGmailPage');
});
Route::controller(AuthenticationController::class)->group(function () {
    Route::post('/registeration', 'registeration')->name('registeration');
    Route::post('/signin', 'signin');
    Route::get('/verify-email', 'verifyEmail')->name('verify-email');
    Route::get('/verification-email/{email}', 'verificationEmail');
    Route::get('/blank-token/{email}', 'blanktoken');
    Route::get('/resend-email/{email}', 'resendemail');
    Route::post('/reset-link', 'resetLink');
    Route::get('/reset-password/{email}', 'resetPassword');
    Route::post('/update_password', 'updatePassword');
});
Route::group(["middleware" => ["authlogin"]], function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard.dashboard');
        Route::get('/logout', 'logout')->name('authentication.logout');
        Route::get('/profile', 'profile')->name('dashboard.profile');
        Route::put('/update-profile/{id}', 'updateProfile');
    });
    Route::resources([
        'company' => CompanyController::class,
        'employee' => EmployeeController::class,
    ]);
});
