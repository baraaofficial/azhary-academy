<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    use SoftDeletes;

    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = array('comment', 'lesson_id', 'user_id');

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }

}
