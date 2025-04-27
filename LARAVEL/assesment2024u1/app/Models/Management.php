<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    public function job(){
        return  $this->belongsTo(Job::class);
    }
    public  function image(){
        return $this->morphOne(Image::class,'imageable');//Una imagen pertenece a un post y se puede  relacionar con varios posts
    }
}
