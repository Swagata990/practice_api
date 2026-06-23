<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\TeacherRequest;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;

class TeacherController extends Controller
{
   public function index()
    {
       $teachers=Teacher::all();

       return new SuccessCollection(
        $teachers,
       'Teachers fetched successfully',
        200
       );
    }


    public function store(TeacherRequest $request)
    {
        $teacher = Teacher::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'qualification' => $request->qualification,
            'phone_no'=>$request->phone_no,
            'email'=>$request->email,
            'salary'=>$request->salary,
            'gender'=>$request->gender
        ]);

         return new SuccessResource(
            $teacher,
            'Teacher Added Successfully',
            201
        );       
    }
    
    public function show($id)
    {
        return Teacher::find($id);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        $teacher->update([
            'name' => $request->name,
            'subject' => $request->subject,
            'qualification' => $request->qualification,
            'phone_no'=>$request->phone_no,
            'email'=>$request->email,
            'salary'=>$request->salary,
            'gender'=>$request->gender
        ]);

        return response()->json([
        'message' => 'Teacher Updated',
        'data' => $teacher
        ]);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return (new SuccessResource(
            [],
            'Teacher Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }

}
