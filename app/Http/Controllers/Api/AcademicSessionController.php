<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\AcademicSession;

use App\Http\Resources\AcademicSessionResource;


use App\Http\Resources\AcademicSessionCollection;


class AcademicSessionController extends Controller
{
    public function index()

    {
        $sessions = AcademicSession::all();

        return new AcademicSessionCollection($sessions);

    }
}
