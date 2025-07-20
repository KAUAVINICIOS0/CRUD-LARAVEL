<html>
<head>
  <title>Create</title>
</head>

<body>
  <h1>Criando a Marca do Carro</h1>
  <form method='POST' action="/create-car-brand-action">
    @csrf
    <input name='name' type="text" placeholder="Ford"/>
    <input name='creation_year'type="text" placeholder="yyyy-mm-dd"/>
    <input type='submit' value='send'/>
  </form>
   <a href='{{url('/car-brands')}}'>Voltar</a>
</body>

</html>