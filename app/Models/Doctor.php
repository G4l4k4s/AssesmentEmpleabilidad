<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'specialty',
        'email',
        'phone_number',
        'password',
        // Otros campos...
    ];
}
