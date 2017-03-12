@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

<div class="login-page">
    <div class="form">
        <div class="page-header"><h2>Login</h2></div>
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




        <form action="{{route('login')}}" class="login-form" method="post">



            <input type="text" name="email" placeholder="email"/>
            <input type="password"  name="password" placeholder="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>

    </div>
</div>