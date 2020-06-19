<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name','description','category','image','price','love','state','subject_id','class_id','courses_id');


    public function lesson()
    {
        return $this->hasMany(Lesson::class, 'courses_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'courses_tag');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function class()
    {
        return $this->belongsTo(Calss::class, 'class_id');
    }

}
