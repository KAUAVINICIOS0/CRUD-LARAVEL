<!DOCTYPE html>
<html>

<head>
    <title>Título da Página</title>
</head>

<body>
    <h1>Carros</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cor</th>
                <th>Preço</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td>{{$car->name}}</td>
                    <td>{{$car->color}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{App\Models\CarBrand::find($car->id_car_brand)->name}}</td>
                    <td><a href='{{route('update-car', $car->id)}}'>Editar um carro</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <a href='{{route('home')}}'>Home</a>
    <a href="{{route('create-car')}}">Criar um carro</a>
</body>

</html>
