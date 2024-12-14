<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookNow extends Model
{
    use HasFactory;
    // Add the attributes that you want to allow for mass assignment
    protected $fillable = [
        'full_name',  // Include full_name to allow mass assignment
        'email',
        'phone',
        'destination',
        'travel_date',
        'guests',
    ];
}
