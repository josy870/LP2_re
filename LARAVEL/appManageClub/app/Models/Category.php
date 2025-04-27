<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected$guarded=['id']; // si tengo error  en el formulario no me deja guardar, pero con esto funciona bien

    //Una categoria tiene muchos posts
    //Relacion 1 a *
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
