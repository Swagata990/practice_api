<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\ExamFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Exam as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Exam extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'date',
    'subject_id'
    ];
}
