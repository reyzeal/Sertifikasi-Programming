<?php

namespace App\Http\Controllers;
use Auth;
use App\internship;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function home(){
      return view('mahasiswa.home');
    }
    public function internshipIndex(){
      return view('mahasiswa.internship');
    }
    public function internship(Request $request){
      $internship = Auth::user()->internship;
      if($internship){
        $user = Auth::user();
        $laporan = null;
        $pengantar = null;
        if($request->hasFile('pengantar')){
          $ext = $request->pengantar->extension;
          $pengantar =$request->pengantar->storeAs("$user->nim","pengantar.$ext",'public');
          // Storage::disk('public')->put(,);
          $internship->pengantar = $pengantar;
        }
        if($request->hasFile('laporan')){
          $ext = $request->laporan->extension;
          $laporan =$request->laporan->storeAs("$user->nim","laporan.$ext",'public');
          // Storage::disk('public')->put(,);
          $internship->laporan = $laporan;
        }
        $internship->fill($request->except(['pengantar','laporan']));
        $internship->save();
      }
      else{
        $user = Auth::user();
        $laporan = null;
        $pengantar = null;
        if($request->hasFile('pengantar')){
          $ext = $request->pengantar->extension;
          $pengantar =$request->pengantar->storeAs("$user->nim","pengantar.$ext",'public');
          // Storage::disk('public')->put(,);
        }
        if($request->hasFile('laporan')){
          $ext = $request->laporan->extension;
          $laporan =$request->laporan->storeAs("$user->nim","laporan.$ext",'public');
          // Storage::disk('public')->put(,);
        }
        $data = [
          'instansi' => $request->instansi,
          'bagian' => $request->bagian,
          'pembimbing' => $request->pembimbing,
          'dosen_id' => $request->dosen_id,
          'mulai' => $request->mulai,
          'akhir' => \Carbon\Carbon::create($request->akhir),
          'pengantar' => $pengantar,
          'laporan' => $laporan,
          'disetujui' => $request->instansi,
        ];
        return $data;
        $internship = internship::create();
      }
    }
    public function bimbinganIndex(){
      return view('mahasiswa.bimbingan')->with(['bimbingan'=>\Auth::user()->internship]);
    }
    public function bimbingan(Request $request){
      bimbingan::create([
        'internship_id' => Auth::user()->internship->id,
        'dosen_id' => Auth::user()->internship->dosen->id,
        'keterangan'=>$request->keterangan,
      ]);
      return redirect()->back();

    }
}
