<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\AcademicClass;

use Illuminate\Http\Request;

use App\Http\Resources\AcademicClassResource;

use App\Http\Resources\AcademicClassCollection;

class AcademicClassController extends Controller
{

    public function index()

    {

         $classes = AcademicClass::with('academicStandard')->get();

        return new AcademicClassCollection($classes);

        //dd($classes->toArray());

        //return new AcademicClassCollection($classes);

    }
}
