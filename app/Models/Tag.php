<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    use SoftDeletes;

    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable = array('name');

    public function course()
    {
        return $this->belongsToMany(Course::class,'courses_tag');
    }

}
