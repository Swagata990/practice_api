<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Http\Requests\ResultRequest;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;


class ResultController extends Controller
{
    public function index()
    {
       $results=Result::all();

       return new SuccessCollection(
        $results,
       'Results fetched successfully',
        200
       );
    }

    public function store(Request $request)
    {
        $result = Result::create([
            'student_id' => $request->student_id,
            'exam_id'=>$request->exam_id,
            'marks'=>$request->marks,
            'grade'=>$request->grade,
        ]);

         return new SuccessResource(
            $result,
            'result Added Successfully',
            201
        );       
    }

    public function show($id)
    {
        $result = Result::findOrFail($id);

        return new SuccessResource(

            $result,

            'result fetched successfully',

            200

        );
    }

    public function update(Request $request, $id)
    {
        $result = Result::find($id);

        $result->update([
            'student_id' => $request->student_id,
            'exam_id'=>$request->exam_id,
            'marks'=>$request->marks,
            'grade'=>$request->grade,

        ]);

        return response()->json([
        'message' => 'result Updated',
        'data' => $result
        ]);
    }

    public function destroy($id)
    {
        $result = Result::findOrFail($id);

        $result->delete();

        return (new SuccessResource(
            [],
            'result Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
