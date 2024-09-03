<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Disciplina</title>
</head>
<body>
    <h1>Detalhes da Disciplina</h1>
    <p>ID: {{ $disciplina->id }}</p>
    <p>Nome: {{ $disciplina->nome }}</p>
    <a href="{{ route('disciplinas.index') }}">Voltar para a lista</a>
</body>
</html>
