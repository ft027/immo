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



                            <form action="{{route('save_step3')}}" method="post" class="register-form">

                                <div class="form-group">

                                <input type="text" name="year" placeholder="Baujahr"/>
                                </div>

                                    <div class="form-group">
                                <input type="text" name="living_area" placeholder="Wohnfläche"/>
                                    </div>

                                        <div class="form-group">
                                <input type="text" name="plot_area" placeholder="Grundstücksfläche"/>
                                        </div>

                                <div class="form-group">
                                    <div class="radio">

                                        <label>Aufzug</label>
                                    <input type="radio" id="mc" name="elevator" value="1">
                                    <label for="mc"> Ja</label><br>
                                    <input type="radio" id="vi" name="elevator" value="0">
                                    <label for="vi"> Nein</label><br>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="radio">

                                    <label>Garagen</label>
                                    <input type="radio" id="mc" name="garages" value="1">
                                    <label for="mc"> Ja</label><br>
                                    <input type="radio" id="vi" name="garages" value="0">
                                    <label for="vi"> Nein</label><br>

                                    </div>
                                </div>



                                <input type="hidden" name="street" value="{{$street}}"/>
                                <input type="hidden" name="house_number" value="{{$house_number}}"/>
                                <input type="hidden" name="zip" value="{{$zip}} " />
                                <input type="hidden" name="town" value="{{$town}}" />
                                <input type="hidden" name="type" value="{{$type}}" />
                                {{$type}}
                                {{$type}}
                                {{$type}}





                                <button type="submit">Jetzt bewerten</button>
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