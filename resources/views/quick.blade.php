@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

@section('title')
    Schnell-Bewertung
@endsection


@section('content')
    <div class="row">

        <div class="col-md-8">
            <a href="/quick/step1">

                <div class="login-page">
                    <div class="form">
                        <div class="page-header"><h2>Schnell-Bewertung</h2></div>

                        <p>
                            ab 5 Euro</p>

                        <div class="img-box">

                            <img src="/images/quickCheck.jpg" class="img-responsive center-block"  alt="Cinque Terre">

                        </div>

                    </div>
                </div>


            </a>
        </div>

        <div class="col-md-1">
        </div>








    </div>











@endsection