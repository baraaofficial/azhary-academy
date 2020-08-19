<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $table = 'contact';
    public $timestamps = true;
    protected $fillable = array('facebook', 'twitter', 'phone', 'mail');
}
