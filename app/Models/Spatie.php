<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spatie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function setNameAttribute($v){

        $this->attributes['name']=ucwords($v);
    }
    // public function setemailAttribute($v){
    //     $this->attributes['email']=ucfirst($v);
    // }

}
