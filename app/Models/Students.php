<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'Students';

    protected $fillable = [
        'code',
        'name',
        'birthday',
        'teacherName',
        'identifyNumber',
        'classId',
        'phone',
        'email',
        'avatar',
    ];
}
