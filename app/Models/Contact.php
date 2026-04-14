<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Indispensable pour autoriser Contact::create
    protected $fillable = ['nom', 'email', 'message'];
}
