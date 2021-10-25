<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = "k_m_user";
    protected $fillable = [
        'user_id', 'user_name', 'mailaddress', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
