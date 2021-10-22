<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'user_id', 'user_name', 'mailaddress', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
