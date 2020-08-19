<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'course_id');

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('is_read');
    }
}
