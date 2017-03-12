@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

@if(count($errors)>0)

    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach

@endif



<div class="login-page">
    <div class="form">
        <div class="page-header"><h2>Register</h2></div>

        @if(count($errors)>0)
            <div class="alert alert-danger">
                <strong>Error</strong>

                @foreach($errors->all() as $error)
                    <div class="text-left">
                        <li>{{$error}}</li>
                    </div>
                @endforeach
            </div>
        @endif
        <form action="{{route('register')}}" method="post" class="register-form">
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="email" placeholder="email address"/>
            <input id="password" type="password" name="password" placeholder="password"/>
            <input id="password-confirm" type="password" name="password_confirmation" placeholder=" repeat password"/>
            <button type="submit">create</button>
            <p class="message">Already registered? <a href="{{route('login')}}">Login</a></p>
            <input type="hidden" name="_token" value="{{ Session::token() }}">

        </form>
    </div>
</div>