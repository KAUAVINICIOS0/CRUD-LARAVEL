<!DOCTYPE html>
<html>

<head>
    <title>Título da Página</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <h1>Carros</h1>
    <table>
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Preço</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->carBrand()->first()->name }}</td>
                    <td>
                        <a href='{{ route('update-car', $car->id) }}'>Editar um carro</a>
                        <form method="POST" action="{{ route('delete-car', $car->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type='submit'
                                onclick="return confirm('Tem certeza que deseja excluir este carro?')">Deletar
                                Carro</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href='{{ route('home') }}'>Home</a>
    <a href="{{ route('create-car') }}">Criar um carro</a>
</body>

</html>
