@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Internship</div>

                <div class="card-body">
                    <form method="post">
                      @csrf
                      <div class="row">
                        <div class="col-4">Instansi</div>
                        <div class="col-6">
                          <input class="form-control" name="instansi" @isset($internship) value="{{$internship->instansi}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Bagian</div>
                        <div class="col-6">
                          <input class="form-control" name="bagian" @isset($internship) value="{{$internship->bagian}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Pembimbing Lapangan</div>
                        <div class="col-6">
                          <input class="form-control" name="pembimbing" @isset($internship) value="{{$internship->pembimbing}}" @endisset>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Dosen</div>
                        <div class="col-6">
                          <select name="dosen_id" class="form-control">
                            @foreach(App\dosen::all() as $dosen)
                                <option value="{{$dosen->id}}" @isset($internship) selected @endisset>{{$dosen->nama}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Mulai</div>
                        <div class="col-6">
                          <input class="form-control" type="datetime" name="mulai" @isset($internship) value="{{$internship->mulai}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Akhir</div>
                        <div class="col-6">
                          <input class="form-control" type="datetime" name="akhir" @isset($internship) value="{{$internship->akhir}}" @endisset>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Surat pengantar</div>
                        <div class="col-6">
                          @isset($internship) <a href="{{$internship->pengantar}}">File</a> @endisset
                          <input class="form-control" name="pengantar" type="file">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Laporan</div>
                        <div class="col-6">
                          @isset($internship) <a href="{{$internship->laporan}}">File</a> @endisset
                          <input class="form-control" name="laporan" type="file">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">Disetujui</div>
                        <div class="col-6">
                            @isset($internship) {{$internship->disetujui?'YA':'BELUM'}} @endisset
                        </div>
                      </div>

                      {{-- <button type="reset" class="btn btn-warning">Reset</button> --}}
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$("[name=mulai],[name=akhir]").flatpickr({enableTime: true,dateFormat: "Y-m-d H:i:S",});
</script>
@endsection
