<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public $timestamps = true;
    protected $fillable = array('snum','course_id','user_id','user_name','user_email','user_phone','total','paid','f_response');

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function cartCourse()
    {
        return $this->hasOne(CartCourse::class);
    }

}
