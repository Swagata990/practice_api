<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;


class ExamController extends Controller
{
    public function index()
    {
       $exams=Exam::all();

       return new SuccessCollection(
        $exams,
       'Exams fetched successfully',
        200
       );
    }

    public function store(Request $request)
    {
        $exam =Exam::create([
            'name' => $request->name,
            'date' => $request->date,
            'subject_id'=>$request->subject_id
        ]);

         return new SuccessResource(
            $exam,
            'exam Added Successfully',
            201
        );       
    }

    public function show($id)
    {
        $exam = Exam::findOrFail($id);

        return new SuccessResource(

            $exam,

            'exam fetched successfully',

            200

        );
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);

        $exam->update([
            'name' => $request->name,
            'date' => $request->date,
            'subject_id'=>$request->subject_id
        ]);

        return response()->json([
        'message' => 'exam Updated',
        'data' => $exam
        ]);
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);

        $exam->delete();

        return (new SuccessResource(
            [],
            'Exam Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
