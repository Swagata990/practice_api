<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AcademicClass;

class AcademicStandard extends Model
{
    protected $fillable = [

        'name',

        'code',

        'status',

    ];

    public function academicClasses()

    {

        return $this->hasMany(AcademicClass::class, 'academic_standard_id');

    }
}
