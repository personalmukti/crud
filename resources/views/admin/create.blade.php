@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'ADGS Backroom') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Tambah data member AD Games & Softworks</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Ups! </strong> Kesalahan input.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="memberNama" class="col-sm-2 col-form-label">Nama Member</label>
                <div class="col-sm-10">
                    <input type="text" name="memberNama" class="form-control" id="memberNama" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="memberJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="memberJabatan" class="form-control" id="memberJabatan" placeholder="Jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="memberAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="memberAlamat" rows="8" cols="80" placeholder="Alamat Lengkap"></textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="memberLevel" class="col-sm-2 col-form-label">Rank Member</label>
                <div class="col-sm-10">
                    <select id="memberLevel" name="memberLevel"class="form-control">
                        <option> </option>
                        <option value="Prime Fleet Admiral"> Prime Fleet Admiral</option>
                        <option value="Prime Vice Admiral"> Prime Vice Admiral</option>
                        <option value="Prime Rear Admiral"> Prime Rear Admiral</option>
                        <option value="Rear Admiral"> Rear Admiral</option>
                        <option value="Captain"> Captain</option>
                        <option value="Commander"> Commander</option>
                        <option value="Lieutenant"> Lieutenant</option>
                        <option value="Ensign"> Ensign</option>
                        <option value="Chief Warrant Officer"> Chief Warrant Officer</option>
                        <option value="Chief Petty Officer"> Chief Petty Officer</option>
                        <option value="Seaman"> Seaman</option>
                        <option value="Seaman Apprentice"> Seaman Apprentice</option>
                        <option value="Seaman Recruit"> Seaman Recruit</option>
                        <option value="Private Contractor"> Private Contractor</option>
                    </select>
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="{{route('admin.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection