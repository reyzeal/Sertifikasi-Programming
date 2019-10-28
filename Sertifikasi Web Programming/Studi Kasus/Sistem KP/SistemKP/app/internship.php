<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
  protected $fillable = [
      'instansi','bagian','pembimbing','dosen_id','mulai','akhir','pengantar','laporan','disetujui'
  ];
  public function mahasiswa(){
    return $this->hasMany(\App\mahasiswa::class,'internship_id');
  }
  public function dosen(){
    return $this->belongsTo(\App\dosen::class,'dosen_id');
  }
  public function bimbingan(){
    return $this->hasMany(\App\bimbingan::class,'internship_id');
  }
}
