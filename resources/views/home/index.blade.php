<!DOCTYPE html>
<html>
<head>
  <title>Título da Página</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <h1>🚗 Loja de Carros DDK</h1>

  <div class="actions">
    <a href="{{ route('car-brands') }}" class="button">🏷️ Marcas de Carros</a>
    <a href="{{ route('cars') }}" class="button">🚘 Listar Carros</a>
</body>
</html>