<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable= ['name','contactno'];
    public function car(){
        //return $this->hasOne(Car::class,'owner_id','id')
        // ->latestOfMany()
        // ->oldestOfMany()
        //->OfMany('Price','MAX')
        ;
        return $this->hasMany(Car::class,'owner_id','id');
    }
}
