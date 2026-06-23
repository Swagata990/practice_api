<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;

class AdmissionController extends Controller
{
    public function index()
    {
       $admissions=Admission::all();

       return new SuccessCollection(
        $admissions,
       'admissions fetched successfully',
        200
       );
    }

    public function store(Request $request)
    {
        $admission =Admission::create([
            'student_id' => $request->student_id,
            'admission_date' => $request->admission_date,
            'class_id'=>$request->class_id,
            'session' => $request->session,
            'status' => $request->status,
        ]);

         return new SuccessResource(
            $admission,
            'admission Added Successfully',
            201
        );       
    }

    public function show($id)
    {
        $admission = Admission::findOrFail($id);

        return new SuccessResource(

            $admission,

            'admission fetched successfully',

            200

        );
    }

    public function update(Request $request, $id)
    {
        $admission = Admission::find($id);

        $admission->update([
            'student_id' => $request->student_id,
            'admission_date' => $request->admission_date,
            'class_id'=>$request->class_id,
            'session' => $request->session,
            'status' => $request->status,
        ]);

        return response()->json([
        'message' => 'admission Updated',
        'data' => $admission
        ]);
    }

    public function destroy($id)
    {
        $admission = Admission::findOrFail($id);

        $admission->delete();

        return (new SuccessResource(
            [],
            'admission Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
