<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produkter</title>

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
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Namn</th>
                        <th scope="col">Smak</th>
                        <th scope="col">Produkttyp</th>
                        <th scope="col">Pris</th>
                        <th scope="col">Antal</th>
                      </tr>
                    </thead>

                    <tbody>

                    @foreach ($product as $products)
                      <tr>
                        <th scope="row"><input name="product[{{ $products->id }}][id]" value="{{ $products->id }}" /></th>
                        <td><input name="product[{{ $products->id }}][name]" value="{{ $products->name }}" /></td>
                        <td><input name="product[{{ $products->id }}][flavor]" value="{{ $products->flavor }}" /></td>
                        <td><input name="product[{{ $products->id }}][type]" value="{{ $products->type }}" /></td>
                        <td><input name="product[{{ $products->id }}][price]" value="{{ $products->price }}" /></td>
                        <td><input name="product[{{ $products->id }}][amount]" max="10" min="0" type="number" value="0"></td>
                      </tr>
                    @endforeach
                        <tr>
                            <td><input type="submit" value="Lätt till i kundkorgen"></td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </body>
</html>
