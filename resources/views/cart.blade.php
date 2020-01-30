<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kassa</title>

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
        <h1 class="title content">Välkommen till kassan!</h1>
        <div class="flex-center position-ref full-height">

            <table class="table table-striped">
                <form action="/confirm" id="cart_form" method="POST">
                @csrf
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Namn</th>
                        <th scope="col">Smak</th>
                        <th scope="col">Produkttyp</th>
                        <th scope="col">Antal</th>
                        <th scope="col">Á Pris</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($product['product'] as $products)
                        @if($products['amount'] > 0)
                        <tr>
                            <th scope="row"> {{ $products['id'] }} </th>
                            <td> {{ $products['name'] }} </td>
                            <td> {{ $products['flavor'] }} </td>
                            <td><{{ $products['type'] }} </td>
                            <td>{{ $products['amount'] }}</td>
                            <td>{{ $products['price'] }}</td>
                            <td>{{ $products['price'] * $products['amount'] }}</td>
                        </tr>
                        @endif
                        @endforeach

                        <tr>
                            <td>Totalt för order: </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Bekräfta beställningen"></td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </body>
</html>
