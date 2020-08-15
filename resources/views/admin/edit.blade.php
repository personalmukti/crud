@extends('layouts.dash')
@section('content')

<div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit data member AD Games & Softworks</h3>
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
        
        <form action="{{route('admin.update',$member->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="memberNama" class="col-sm-2 col-form-label">Nama Member</label>
                <div class="col-sm-10">
                    <input type="text" name="memberNama" class="form-control" id="memberNama" value="{{$member->memberNama}}" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="memberJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="memberJabatan" class="form-control" id="memberJabatan" value="{{$member->memberJabatan}}" placeholder="Jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="memberAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="memberAlamat" rows="8" cols="80" placeholder="Alamat Lengkap">{{$member->memberAlamat}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="memberLevel" class="col-sm-2 col-form-label">Rank Member</label>
                <div class="col-sm-10">
                    <select id="memberLevel" name="memberLevel"class="form-control">
                        <option> </option>
                        <option {{$member->memberLevel == 'Prime Fleet Admiral' ? 'selected' : '' }} value="Prime Fleet Admiral"> Prime Fleet Admiral</option>
                        <option {{$member->memberLevel == 'Prime Vice Admiral' ? 'selected' : '' }} value="Prime Vice Admiral"> Prime Vice Admiral</option>
                        <option {{$member->memberLevel == 'Prime Rear Admiral' ? 'selected' : '' }} value="Prime Rear Admiral"> Prime Rear Admiral</option>
                        <option {{$member->memberLevel == 'Rear Admiral' ? 'selected' : '' }} value="Rear Admiral"> Rear Admiral</option>
                        <option {{$member->memberLevel == 'Captain' ? 'selected' : '' }} value="Captain"> Captain</option>
                        <option {{$member->memberLevel == 'Commander' ? 'selected' : '' }} value="Commander"> Commander</option>
                        <option {{$member->memberLevel == 'Lieutenant' ? 'selected' : '' }} value="Lieutenant"> Lieutenant</option>
                        <option {{$member->memberLevel == 'Ensign' ? 'selected' : '' }} value="Ensign"> Ensign</option>
                        <option {{$member->memberLevel == 'Chief Warrant Officer' ? 'selected' : '' }} value="Chief Warrant Officer"> Chief Warrant Officer</option>
                        <option {{$member->memberLevel == 'Chief Petty Officer' ? 'selected' : '' }} value="Chief Petty Officer"> Chief Petty Officer</option>
                        <option {{$member->memberLevel == 'Seaman' ? 'selected' : '' }} value="Seaman"> Seaman</option>
                        <option {{$member->memberLevel == 'Seaman Apprentice' ? 'selected' : '' }} value="Seaman Apprentice"> Seaman Apprentice</option>
                        <option {{$member->memberLevel == 'Seaman Recruit' ? 'selected' : '' }} value="Seaman Recruit"> Seaman Recruit</option>
                        <option {{$member->memberLevel == 'Private Contractor' ? 'selected' : '' }} value="Private Contractor"> Private Contractor</option>
                    </select>
                </div>
            </div>

             <hr>
                <div class="form-group">
                    <a href="{{route('admin.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>

    </div>
@endsection