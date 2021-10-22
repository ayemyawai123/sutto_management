<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Notice_Info extends Model
{
    use HasFactory;
    protected $table = "m_notice_info";
    protected $fillable = [
        'notice_id',
        'notice_title',
        'notice_content',
        'remarks'
    ];
}
