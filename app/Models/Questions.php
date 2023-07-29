<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = 'Questions';

    protected $fillable = [
        'title',
        'content',
        'type',
        'level',
        'A',
        'B',
        'C',
        'D',
        'answer',
        'img',
    ];
}
