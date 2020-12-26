<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $table = 'lessons';
    public $timestamps = true;
    protected $fillable = array('title','description','video','image','pdf','review','course_id','isFree',
        'experimental','answer','experimental2','answer2','experimental3','answer3','experimental4','answer4','experimental5','answer5',
        'experimental6','answer6','experimental7','answer7','experimental8','answer8','experimental9','answer9','experimental10','answer10'
    );

    public function questions()
    {
        return $this->hasMany(Question::class, 'lesson_id')->withTrashed();
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function users(){
        return $this->belongsToMany(Lesson::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function notifications()
    {
        return $this->morphMany('App\Models\Notification', 'notifiable');
    }



}
