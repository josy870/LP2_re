<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function  user() {
        return $this->belongsTo(User::class); //relacion de uno a muchos inversa
    }
    public  function category(){
        return $this->belongsTo(Category::class);//Relacion de uno a mucho
    }
    public  function tags(){
       return $this->belongsToMany(Tag::class);//Relacion de muchos a muchos
    }
    public  function image(){
        return $this->morphOne(Image::class,'imageable');//Una imagen pertenece a un post y se puede  relacionar con varios posts
    }
}
