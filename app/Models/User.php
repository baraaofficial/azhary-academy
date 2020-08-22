<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use SoftDeletes;

    use Notifiable;
   use \HighIdeas\UsersOnline\Traits\UsersOnlineTrait;


    protected $fillable = [
        'name', 'email', 'password','is_admin','image','location','mobile','bio','phone','gender','role_id'
    ];


    protected $hidden = [
        'password', 'remember_token','api_token','pin_code',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course(){
        return $this->hasMany(Course::class,'user_id','id');
    }

    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id')->withTrashed();
    }
    public function isAdmin()
    {
        foreach ($this->role()->get() as $role) {
            if ($role->id == 1) {
                return true;
            }
        }

        return false;
    }
    public function favourites()
    {
        return $this->belongsToMany(Course::class);
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification')->withPivot('is_read');
    }
    public function tokens()
    {
        return $this->hasMany('App\Models\Token');
    }
}
