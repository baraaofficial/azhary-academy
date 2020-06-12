<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $table = 'teachers';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'email', 'image', 'phone', 'school');

}
