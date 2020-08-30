<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReprimandMessage extends Model
{

    protected $table = 'reprimand_message';
    public $timestamps = true;
    protected $fillable = array('body');

}
