
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />


    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-left"><div class="logo"> <div class="img-logo"> <img img-logo src="{{ asset('/images/hw.png') }}"></div></div></a>
                <a id="brand" class="navbar-brand" href="/"> Homewise</a>
            </div>



            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @else
                    <li><a href="{{route('logout')}}">Logout</a></li>



                @endif


            </ul>




        </div>
    </nav>

