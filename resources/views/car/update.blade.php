<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de página HTML</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <form method='POST' action='{{ route('update-car-action', $car->id) }}'>
        @csrf
        @method('PUT')
        <input name='name' type='text' value='{{ $car->name }}' maxlength="100" pattern="[A-Za-zÀ-ÿ\s\-]+" required/>
        <input name='color' type='text' value='{{ $car->color }}' maxlength="100" pattern="[A-Za-zÀ-ÿ\s\-]+" required />
        <input name='price' type='text' value='{{ $car->price }}' maxlength="20" required />

        <select name="id_car_brand" required>
            @foreach ($carBrands as $brand)
                <option value="{{ $brand->id }}" {{ $car->id_car_brand == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        <input type='submit' value='send'>
    </form>
    <a href='{{ url('/cars') }}'>Voltar</a>
</body>

</html>
