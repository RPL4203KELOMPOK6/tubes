@extends('home.pemasok')

@section('content')
<div class="card-header">
    <h3 class="card-title">Input Pemasok</h3>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <form role="form" action="/pemasok/{{$pemasok->id}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$pemasok->nama}}" placeholder="Nama Cast">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$pemasok->email}}" placeholder="Umur Cast">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{$pemasok->password}}" placeholder="Bio">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="phone">No. Handphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$pemasok->phone}}" placeholder="Bio">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <!-- /.card-body -->
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
        
    </div>
</div>
@endsection       