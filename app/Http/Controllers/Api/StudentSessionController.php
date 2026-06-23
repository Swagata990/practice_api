<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentSession;
use App\Http\Resources\StudentSessionResource;
use App\Http\Resources\StudentSessionCollection;


class StudentSessionController extends Controller
{
    public function index()
    {
        $sessions=StudentSession::with('student','academicSession','academicClass')->get();
        return new StudentSessionCollection($sessions);

        //dd($sessions->toArray());

        //return new StudentSessionCollection($sessions);
    }
}
