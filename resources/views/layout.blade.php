<!doctype html>
<html lang="en">
  <head>
    <title>The Swedish Fika</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <!-- Fontawesome 4 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

  <body>
      <nav class="navbar navbar-expand-lg navbar-light mb-5 light-pink-bgr">
          <a class="navbar-brand" href="/">
            <img class="topmenu-logo" src="img/the_swedish_fika_logo_donut.svg" alt="Hem" height="40" title="The Swedish Fika" aria-label="The Swedish Fika hemsida">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-dark" href="/products"><i class="fa fa-heart" aria-hidden="true"></i> Produkter</a>
              </li>
            </ul>
          <form class="form-inline my-2 my-lg-0 ml-4" action="{{url('/search')}}" method="post">
          {{ csrf_field() }}
              <input class="form-control mr-sm-2" type="search" placeholder="Sök" name="searchInput">
              <button class="btn darker-pink-bgr my-2 my-sm-0" type="submit">Sök</button>
          </form>
        </div>
      </nav>

      <div class="container-fluid">
          <div class="row no-gutters">
              <div class="col-12">

         @yield ('content')
              
              </div>
          </div>
      </div>

 <footer class="container-fluid text-white-50 bg-dark mt-5 py-5 fixed-bottom">
    <div class="row">
      <div class="col-12 text-center">
        <p>Copyright: <a href="mailto:granholm.ida@gmail.com" class="text-white">Ida Granholm</a>, 
          <a href="mailto:abdejohan@gmail.com" class="text-white">Johan Abde</a>, 
          <a href="mailto:jonnaliesel@gmail.com" class="text-white">Jonna Fleischanderl</a> & 
          <a href="mailto:per_egertun@hotmail.com" class="text-white">Per Egertun</a>, Chas Academy 2020.</p>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/functions.js"></script>
</body>
</html>