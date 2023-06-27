<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Demo extends Model
{
    use HasFactory;
    protected $table = 'demo';
    protected $primaryKey = 'id';
    // public function setNameAttribute($value) {
    //     $this->attributes['name'] = ucfirst($value);
    //     // name field bhale lowercase ma hoy pan setNameAttri.. aama to aam j lakhvanu ho
    //     // jo name user_name ke aem hoy to aene studly case ma lakhvanu like setUserNameAttribute
    // }
    // public function setEmailAttribute($value) {
    //     $this->attributes['email'] = strtoupper($value);
    // }
    // public function getDobAttribute($value) {
    //     return date("d-M-Y" , strtotime($value));
    // }
    // public function getEmailAttribute($value) {
    //     return $this->attributes['email'] = strtolower($value);
    // }


    // New in laravel aek j method bane mate get and set mate 
    protected function Name(): Attribute
    {
        return Attribute::make (
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => ucfirst($value),
        );
    }
}
