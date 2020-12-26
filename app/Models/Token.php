<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Token extends Model
{
    use SoftDeletes;

    protected $table = 'tokens';
    public $timestamps = true;
    protected $fillable = array('user_id','token','platform','tokenable_id');

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
