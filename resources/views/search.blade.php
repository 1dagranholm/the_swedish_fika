@extends ('layout')

@section ('content')

<h1 class="page-header">Sökresultat</h1>   
<table class="table table-striped table-hover table-responsive-sm">
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
    @foreach ($product as $products) 
    <tbody>
        <tr>
            <th scope="row">{{ $products->id }}<input hidden readonly name="product[{{ $products->id }}][id]" value="{{ $products->id }}" /></th>
            <td>{{ $products->name }}<input hidden readonly name="product[{{ $products->id }}][name]" value="{{ $products->name }}" /></td>
            <td>{{ $products->flavor }}<input hidden readonly name="product[{{ $products->id }}][flavor]" value="{{ $products->flavor }}" /></td>
            <td>{{ $products->type }}<input hidden readonly name="product[{{ $products->id }}][type]" value="{{ $products->type }}" /></td>
            <td>{{ $products->price }} SEK<input hidden readonly name="product[{{ $products->id }}][price]" value="{{ $products->price }}" /></td>
            <td><input name="product[{{ $products->id }}][count]" max="10" min="0" type="number" value="0"></td>
        </tr>
    </tbody>
    @endforeach
    <tr>
        <td colspan="6" class="text-right bg-white"><input class="btn darker-pink-bgr" type="submit" value="Lägg till i kundkorgen"></td>
    </tr>
</table>

@endsection
