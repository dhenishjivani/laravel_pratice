<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Demo::all();
        return view('displayFormData', ['data' => $data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registrationForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $hobbiesVal = implode(",", $request['hobbies']);

        // Insert Query che aa laravel ma 
        $obj = new Demo;
        $obj->name = $request['name'];
        $obj->email = $request['email'];
        $obj->address = $request['address'];
        $obj->dob = $request['dob'];
        $obj->hobbies = $hobbiesVal;
        $obj->gender = $request['gender'];
        $obj->state = $request['state'];
        $obj->city = $request['city'];
        $obj->save();
        return redirect()->route('register.create')->with('status', 'Data Inserted!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Demo::find($id);
        // $result = $data->toArray();
        // echo "<pre>";
        // print_r($result);
        // die;
        return view('editForm', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $hobbiesVal = implode(",", $request['hobbies']);
        $obj = Demo::find($id);
        $obj->name = $request['name'];
        $obj->email = $request['email'];
        $obj->address = $request['address'];
        $obj->dob = $request['dob'];
        $obj->hobbies = $hobbiesVal;
        $obj->gender = $request['gender'];
        $obj->state = $request['state'];
        $obj->city = $request['city'];
        $obj->save();
        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo "hello";
        $result = Demo::find($id);

        if (!is_null($result)) {
            $result->delete();
        }
        return redirect()->route('register.index');
    }
}
