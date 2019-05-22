<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use App\dosen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
      return view('admin.home');
    }
    public function mahasiswa(){
      return view('admin.mahasiswa')->with([
        'mahasiswa'=>mahasiswa::paginate(10)
      ]);
    }
    public function mahasiswaAddIndex(){
      return view('admin.editor-mhs');
    }
    public function mahasiswaAdd(Request $request){
      $request->validate([
        'nim' => 'string|required',
        'nama' => 'string|required',
        'password' => 'string|confirmed'
      ]);
      $data = $request->all();
      if($request->password) $data['password'] = \Hash::make($request->password);
      $mahasiswa = mahasiswa::create($data);
      return redirect()->route('admin.mahasiswa');
    }

    public function mahasiswaEditIndex($id){
      return view('admin.editor-mhs')->with(['mhs'=>mahasiswa::find($id)]);
    }
    public function mahasiswaEdit(Request $request,$id){
      $mhs = mahasiswa::find($id);
      $request->validate([
        'nim' => 'string|required',
        'nama' => 'string|required',
        'password' => 'confirmed'
      ]);
      $data = $request->all();
      if($request->has('password') && strlen($request->password)){
        $data['password'] = \Hash::make($request->password);
        $mhs->fill($data);
      }
      else{
        $mhs->fill($request->except('password'));
      }
      $mhs->save();
      // $mahasiswa = mahasiswa::create($request->all());
      return redirect()->route('admin.mahasiswa');
    }
    public function mahasiswaDelete($id){
      mahasiswa::find($id)->delete();
      return redirect()->back();
    }
    public function dosen(){
      return view('admin.dosen')->with(['dosens'=>dosen::paginate(5)]);
    }
    public function dosenAddIndex(){
      return view('admin.editor-dosen');
    }
    public function dosenAdd(Request $request){
      dosen::create($request->all());
      return redirect()->route('admin.dosen');
    }
    public function dosenEditIndex($id){
      return view('admin.editor-dosen')->with(['dosen'=>dosen::find($id)]);
    }
    public function dosenEdit(Request $request, $id){
      $dosen = dosen::find($id);
      $dosen->fill($request->all());
      return redirect()->route('admin.dosen');
    }
    public function dosenDelete($id){
      dosen::find($id)->delete();
      return redirect()->back();
    }
}
