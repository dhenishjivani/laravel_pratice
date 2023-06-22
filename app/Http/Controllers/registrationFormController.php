<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;

class registrationFormController extends Controller
{
    //
    public function details(Request $request)
    {
        $request->validate(
            [
                'name' => 'required'
            ]
        );
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

        // echo "<pre>";
        // print_r($result->toArray());
        // die();

        // Alert show karva mate 
        return redirect("register")->with('status', 'Data Inserted!!');
    }

    public function display() {
        $url = url('sendData');
        $title = "Registration Form";
        $data = compact('url','title');
        return view("registrationForm")->with($data);
    }
    public function delete($id)
    {
        // $obj = Demo::find($id);
        // $resul = $obj->toArray();
        // echo "<pre>";
        // print_r($resul);
        // Demo::find($id)->delete();
        // return redirect()->back();   // Jo id ke aevu nyy male to aa problem kari sake che means ke error api sake che aetale condition check karine pachi delete karvu saru 

        $result = Demo::find($id);
        if (!is_null($result)) {
            $result->delete();
        }
        return redirect('displaydata');
    }

    public function edit($id)
    {
        $result = Demo::find($id);
        if(!is_null($result)) {
            $title = "Update Your Data";
            $url = ('updateData') . "/" . $id;
            $data = compact('result','url','title');
            return view('registrationForm')->with($data);
        } else {
            return redirect('displaydata');
        }
    }
}
