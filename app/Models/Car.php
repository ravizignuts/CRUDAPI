<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable=['Name','BodyStyle','Color','Manufacturer','Price','owner_id'];
    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id','id');
    }

}
