<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name','description','category','image','price','love','state','subject_id','class_id');


    public function courses()
    {
        return $this->belongsTo(Cours::class, 'cat_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'category_tag');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function class()
    {
        return $this->belongsTo(Calss::class, 'class_id');
    }

}
