@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

@section('title')
    my Homewise
@endsection


@section('content')
    <div class="row">

        <div class="col-md-3">
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



        <div class="col-md-3">
            <a href="/home">

                <div class="login-page">
                    <div class="form">
                        <div class="page-header"><h2>Basis-Bewertung</h2></div>

<p>ab 49 Euro</p>

                        <div class="img-box">

                            <img src="/images/basicCheck.jpg" class="img-responsive center-block"  alt="Basisbewertung">

                        </div>

                    </div>
                </div>


            </a>
        </div>



        <div class="col-md-1">
        </div>





        <div class="col-md-3">
            <a href="/home">

                <div class="login-page">
                    <div class="form">
                        <div class="page-header"><h2>City-Check</h2></div>

                        <p>ab 8,90 Euro/Monat</p>

                        <div class="img-box">

                            <img src="/images/cityCheck.jpg" class="img-responsive center-bloc"k  alt="Citycheck">

                        </div>

                    </div>
                </div>


            </a>
        </div>





    </div>











@endsection