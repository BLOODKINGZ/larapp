<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Just for reference - No effect on code
    protected $table = "posts"; //auto created during "php artisan make:model Post -m"
    protected $primaryKey = "id"; //by default but can be changed from here
    public $timestamps = true; //by default true
}
