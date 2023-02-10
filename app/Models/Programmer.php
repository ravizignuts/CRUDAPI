<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programmer extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function project()
    {
        //One to One Relationship with Project model
        //return $this->hasOne(Project::class,'programmer_id','id');

        //One to Many Relationship with Project model
        return $this->hasMany(Project::class, 'programmer_id', 'id');
    }
    public function client()
    {
        //Has One Through Relation ship
        // return $this->hasOneThrough(Client::class,Project::class,'programmer_id','project_id','id','id');

        //Has Many Through Relationship
        //return $this->hasManyThrough(Client::class,Project::class,'programmer_id','project_id','id','id');

        //=================if relationship is already define in the model you just need to call the method only=====================
        return $this->through('project')->has('client');
        //return $this->throughProject()->hasClient();
    }
}
