@extends ('layout')

@section ('content')


<div class="jumbotron jumbotron-fluid text-dark pt-0 welcome-img" id="header-image">
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
