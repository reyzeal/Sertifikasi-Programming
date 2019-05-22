@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post">
                      @csrf
                      @isset($mhs)
                      <input type="hidden" value="{{$mhs->id}}" name="id">
                      @endisset
                      <div class="row">
                        <div class="col-4">NIM</div>
                        <div class="col-6">
                          <input class="form-control" name="nim" @isset($mhs) value="{{$mhs->nim}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Nama</div>
                        <div class="col-6">
                          <input class="form-control" name="nama" @isset($mhs) value="{{$mhs->nama}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Email</div>
                        <div class="col-6">
                          <input class="form-control" name="email" @isset($mhs) value="{{$mhs->email}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Alamat</div>
                        <div class="col-6">
                          <input class="form-control" name="alamat" @isset($mhs) value="{{$mhs->alamat}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Kelamin</div>
                        <div class="col-6">
                          <input class="form-control" name="kelamin" @isset($mhs) value="{{$mhs->kelamin}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">No.HP</div>
                        <div class="col-6">
                          <input class="form-control" name="hp" @isset($mhs) value="{{$mhs->hp}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Password</div>
                        <div class="col-6">
                          <input class="form-control" type="password" name="password">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Konfirmasi Password</div>
                        <div class="col-6">
                          <input class="form-control" type="password" name="password_confirmation">
                        </div>
                      </div>

                      <button type="reset" class="btn btn-warning">Reset</button>
                      <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
