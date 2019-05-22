@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-success" href="/admin/dosen/add">Tambah dosen</a>
                    <table class="table pt-5">
                      <thead>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach($dosens as $dosen)
                          <tr>
                            <td>{{$dosen->nip}}</td>
                            <td>{{$dosen->nama}}</td>
                            <td>
                              <a class="btn btn-primary" href="/admin/dosen/edit/{{$dosen->id}}">Edit</a>
                              <a class="btn btn-secondary" href="/admin/dosen/delete/{{$dosen->id}}">Delete</a>
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
