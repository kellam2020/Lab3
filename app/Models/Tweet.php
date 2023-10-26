<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
//what is the code below doing?
//it is telling laravel that the body field is the only field that can be mass assigned
    public $fillable = ['body'];
}
