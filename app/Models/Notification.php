<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model 
{

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('title','body','notifiable_type');
//    protected $appends = array('type','resources');

    public function notifiable()
    {
        return $this->morphTo();
    }

    public function users()
    {
        return $this->morphedByMany('App\Models\User','notifiable')->withPivot('is_read','send_at','is_send');
    }

//    public function getTypeAttribute()
//    {
//        $type = '';
//
//        switch ($this->notifiable_type){
//            case 'App\Models\Order':
//                $type = 'order';
//                break;
//            case 'App\Models\Review':
//                $type = 'review';
//                break;
//        }
//        return $type;
//    }
//
//    public function getResourcesAttribute()
//    {
//        $value = '';
//
//        switch ($this->notifiable_type){
//            case 'App\Models\Order':
//                $value = 'App\Http\Resources\Order';
//                break;
//
//            case 'App\Models\Review':
//                $value = 'App\Http\Resources\Review';
//                break;
//        }
//        return $value;
//    }

}