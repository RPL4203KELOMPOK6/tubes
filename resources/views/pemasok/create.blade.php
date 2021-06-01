@extends('home.pemasok')

@section('content')
<div class="card-header">
    <h3 class="card-title">Input Pemasok</h3>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form role="form" action="/pemasok" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                    <label for="nama" class="col-sm-2 text-right control-label col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Cast">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Cast">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="password" class="col-sm-2 text-right control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="phone" class="col-sm-2 text-right control-label col-form-label">phone</label>
                    <div class="col-sm-9">    
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        <div class="col-sm-9">
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <form role="form" class="form-horizontal" action="/pemasok" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <label for="nama" class="col-sm-2 text-right control-label col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Cast">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Cast">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="password" class="col-sm-2 text-right control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group row">
                    <label for="phone" class="col-sm-2 text-right control-label col-form-label">phone</label>
                    <div class="col-sm-9">    
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        <div class="col-sm-9">
                    @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div> --}}
@endsection       
