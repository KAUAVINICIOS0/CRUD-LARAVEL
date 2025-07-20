<html>

<head>
    <title>Update</title>
</head>

<body>
    <h1>Editando a marca do carro</h1>
    <form method="POST" action="{{ route('update-car-brand-action', $carBrand->id) }}">
        @csrf
        @method('PUT')
        
        <input type="text" name="name" value="{{ $carBrand->name }}" required />
        <input type="text" name="creation_year" value="{{ $carBrand->creation_year }}" required />
        <input type="submit" value='send'>
    </form>

    <a href='{{ url('/car-brands') }}'>Voltar</a>
</body>

</html>
