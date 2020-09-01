<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisitorHome extends Model
{
    use SoftDeletes;

    protected $table = 'visitor';
    public $timestamps = true;
    protected $fillable = ['visitor'];
}
