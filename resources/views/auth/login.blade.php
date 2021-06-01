@extends('layouts.app')

@section('content')
<section class="sign-in container-fluid" >
    <div class="row" style="height: 100vh;">
        <div class="col-md-4 primary-bg d-md-flex d-none " >
            <div class=" align-self-center " >
            <img class=" w-auto" src="assets/img/sign_in_hero.png"   alt="">
        </div>

        </div>
        <div class="col-md-8 my-auto">
            <div class="w-50 m-auto">
                <h3 class="header-color form-font font-weight-lighter">Sign In To Alboem</h3>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="email">Email address</label>
                    <input type="email" class="form-control mt-4 py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <a href="#"><small id="emailHelp" class="form-text form-font text-right my-3" style="color: #00B8C7;">Lupa Password ?</small></a>
                </div>
                <div class="form-group">
                    <div class="input-container">
                        {{-- <img class="key-icon" src="assets/img/pass-icon.png" alt="" > --}}
                        <input placeholder="Password" type="password" class="form-control  py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" >
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="form-text">Belum Punya Akun? <a href="registrasi" class="font-weight-bold" style="color: #00B8C7">Daftar Sekarang</a></small>
                    <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC;">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
    <script src="{{asset('../assets/js/main.js')}}"></script>
@endsection