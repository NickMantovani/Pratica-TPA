<!DOCTYPE html>
<html>
<head>
    <title>Criar Professor</title>
</head>
<body>
    <h1>Criar Professor</h1>
    <form action="{{ route('professores.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
