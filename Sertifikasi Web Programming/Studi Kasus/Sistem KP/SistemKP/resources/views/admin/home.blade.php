@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="/admin/mahasiswa">Dashboard Mahasiswa</a>
                    <a class="btn btn-secondary" href="/admin/dosen">Dashboard Dosen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
