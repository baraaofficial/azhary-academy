<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Class_subject extends Model 
{

    protected $table = 'class_subject';
    public $timestamps = true;
    protected $fillable = array('class_id', 'subject_id');

}