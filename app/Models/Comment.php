<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'cours_id', 'user_id');

    public function user()
    {
        return $this->belongsTo('Models\User');
    }

    public function courss()
    {
        return $this->belongsTo('Models\User');
    }

}