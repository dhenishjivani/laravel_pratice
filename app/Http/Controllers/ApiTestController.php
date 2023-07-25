<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "let's See brother!";
        $students = Student::all();
        if ($students->count() > 0) {
            return response()->json([
                'status' => 200,
                'students' => $students,
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'status_message' => 'Sorry! Record not found',
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
        ]);

        if ($student) {
            return response()->json([
                'status' => 200,
                'message' => "Hureeh! Your data is store successfully!",
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Oops! Something went wrong!",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Student::find($id);
        if ($student) {
            return response()->json([
                'status' => 200,
                'student' => $student,
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No record found for this id!",
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = Student::find($id);
        if ($student) {
            $student->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
            ]);
            return response()->json([
                'status' => 200,
                'message' => "Hureeh! Your data is Update successfully!",
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Oops! Something went wrong!",
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return response()->json([
                'status' => 200,
                'message' => "Record Deleted successfully!",
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Oops! Something went wrong!",
            ], 404);
        }
    }
}
