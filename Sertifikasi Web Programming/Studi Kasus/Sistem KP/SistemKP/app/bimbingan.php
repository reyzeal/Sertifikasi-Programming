<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bimbingan extends Model
{
  protected $fillable = [
      'internship_id','dosen_id','keterangan','waktu'
  ];
  public function internship(){
    return $this->belongsTo(App\internship::class,'internship_id');
  }
  public function dosen(){
    return $this->belongsTo(App\dosen::class,'dosen_id');
  }
}
