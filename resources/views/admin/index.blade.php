@extends('layouts.dash')
@section('content')
 <!--
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'ADGS Backroom') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body> -->
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> DAFTAR MEMBER AD GAMES & SOFTWORKS</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary" href="{{ route('admin.create')}}"> Tambah Member </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama Anggota</th>
            <th width="100px">Jabatan</th>
            <th width="100px">Alamat</th>
            <th >Member Rank</th>
            <th width="400px">Action</th>
        </tr>
      </thead>
        <?php $i = 1; ?>
        @foreach ($member as $que) 
            <tr>
                <td><b>{{ $i++ }}.<b></td>
                <td>{{$que->memberNama}}</td>
                <td>{{$que->memberJabatan}}</td>
                <td>{{$que->memberAlamat}}</td>
                <td>{{$que->memberLevel}}</td>
                <td>
                    <form action="{{ route('admin.destroy',$que->id) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('admin.show', $que->id)}}">Lihat Member</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('admin.edit', $que->id)}}">Edit Member</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus Member</button>
                    </form>   
                </td>
            </tr>
        @endforeach
    </table>
    </div> <!--
    </body>

</html> -->

@endsection