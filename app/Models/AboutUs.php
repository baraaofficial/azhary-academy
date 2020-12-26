<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUs extends Model
{
    use SoftDeletes;

    protected $table = 'about_us';
    public $timestamps = true;
    protected $fillable = array('title','title1','title2','title3','content1','content2','content3','image');

}
