<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Professor</title>
</head>
<body>
    <h1>Detalhes do Professor</h1>
    <p>ID: {{ $professor->id }}</p>
    <p>Nome: {{ $professor->nome }}</p>
    <p>Email: {{ $professor->email }}</p>
    <a href="{{ route('professores.index') }}">Voltar para a lista</a>
</body>
</html>
