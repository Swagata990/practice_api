<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\StudentSession;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]

class Student extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'name',
    'gurdian_name',
    'address',
    'gender',
    'email_id',
    'phone_no',
    'dob'
    ];

    public function studentSessions()

    {
        return $this->hasMany(StudentSession::class,'student_session_id');
    }
}
