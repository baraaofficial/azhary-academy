<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{

    protected $table = 'courss';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'video', 'image','pdf', 'love', 'dislove', 'review','cat_id');

    public function cat()
    {
        return $this->hasMany(Category::class, 'cat_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }




}
