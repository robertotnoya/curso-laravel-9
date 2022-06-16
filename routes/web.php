<?php

use App\Http\Controllers\{
    UserController,
    MailController
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function(){

    $details['email'] = 'robertotnoya@gmail.com';
    $details['name'] = 'Roberto Noya';

    dispatch(new App\Jobs\DailyReportJob($details));

    //Mail::to($details['email'])->send(new App\Mail\DailyReport($details));

    /*
    return view('mail.daily-report', [
        'details' => $details
    ]);
    */
    return 'fim';
});

Route::get('/mails',[MailController::class, 'index'])->name('mails.index');

