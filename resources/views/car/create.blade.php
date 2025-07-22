<!DOCTYPE html>
<html>

<head>
    <title>Create Car</title>
</head>

<body>
    <form method='POST' action='/create-car-action'>
        @csrf
        <input name='name' type='text' placeholder='Nivus'/>
        <input name='color' type='text' placeholder='Preto'/>
        <input name='price' type='text' placeholder='R$120.000'/>
        
        <select name='id_car_brand'>
            @foreach ($carBrands as $carBrand)
                <option value="{{$carBrand->id}}">{{$carBrand->name}}</option>                
            @endforeach
        </select>
        <input type='submit' value='send'>
    </form>
    <a href='{{route('cars')}}'>Voltar</a>
</body>

</html>
