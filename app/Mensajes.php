<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
  protected $fillable= ['title', 'body', 'user_id', 'remit_id', 'read'];


  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
