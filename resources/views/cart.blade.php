<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <table class="table table-striped">
                <form action="/cart" id="product_form" method="POST">
                @csrf
                    <thead>
                    <tr><th><h1>Välkommen till kassan!</h1></th></tr>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Flavors</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>

                    <tbody>

                    @foreach ($product as $products)
                      <tr>
                        <th scope="row"><input name="product[{{ $products->id }}][id]" value="{{ $products->id }}" /></th>
                        <td><input name="product[{{ $products->id }}][{{ $products->name }}]" value="{{ $products->name }}" /></td>
                        <td><input name="product[{{ $products->id }}][{{ $products->flavor }}]" value="{{ $products->flavor }}" /></td>
                        <td><input name="product[{{ $products->id }}][{{ $products->type }}]" value="{{ $products->type }}" /></td>
                        <td><input name="product[{{ $products->id }}][{{ $products->price }}]" value="{{ $products->price }}" /></td>
                      </tr>
                    @endforeach
                        <tr>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </body>
</html>
