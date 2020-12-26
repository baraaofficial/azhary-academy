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
        'name', 'email', 'password','is_admin','image','location','mobile','bio','phone','gender','role_id','pin_code','calss_id'
    ];


    protected $hidden = [
        'password', 'remember_token','api_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course(){
        return $this->belongsToMany(Course::class,'cart_course_user');
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

    public function cart()
    {
        return $this->belongsToMany(Cart::class);
    }
    public function cartcourse()
    {
        return $this->belongsToMany(CartCourse::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'user_id');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification')->withPivot('is_read');
    }
    public function tokens()
    {
        return $this->hasMany('App\Models\Token');
    }

    public function cart_user()
    {
        return $this->hasMany(Cart::class,'user_id');
    }
}
