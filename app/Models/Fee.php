<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\FeeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Fee as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Fee extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'student_id',
    'amount',
    'payment_date',
    'status'
    ];
}
