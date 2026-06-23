<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StudentSession;

class AcademicSession extends Model
{
    protected $fillable=["name","start_date","end_date","is_current","is_active"];

    protected $table='academic_sessions';

    protected $casts=[
        'name'=>'string',
        'start_date'=>'date',
        'end_date'=>'date',
        'is_current'=>'boolean',
        'is_active'=>'boolean',
        'created_at'=>'datetime',
        'updated_at'=>'datetime'
    ];

    public function studentSessions()

    {
        return $this->hasMany(StudentSession::class,'student_session_id');
    }
}
