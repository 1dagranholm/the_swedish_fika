<!doctype html>
<html lang="en">
  <head>
    <title>The Swedish Fika</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 pink-bgr">
          <a class="navbar-brand" href="/">
            <img class="topmenu-logo" src="img/the_swedish_fika_logo.svg" alt="Hem" height="50" title="The Swedish Fika" aria-label="The Swedish Fika hemsida">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="/products">Produkter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/orders">Min order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cart">Kundkorg</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="{{url('/search')}}" method="post">
          {{ csrf_field() }}
              <input class="form-control mr-sm-2" type="search" placeholder="Sök" name="searchInput" required>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sök</button>
          </form>
        </div>
      </nav>

 @yield ('content')

 <footer class="container-fluid text-white-50 bg-dark mt-5 py-5 fixed-bottom">
    <div class="row">
      <div class="col-12 text-center">
        <p>Copyright: <a href="mailto:granholm.ida@gmail.com" class="text-white">Ida Granholm</a>, Johan Abde, Jonna Fleischanderl & Per Egertun, 2020.</p>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/js/luhnar.js"></script>
  <script src="/js/function.js"></script>
</body>
</html>