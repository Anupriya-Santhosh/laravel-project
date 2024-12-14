<?php

// app/Models/Contact.php
// app/Models/Contact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the pluralized version of the model name
    protected $table = 'contact';

    // Define the fillable fields
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}

