<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function book()
    {
        //MANY TO MANY
        return $this->belongsToMany(Book::class, 'author_books','book_id','author_id');
    }
}
