<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the table name (optional, only if different from 'students')
    protected $table = 'students';

    // Define the fillable attributes
    protected $fillable = ['name', 'class', 'email', 'grade'];
}
