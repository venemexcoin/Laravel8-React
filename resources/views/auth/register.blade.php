@extends('layouts.login')

@section('title_base')
Register
@endsection


@section('content')
    <section>
        <div class="box">
            <div class="form">
                <h2>Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="inputBx">
                        <input id="name" type="text" placeholder="Username" 
                        @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                         required autocomplete="name" autofocus>

                        <img src="{{ asset('assets/img/login/user.png')}}" alt="">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputBx">
                        <input id="email" type="email" placeholder="Email"
                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                        required autocomplete="email" autofocus>

                        <img src="{{ asset('assets/img/login/email.png')}}" alt="">

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

                    <div class="inputBx">
                        <input  id="password-confirm" type="password" placeholder="Confirm Password"
                        name="password_confirmation" required autocomplete="new-password">

                        <img src="{{ asset('assets/img/login/lock.png')}}" alt="">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="inputBx">
                        <input type="submit" value="Register">
                    </div>
                </form>
                
            </div>
        </div>
  
@endsection        