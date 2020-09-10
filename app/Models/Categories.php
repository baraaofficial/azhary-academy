<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    public $timestamps = true;
    protected $fillable = array('name');

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
