@extends ('layout')

@section ('content')

<!-- THIS WILL CATCH ERRORS FROM THE VALIDATION IN OrderController@cart
    AND DISPLAY THEM (FOR DEBUGGING) 
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

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
        <div class="alert alert-danger">
            <ul>
                <li>Du måste lägga en produkt i kundkorgen innan du kan lägga en order   :)</li>
            </ul>
        </div>
        <tr>
            <td class="bg-dark text-white font-weight-bold" colspan="6">Totalt för order: </td>
            <td class="bg-dark text-white font-weight-bold" colspan="1"> 0 SEK </td>
        </tr>
        <tr>
            <td colspan="7" class="text-right bg-white"><input class="btn darker-pink-bgr" type="submit" value="Bekräfta order"></td>
        </tr>
    </tbody>
</form>
</table>

@endsection
        
        
   

