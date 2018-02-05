@extends('layouts.app')

@section('content')
    
    <div class="c-wrap--center c-form-wrapper">
        <h4 class="c-form--title">Register</h4>

        <form method="POST" action="{{ route('register') }}">
             {{ csrf_field() }}
            <div class="o-input">
                <input id="username" type="text" class="o-input--nostyle o-input--borderbottom" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="o-input">
                 <input id="email" type="email" class="o-input--nostyle o-input--borderbottom" name="email" value="{{ old('email') }}" required placeholder="E-mail Address">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
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

            <div class="o-input">
                <input id="password-confirm" type="password" class="o-input--nostyle o-input--borderbottom" name="password_confirmation" required placeholder="Confirm Password">
            </div>

            <div class="o-input">
                <button type="submit" class="o-btn--primary">Register</button>
            </div>

            <div class="o-input">
                 <a href="{{ route('login') }}" class="o-links">Log In</a></li>
            </div>
                
        </form>
    </div>

@endsection
