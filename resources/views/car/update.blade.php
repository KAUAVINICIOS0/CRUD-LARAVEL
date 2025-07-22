<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de página HTML</title>
</head>
<body>
  <form method='POST' action='{{route('update-car-action', $car->id)}}'>
    @csrf
    @method('PUT')
    <input name='name' type='text' value='{{$car->name}}' required/>
        <input name='color' type='text' value='{{$car->color}}' required/>
        <input name='price' type='text' value='{{$car->price}}' required/>
        
        <select name='id_car_brand' required>
            @foreach ($carBrands as $carBrand)
                <option value="{{$car->id_car_brand}}">{{$carBrand->name}}</option>                
            @endforeach
        </select>
        <input type='submit' value='send'>
  </form>
  <a href='{{ url('/cars') }}'>Voltar</a>
</body>
</html>