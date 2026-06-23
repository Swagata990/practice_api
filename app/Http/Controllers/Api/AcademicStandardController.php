<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AcademicStandard;

use App\Http\Resources\AcademicStandardResource;

use App\Http\Resources\AcademicStandardCollection;
use Illuminate\Http\Request;

class AcademicStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $standards = AcademicStandard::all();

        return new AcademicStandardCollection($standards);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
