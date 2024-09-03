<!DOCTYPE html>
<html>
<head>
    <title>Editar Professor</title>
</head>
<body>
    <h1>Editar Professor</h1>
    <form action="{{ route('professores.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $professor->nome }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $professor->email }}" required>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
