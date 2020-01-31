@extends ('layout')

@section ('content')

<h1 class="page-header">Kundkorg</h1>
<table class="table table-striped table-hover table-responsive-sm">
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
        @if($products['count'] > 0)
        <tr>
            <th readonly scope="row">{{ $products['id'] }}<input hidden name="product[{{ $products['id'] }}][id]" value="{{ $products['id'] }}" /></th>
            <td>{{ $products['name'] }}<input hidden disabled name="product[{{ $products['id'] }}]['name']" value="{{ $products['name'] }}" /></td>
            <td>{{ $products['flavor'] }}<input hidden disabled name="product[{{ $products['id'] }}]['flavor']" value="{{ $products['flavor'] }}" /></td>
            <td>{{ $products['type'] }}<input hidden disabled name="product[{{ $products['id'] }}]['type']" value="{{ $products['type'] }}" /></td>
            <td><input name="product[{{ $products['id'] }}][count]" max="10" min="0" type="number" value="{{ $products['count'] }}"></td>
            <td>{{ $products['price'] }}<input hidden disabled name="product[{{ $products['id'] }}]['price']" value="{{ $products['price'] }} SEK" /></td>
            <td>{{ $products['price'] * $products['count'] }} SEK</td>
        </tr>
        @endif
        @endforeach
        <tr>
            <td class="bg-dark text-white font-weight-bold" colspan="6">Totalt för order: </td>
            <td class="bg-dark text-white font-weight-bold" colspan="1"> {{ $total }} SEK </td>
        </tr>
        <tr>
            <td colspan="7" class="text-right bg-white"><input class="btn darker-pink-bgr" type="submit" value="Bekräfta order"></td>
        </tr>
    </tbody>
</form>
</table>

@endsection
        
        
   

