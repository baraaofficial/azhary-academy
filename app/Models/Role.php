<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['title'];

    public static function boot()
    {
        parent::boot();

        Role::observe(new \App\Observers\UserActionsObserver);
    }
}
