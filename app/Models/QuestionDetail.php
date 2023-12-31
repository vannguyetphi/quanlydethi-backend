<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDetail extends Model
{
    use HasFactory;

    protected $table = 'question_details';

    protected $fillable = [
        'examId',
        'questionId',
        'subjectId',
    ];
}
