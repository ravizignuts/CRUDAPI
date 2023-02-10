<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','programmer_id'];
    public function programmer(){
        return $this->belongsTo(Programmer::class,'programmer_id','id');
    }
    public function client(){
        return $this->hasMany(Client::class,'project_id','id');
    }
}
