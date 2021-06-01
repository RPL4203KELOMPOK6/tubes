@extends('layouts.app')

@section('content')
<div class="row" style="height: 100vh;">
    <div class="col-md-4 primary-bg d-md-flex d-none " >
        <div class=" align-self-center " >
        <img class=" w-auto" src="assets/img/sign_up_hero.png"   alt="">
    </div>

    </div>
    <div class="col-md-8 my-auto">
        <div class="w-50 m-auto">
            <h3 class="header-color form-font font-weight-lighter">Sign up To Alboem</h3>
            <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC;"><img src="assets/img/icongoogle.png" alt=""> Sign up with google</button>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <hr />
            <a class="form-text form-font text-center my-3">or</a>
            <hr />
            <div class="form-group">
                <div class="input-container">
                    {{-- <img class="user-icon" src="assets/img/user-icon.jpg" alt="" > --}}
                    <input placeholder="Username" type="name" class="form-control  py-4  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
              </div>
            <div class="form-group">
            <div class="form-group">
                <div class="input-container">
                    {{-- <img class="email-icon" src="assets/img/email-icon.png" alt="" > --}}
                    <input placeholder="Email" type="email" class="form-control  py-4 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-container">
                    {{-- <img class="key-icon" src="assets/img/pass-icon.png" alt="" > --}}
                    <input placeholder="Password" type="password" class="form-control  py-4 @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                    {{-- <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" > --}}
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                
                <div class="input-container">
                    <img class="key-icon" src="assets/img/pass-icon.png')}}" alt="" >
                    <input placeholder="Verify Password" type="password" class="form-control py-4" id="password-input" name="password_confirmation" required autocomplete="new-password">
                    {{-- <img class="visibility-icon cursor-pointer" src="assets/img/visibility.png" alt="" > --}}
                </div>
            </div>

            <div>
                <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC; width: 625px;">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
    </div> 
</div>
@endsection