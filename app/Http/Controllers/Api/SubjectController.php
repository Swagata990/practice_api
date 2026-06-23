<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;


class SubjectController extends Controller
{
    public function index()
    {
       $subjects=Subject::all();

       return new SuccessCollection(
        $subjects,
       'Subjects fetched successfully',
        200
       );
    }

    public function store(Request $request)
    {
        $subject = Subject::create([
            'name' => $request->name,
            'teacher_id'=>$request->teacher_id
        ]);

         return new SuccessResource(
            $subject,
            'Subject Added Successfully',
            201
        );       
    }

    public function show($id)
    {
        $subject = Subject::findOrFail($id);

        return new SuccessResource(

            $subject,

            'Subject fetched successfully',

            200

        );
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);

        $subject->update([
            'name' => $request->name,
            'teacher_id'=>$request->teacher_id
        ]);

        return response()->json([
        'message' => 'subject Updated',
        'data' => $subject
        ]);
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        $subject->delete();

        return (new SuccessResource(
            [],
            'Subject Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
