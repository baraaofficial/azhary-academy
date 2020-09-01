<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Token extends Model
{
    use SoftDeletes;

    protected $table = 'tokens';
    public $timestamps = true;
    protected $fillable = array('user_id','token','platform');

    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }
}
