<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JoyfulMessage extends Model
{
    use SoftDeletes;

    protected $table = 'reprimand_message';
    public $timestamps = true;
    protected $fillable = array('body');

}
