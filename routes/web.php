<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    Mail::send([], [], function ($message) {
        $message->to('sushanttayade123@gmail.com')
          ->subject('SMTP Tester')
          ->setBody('<h1>Hi, SMTP successfully configured!</h1>', 'text/html'); // for HTML rich messages
    });

    // check for failures
    if (Mail::failures()) {
        echo "Failed";
        // return response showing failed emails
    }
});
