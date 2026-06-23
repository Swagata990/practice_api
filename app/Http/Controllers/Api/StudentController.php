<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\SuccessResource;


class StudentController extends Controller
{

    public function index()
    {
       $students=Student::all();

       return new StudentCollection($students);
    }

   public function store(StudentRequest $request)

    {

        $student = Student::create($request->validated());

        return (new SuccessResource(

            new StudentResource($student),

            'Student Added Successfully',

            201

        ))->response()->setStatusCode(201);

    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        return new SuccessResource(

            $student,

            'Student fetched successfully',

            200

        );
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->validated());

        return (new SuccessResource(
            new StudentResource($student->fresh()),
            'Student Updated Successfully',
            200
        ))->response()->setStatusCode(200);
    }


    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return (new SuccessResource(
            [],
            'Student Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
