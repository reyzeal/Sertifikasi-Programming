<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class mahasiswa extends Authenticatable
{
  use Notifiable;
  protected $fillable = [
      'nama','nim', 'email', 'password','alamat','kelamin','hp','partner_id','internship_id'
  ];

  public function partner(){
    return $this->hasOne(\App\mahasiswa::class,'partner_id');
  }
  public function internship(){
    return $this->belongsTo(\App\internship::class,'internship_id');
  }
}
