@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-success" href="/admin/mahasiswa/add">Tambah Mahasiswa</a>
                    <table class="table pt-5">
                      <thead>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach($mahasiswa as $mhs)
                          <tr>
                            <td>{{$mhs->nim}}</td>
                            <td>{{$mhs->nama}}</td>
                            <td>
                              <a class="btn btn-primary" href="/admin/mahasiswa/edit/{{$mhs->id}}">Edit</a>
                              <a class="btn btn-secondary" href="/admin/mahasiswa/delete/{{$mhs->id}}">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
