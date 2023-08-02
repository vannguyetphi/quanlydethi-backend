<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerDetail extends Model
{
    use HasFactory;

    protected $table = 'answer_details';

    protected $fillable = [
        'examId',
        'subjectId',
        'questionId',
        'studentId',
        'answer'
    ];
}
