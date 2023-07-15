<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    protected $table = 'users';
    protected $fillable= ['name','usertype','email','password'];
}
