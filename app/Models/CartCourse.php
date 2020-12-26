<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartCourse extends Model
{
    protected $table = 'cart_course_user';
    public $timestamps = true;
    protected $fillable = array('user_id','cart_id','course_id','price');

    public function course()
    {
        return $this->belongsTo(Course::Class);
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
