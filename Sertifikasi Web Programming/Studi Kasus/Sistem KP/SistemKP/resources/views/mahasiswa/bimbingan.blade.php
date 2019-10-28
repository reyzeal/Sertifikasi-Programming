@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if($bimbingan)
                    <form method="post" class="form-inline">
                      @csrf
                      Keterangan
                      <input class="form-control">
                      <button type="submit">Ajukan</button>
                    </form>
                    <table>
                      <thead>

                      </thead>
                      <tbody>

                        @foreach($bimbingan as $bimbingan)
                          <tr>
                            <td>{{$bimbingan->nim}}</td>
                            <td>{{$bimbingan->nama}}</td>
                            <td>
                              <a href="/admin/mahasiswa/edit/{{$bimbingan->id}}">Edit</a>
                              <a href="/admin/mahasiswa/delete/{{$bimbingan->id}}">Delete</a>
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                  @else
                    Belum mengajukan internship
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
