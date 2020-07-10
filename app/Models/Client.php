<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use SoftDeletes;

    protected $table      = 'clients';
    public    $timestamps = true;
    protected $fillable   = array('name','email', 'phone', 'password');
    protected $hidden     = array('password', 'api_token', 'pin_code');


}
