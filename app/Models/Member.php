<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = 'member_id';
    function Group()
    {
        // hasOne no matlab samjay bhai one to many tame data lavano try karo to kem no thay  eto gotade chade to pachi maja ave aevu id ape j ne 
        // return $this->hasOne('App\Models\Group','group_id');
        // return $this->hasOne(Group::class,'group_id' , 'group_id');


        // return $this->hasMany('App\Models\Group','group_id' , 'group_id');
        // primary key   //aa na upar relation lagado bhai 
    }
}
