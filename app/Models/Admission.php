<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\AdmissionFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Admission as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admission extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'student_id',
    'admission_date',
    'class_id',
    'session',
    'status'
    ];
}
