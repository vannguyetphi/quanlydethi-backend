<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRooms extends Model
{
    use HasFactory;

    protected $table = 'ClassRooms';

    protected $fillable = [
        'id',
        'name',
    ];
}
