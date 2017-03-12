@extends('layouts.master')
@extends('layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

@section('title')
    Schnell-Bewertung
@endsection


@section('content')
    <div class="row">

        <div class="col-md-8">


<div class="login-form">
                    <div class="form">
                        <div class="page-header"><h2>Schnell-Bewertung</h2></div>




                            <form action="{{route('save_step1')}}" method="post" class="register-form">


                                <input type="text" name="street" placeholder="Straße"/>
                                <input type="text" name="house_number" placeholder="Hausnr."/>
                                <input type="text" name="zip" placeholder="PLZ"/>
                                <input type="text" name="town" placeholder="Stadt"/>


                                <button type="submit">Weiter</button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">

                            </form>


                    </div>

</div>


        </div>



        <div class="col-md-1">

        </div>

        <div class="col-md-3">
            <a href="/quick/step1">

                <div class="login-page-quick">
                    <div class="form-quick">
                        <div class="page-header"><h2>Schnell-Bewertung</h2></div>

                        <p>
                            ab 5 Euro</p>


                    </div>

                </div>

            </a>
        </div>


    </div>











@endsection