@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/mahasiswa/internship">Internship</a>
                    <a class="btn btn-secondary" href="/mahasiswa/bimbingan">Bimbingan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
