<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\TeacherFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Teacher as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['remember_token'])]

class Teacher extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'subject',
    'qualification',
    'phone_no',
    'email',
    'salary',
    'gender'
    ];
}
