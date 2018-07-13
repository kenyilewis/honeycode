<?php

namespace App;

use Hootlex\Friendships\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts()
    {
      $this->hasMany(Post::class);
    }
    public function mensajes()
    {
      $this->hasMany(Mensajes::class);
    }
    public function friends()
    {
      $this->hasMany(Friend::class);
    }
    public function getFriends($id)
    {
      $friends = [];
      $find = Friend::where([['user_1', $id],['state', '1']])->pluck('user_2')->all();
      foreach ($find as $value) {
        $friend = User::where('id', $value)->first();
        array_push ( $friends , $friend );
      }
      $find = Friend::where([['user_2', $id],['state', '1']])->pluck('user_1')->all();
      foreach ($find as $value) {
        $friend = User::where('id', $value)->first();
        array_push ( $friends , $friend );
      }
      return $friends;

    }
    public function getrel($id)
    {
      $rel = Friend::where([['user_1',$id],['user_2', auth()->user()->id]])
                          ->orWhere([['user_1',auth()->user()->id],['user_2', $id ]])
                          ->pluck('id')->first();
      return $rel;

    }

}
