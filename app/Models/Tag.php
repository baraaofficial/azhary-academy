<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable = array('name');

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_tag');
    }

}
