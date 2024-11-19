<?php

namespace App\Http\Controllers;

use App\Models\Resume;

public function showResume()
{
    // Fetch the first resume entry
    $resume = Resume::first(); 
    
    // Check if data exists
    if (!$resume) {
        return response()->json(['message' => 'No resume found']);
    }
    
    // Pass the data to the view
    return view('resume', compact('resume'));
}