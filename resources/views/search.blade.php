@extends ('layout')

@section ('content')
        <h1>Sökresultat</h1>
        
        <table class="table table-striped table-hover table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Namn</th>
                <th scope="col">Smaker</th>
                <th scope="col">Produkttyp</th>
                <th scope="col">Pris</th>
                <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($product as $products) 
            <tbody>
                <tr>
                <th scope="row">{{ $products->id }}</th>
                <td>{{ $products->name }}</td>
                <td>{{ $products->flavor }}</td>
                <td>{{ $products->type }}</td>
                <td>{{ $products->price }} SEK</td>
                <td><a href="#" class="btn btn-primary">Köp</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
@endsection
