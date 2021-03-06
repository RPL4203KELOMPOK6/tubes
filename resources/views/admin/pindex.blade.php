@extends('home.admin')

@section('content')
<div class="card-header">
    <h3 class="card-title"> List Data Pemasok</h3>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 35%; text-align: center">Nama</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">No. Handphone</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemasok as $key => $pemasok)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td> {{ $pemasok -> nama }} </td>
                                <td> {{ $pemasok -> email }} </td>
                                <td> {{ $pemasok -> phone }} </td>
                                <td style="display:flex;">
                                    <a href="/admin/datapemasok/{{$pemasok->id}}" class="btn btn-info btn-sm">show</a>
                                    <a href="/admin/datapemasok/{{$pemasok->id}}/edit" class="btn btn-default btn-sm">edit</a> 
                                    <form action="/admin/datapemasok/{{$pemasok->id}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                    </form> 
                                </td>       
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection       
{{-- <div class="card-body">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th style="width: 35%; text-align: center">Nama</th>
                <th style="text-align: center">Penyanyi</th>
                <th style="text-align: center">Harga</th>
                <th style="text-align: center">Deskripsi</th>
                <th style="text-align: center">Pemasok ID</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($album as $key => $album)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $album -> nama }} </td>
                    <td> {{ $album -> penyanyi }} </td>
                    <td> {{ $album -> harga }} </td>
                    <td> {{ $album -> deskripsi }} </td>
                    <td> {{ $album -> pemasok_id }} </td>
                    <td style="display:flex;">
                        <a href="/album/{{$album->id}}" class="btn btn-info btn-sm">show</a>
                        <a href="/album/{{$album->id}}/edit" class="btn btn-default btn-sm">edit</a> 
                        <form action="/album/{{$album->id}}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form> 
                    </td>       
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}