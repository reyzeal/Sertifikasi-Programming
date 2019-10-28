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
                      @isset($dosen)
                      <input type="hidden" value="{{$dosen->id}}" name="id">
                      @endisset
                      <div class="row">
                        <div class="col-4">NIP</div>
                        <div class="col-6">
                          <input class="form-control" name="nip" @isset($dosen) value="{{$dosen->nip}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Nama</div>
                        <div class="col-6">
                          <input class="form-control" name="nama" @isset($dosen) value="{{$dosen->nama}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Email</div>
                        <div class="col-6">
                          <input class="form-control" name="email" @isset($dosen) value="{{$dosen->email}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">No.HP</div>
                        <div class="col-6">
                          <input class="form-control" name="hp" @isset($dosen) value="{{$dosen->hp}}" @endisset>
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
