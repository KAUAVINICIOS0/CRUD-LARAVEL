<!DOCTYPE html>
<html>

<head>
    <title>Create Car</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <form method='POST' action='/create-car-action'>
        @csrf
        <input name='name' type='text' placeholder='Nivus' maxlength="100" pattern="[A-Za-zÀ-ÿ\s\-]+" required />
        <input name='color' type='text' placeholder='Preto' maxlength="50" pattern="[A-Za-zÀ-ÿ\s\-]+" required />
        <input name='price' type='text' placeholder='R$120.000' maxlength='20' required />

        <select name='car_brand_id'>
            @foreach ($carBrands as $carBrand)
                <option value="{{ $carBrand->id }}">{{ $carBrand->name }}</option>
            @endforeach
        </select>
        <input type='submit' value='send'>
    </form>
    <a href='{{ route('cars') }}'>Voltar</a>

</body>

</html>
