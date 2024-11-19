<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('resume'); // Make sure this is the correct view file (resume.blade.php).
});