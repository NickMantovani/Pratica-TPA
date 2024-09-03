<!DOCTYPE html>
<html>
<head>
    <title>Editar Disciplina</title>
</head>
<body>
    <h1>Editar Disciplina</h1>
    <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $disciplina->nome }}" required>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
