<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifiable extends Model 
{

    protected $table = 'notifiables';
    public $timestamps = true;
    protected $fillable = array('notification_id', 'notifiable_type', 'notifiable_id','is_read');

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
}