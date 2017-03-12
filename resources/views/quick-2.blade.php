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



                            <form action="{{route('save_step2')}}" method="post" class="register-form">


                                <fieldset>
                                    <input type="radio"  name="type" value="etw">
                                    <label for="mc">Eigentumswohnung</label><br>
                                    <input type="radio"  name="type" value="efh">
                                    <label for="vi">Einfamilienhaus</label><br>
                                    <input type="radio"  name="type" value="mfh">
                                    <label for="ae">Mehfamilienhaus</label>
                                </fieldset>


                                <input type="hidden" name="street" placeholder="Straße" value="{{$street}}"/>
                                <input type="hidden" name="house_number" placeholder="Hausnr." value="{{$house_number}}"/>
                                <input type="hidden" name="zip" placeholder="PLZ" value="{{$zip}} " />
                                <input type="hidden" name="town" placeholder="Stadt" value="{{$town}}" />



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