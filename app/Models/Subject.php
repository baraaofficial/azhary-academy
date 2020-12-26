<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    protected $table = 'subjects';
    public $timestamps = true;
    protected $fillable = array('name');

    public function class()
    {
        return $this->belongsToMany('App\Models\Calss');
    }
    public function course()
    {
        return $this->hasMany(Course::class, 'subject_id','id');
    }


}
