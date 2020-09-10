<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'orders';
    protected $fillable = array('order_on', 'total_amount', 'user_id', 'course_id', 'bank_transaction_id');

    public function user (){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function course (){
        return $this->belongsTo(Course::class,'course_id','id');
    }
}
