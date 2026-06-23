<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Http\Resources\SuccessResource;
use App\Http\Resources\SuccessCollection;

class FeeController extends Controller
{
    public function index()
    {
       $fees=Fee::all();

       return new SuccessCollection(
        $fees,
       'fees fetched successfully',
        200
       );
    }

    public function store(Request $request)
    {
        $fee =Fee::create([
            'student_id' => $request->student_id,
            'amount' => $request->amount,
            'payment_date'=>$request->payment_date,
            'status' => $request->status,
        ]);

         return new SuccessResource(
            $fee,
            'fee Added Successfully',
            201
        );       
    }

    public function show($id)
    {
        $fee = Fee::findOrFail($id);

        return new SuccessResource(

            $fee,

            'fee fetched successfully',

            200

        );
    }

    public function update(Request $request, $id)
    {
        $fee = fee::find($id);

        $fee->update([
            'student_id' => $request->student_id,
            'amount' => $request->amount,
            'payment_date'=>$request->payment_date,
            'status' => $request->status,
        ]);

        return response()->json([
        'message' => 'fee Updated',
        'data' => $fee
        ]);
    }

    public function destroy($id)
    {
        $fee = Fee::findOrFail($id);

        $fee->delete();

        return (new SuccessResource(
            [],
            'fee Deleted Successfully',
            204
        ))->response()->setStatusCode(204);
    }
}
