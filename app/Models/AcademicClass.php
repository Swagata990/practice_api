<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\AcademicStandard;
use App\Models\StudentSession;


class AcademicClass extends Model
{

    protected $fillable=['name','code','academic_standard_id','is_active'];

    protected $table='academic_classes';

    protected $casts=[
        'academic_standard_id'=>'integer',
        'is_active'=>'boolean',
        'created_at'=>'datetime',
        'updated_at'=>'datetime'
    ];

    public function academicStandard()

    {

        return $this->belongsTo(AcademicStandard::class, 'academic_standard_id');

    }

    public function studentSessions()

    {
        return $this->hasMany(StudentSession::class,'student_session_id');
    }
}
