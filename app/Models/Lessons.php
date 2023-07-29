<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'Lessons';

    protected $fillable = [
        'lessonName',
        'answerTime',
        'createdDate',
        'modifyDate',
        'userCreatedId',
    ];
}
