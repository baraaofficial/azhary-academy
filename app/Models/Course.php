<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name','description','category','image','price','love','state','subject_id','class_id','course_id','user_id');


    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }


}
