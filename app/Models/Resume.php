<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Define the table name (if it's not the default 'resumes')
    protected $table = 'resumes';

    // Define the columns you want to be mass assignable
    protected $fillable = ['name', 'email', 'phone', 'about', 'education'];
}