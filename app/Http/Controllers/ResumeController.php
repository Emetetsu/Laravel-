<?php

namespace App\Http\Controllers;

use App\Models\Resume; // Use the Resume model
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function showResume()
    {
        // Fetch resume data from the database (you might need to adjust this)
        $resume = Resume::first(); // or use any appropriate query to fetch data

        return view('resume', compact('resume')); // Pass resume data to the view
    }
}