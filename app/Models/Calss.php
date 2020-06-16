<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calss extends Model
{

    protected $table = 'class';
    public $timestamps = true;
    protected $fillable = array('name');

    public function subject()
    {
        return $this->belongsToMany('App\Models\Subject');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
