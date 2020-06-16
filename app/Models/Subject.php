<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $table = 'subjects';
    public $timestamps = true;
    protected $fillable = array('name');

    public function class()
    {
        return $this->belongsToMany('App\Models\Calss');
    }
    public function category()
    {
        return $this->hasMany(Category::class, 'cat_id');
    }

}
