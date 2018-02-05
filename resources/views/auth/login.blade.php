@extends('layouts.app')

@section('content')
    
    <div class="c-wrap--center c-form-wrapper">
        <h4 class="c-form--title">Login</h4>

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            
            <div class="o-input">
                <input id="email" type="text" class="o-input--nostyle o-input--borderbottom" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="o-input">
                <input id="password" type="password" class="o-input--nostyle o-input--borderbottom" name="password" required placeholder="Password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <!-- <div class="o-input">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div> -->

            <div class="o-input">
                <a class="o-links" href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>

            <div class="o-input">
                <button type="submit" class="o-btn--primary">Login</button>
            </div>

            <div class="o-input">
                 <a href="{{ route('register') }}" class="o-links">Register</a></li>
            </div>
        </form>
    </div>


@endsection
