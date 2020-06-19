<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    public $timestamps = true;
    protected $fillable = array('question', 'answer');


    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'test_id');
    }
}
