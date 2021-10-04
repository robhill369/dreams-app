<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    // Shouldn't need the below as I've defined the unguarded in the app service provider
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($password)
    {
       $this->attributes['password'] = bcrypt($password); 
    }

    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }

    public function setFirstNameAttribute($firstName)
  {
    $this->attributes['first_name'] = ucfirst($firstName);
  }

  public function setLastNameAttribute($lastName)
  {
    $this->attributes['last_name'] = ucfirst($lastName);
  }

}
