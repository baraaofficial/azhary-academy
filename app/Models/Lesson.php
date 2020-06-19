<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $table = 'lessons';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'video', 'image','pdf', 'love', 'dislove', 'review','courses_id');

    public function courses()
    {
        return $this->belongsTo(Course::class, 'courses_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }




}
