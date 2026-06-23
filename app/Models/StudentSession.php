<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\AcademicSession;
use App\Models\AcademicClass;

class StudentSession extends Model
{
    protected $fillable=[
        'student_id',
        'academic_session_id',
        'academic_class_id',
        'roll_no'
    ];


    public function student()

    {

        return $this->belongsTo(Student::class, 'student_id');

    }

    public function academicSession()

    {

        return $this->belongsTo(AcademicSession::class, 'academic_session_id');

    }

    public function academicClass()

    {

        return $this->belongsTo(AcademicClass::class, 'academic_class_id');

    }
}
