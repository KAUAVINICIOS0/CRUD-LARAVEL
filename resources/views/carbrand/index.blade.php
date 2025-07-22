<html>

<head>
    <title>Cars</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Lista de Marcas de Carros</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ano de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($car_brands as $car_brand)
                <tr>
                    <td>{{ $car_brand->name }}</td>
                    <td>{{ $car_brand->creation_year }}</td>
                    <td>
                        <a href="{{ route('update-car-brand', $car_brand->id) }}" class="button">Editar Marca</a>
                        <form action="{{ route('delete-car-brand', $car_brand->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button"
                                onclick="return confirm('Tem certeza que deseja excluir esta marca?')">Excluir
                                Marca</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/create-car-brand') }}" class="button">Criar Nova Marca</a>
    <a href="{{ route('home') }}" class="button">Voltar</a>

</body>

</html>
