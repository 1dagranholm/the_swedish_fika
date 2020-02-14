@extends ('layout')

@section ('content')

<div class="jumbotron jumbotron-fluid text-dark pt-0 welcome-img" id="header-image">
    <div class="weather-wrapper">
        <img src="https://openweathermap.org/img/wn/{{$weather['weather'][0]['icon']}}@2x.png">
        <p class="lead"> Det är just nu <strong>{{$weather['weather'][0]['description']}}</strong> och <strong>{{floor($weather['main']['temp'])}}</strong> grader ute i <strong>Stockholm.</strong><br>

        @if($weather['main']['temp'] < 5)
            Välkommen in på en värmande kopp kaffe!
        @elseif($weather['main']['temp'] > 15)
            Välkommen in på en svalkande dryck!
        @endif
        
        </p> 
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <img
                    id="welcome-logo"
                    src="img/the_swedish_fika_logo_white.svg"
                    alt="Hem"
                    title="The Swedish Fika"
                    aria-label="The Swedish Fika"
                    class="img-fluid width: 100% \9;"
                    />
                </div>
                <div class="col-12 text-center">
                    <a href="/products" class="btn darker-pink-bgr mt-3">Köp ditt fika här <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
