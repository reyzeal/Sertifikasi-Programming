<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
  protected $fillable = [
      'nama', 'email', 'password','nip','hp'
  ];
  public function internship(){
    return $this->hasMany(App\internship::class,'dosen_id');
  }
  public function bimbingan(){
    return $this->hasMany(App\bimbingan::class,'dosen_id');
  }
}
