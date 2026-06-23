<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\SubjectFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Subject as Authenticatable;
use Illuminate\Notifications\Notifiable;

class subject extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'teacher_id'
    ];
}
