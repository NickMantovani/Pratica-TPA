<!DOCTYPE html>
<html>
<head>
    <title>Criar Disciplina</title>
</head>
<body>
    <h1>Criar Disciplina</h1>
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
