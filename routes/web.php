<?php

use App\Http\Controllers\ResumeController;

Route::get('/resume', [ResumeController::class, 'showResume']);