<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Member;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // One to One
        // return Member::all();    // member no badho data malse
        // return Member::find(1)->Group;    // ama group_id 1 hase aeno deta malse khali group table no
        // return Member::with('Group')->find(1)->get(); // ama vichari aevu output nyy male kem ke one to one ma  2 group_id che atyare apani pase 2 member mate same id eto nyy j chale ne 
        // $member = Member::find(3);
        // $group = $member->Group;
        // dump($member->toArray());
        // dump($group);

        //One to Many   // Member to Group
        // return member::get();
        // return Member::with('Group')->get();

        //One to Many   // Group to Member
        // return Group::get();
        return Group::with('Member')->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }

    public function saveGroupData()
    {
        $obj = new Group;
        $obj->group_id = 2;
        $obj->name = 'Krishna';
        $obj->discription = 'Radhe Krishna';
        $obj->save();
    }

    public function saveMemberData()
    {
        $obj = new Member;
        $obj->member_id = 3;
        $obj->name = 'A';
        $obj->mobile = '999999';
        $obj->group_id = 2;
        $obj->save();
    }
}
