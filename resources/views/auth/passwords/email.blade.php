@extends('layouts.login')

@section('title_base')
    Reset password
@endsection


@section('content')
    <section>
        <div class="box">
            <div class="form">
                <h2>Reset Password</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="inputBx">
                        <input id="email" type="email" placeholder="E-Mail Address"
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
                        <input type="submit" value="Reset">
                    </div>
                   
                </form>
                
            </div>
        </div>
    </section>
   
@endsection    