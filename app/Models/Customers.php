<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class Customers extends Authenticatable
{
    protected $fillable = [
        'name',
        'password',
        'email',
        'phone',
        'address',
        'notes'
    ];

    protected function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }


}
