@extends ('layout')

@section ('content')
<table class="table table-striped table-hover table-responsive-sm">
    <form action="/cart" id="product_form" method="POST">
        @csrf
            <thead class="thead-dark">
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
                <td><input readonly name="product[{{ $products->id }}][name]" value="{{ $products->name }}" /></td>
                <td><input readonly name="product[{{ $products->id }}][flavor]" value="{{ $products->flavor }}" /></td>
                <td><input readonly name="product[{{ $products->id }}][type]" value="{{ $products->type }}" /></td>
                <td><input readonly name="product[{{ $products->id }}][price]" value="{{ $products->price }}" /></td>
                <td><input name="product[{{ $products->id }}][count]" max="10" min="0" type="number" value="0"></td>
                </tr>
            @endforeach
                <tr>
                    <td><input type="submit" value="Lätt till i kundkorgen"></td>
                </tr>
            </tbody>
    </form>
</table>
@endsection
        
        
   

