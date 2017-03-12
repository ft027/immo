@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

@section('title')
    Welcome!
@endsection


@section('content')

    <div class="login-page">
        <div class="form">
            <div class="page-header"><h2>Home Page</h2></div>

            <p>
                You are logged in!</p>



        </div>
    </div>


@endsection