@extends ('layout')

@section ('content')
<table class="table table-striped table-hover table-responsive-sm">
<form action="/confirm" id="cart_form" method="POST">
        @csrf
        <thead class="thead-dark">
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
            @if($products['count'] > 0)
            <tr>
                <th scope="row"> {{ $products['id'] }} </th>
                <td> {{ $products['name'] }} </td>
                <td> {{ $products['flavor'] }} </td>
                <td><{{ $products['type'] }} </td>
                <td>{{ $products['count'] }}</td>
                <td>{{ $products['price'] }}</td>
                <td>{{ $products['price'] * $products['count'] }}</td>
            </tr>
            @endif
            @endforeach

            <tr>
                <td>Totalt för order: </td>
                <td> {{ $total }} </td>
            </tr>

            <tr>
                <td><input type="submit" value="Bekräfta beställningen"></td>
            </tr>
        </tbody>
    </form>
</table>
@endsection
        
        
   

