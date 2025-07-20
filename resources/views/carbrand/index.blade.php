<html>

<head>
    <title>Cars</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a.button:hover {
            background-color: #0056b3;
        }
    </style>
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
                    <td><a href="{{ route('update-car-brand', $car_brand->id) }}" class="button">Editar Marca</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/create-car-brand') }}" class="button">Criar Nova Marca</a>

</body>

</html>
