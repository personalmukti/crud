@extends('layouts.dash')
@section('content')
<div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Detail Member ADGS</h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="namaMahasiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                {{$member->memberNama}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="nimMahasiswa" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                {{$member->memberJabatan}}
            </div>
        </div>
        <div class="form-group row">
            <label for="angkatanMahasiswa" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                 {{$member->memberAlamat}}
            </div>
        </div>
        <div class="form-group row">
            <label for="judulskripsiMahasiswa" class="col-sm-2 col-form-label">Member Rank</label>
                <div class="col-sm-10">
                    {{$member->memberLevel}}
                </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('admin.index')}}" class="btn  btn-primary">Kembali</a>
            </div>
        </div>

    </div>
@endsection