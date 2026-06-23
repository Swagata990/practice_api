<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\ResultFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Result as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Result extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'student_id',
    'exam_id',
    'marks',
    'grade'
    ];
}
