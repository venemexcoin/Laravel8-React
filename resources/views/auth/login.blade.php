@extends('layouts.login')

@section('title_base')
    Login
@endsection


@section('content')
    <section>
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="inputBx">
                        <input id="email" type="email" placeholder="Username"
                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                        required autocomplete="email" autofocus>

                        <img src="{{ asset('assets/img/login/user.png')}}" alt="">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
                    <div class="inputBx">
                        <input  id="password" type="password" placeholder="password"
                        @error('password') is-invalid @enderror" name="password" 
                        required autocomplete="current-password">

                        <img src="{{ asset('assets/img/login/lock.png')}}" alt="">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    </div>
                    <label class="remeber">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remanber Me
                    </label>
                    <div class="inputBx">
                        <input type="submit" value="login">
                    </div>
                    @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
                </form>
                
            </div>
        </div>

@endsection