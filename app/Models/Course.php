<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use SoftDeletes;

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name','description','image','price','pdf','visitor','state','subject_id','class_id','course_id','user_id','category_id','payment_status','teacher_id','delete_at');


    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }
    public function categories()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'courses_tag');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function class()
    {
        return $this->belongsTo(Calss::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'cart_course_user','user_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function notifications()
    {
        return $this->morphMany('App\Models\Notification', 'notifiable');
    }

    public function cartCourse()
    {
        return $this->hasMany(Cart::Class,'course_id');
    }

    public function paymentCourse()
    {
        return $this->hasMany(CartCourse::Class,'course_id');
    }



}
