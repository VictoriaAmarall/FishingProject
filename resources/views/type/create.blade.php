<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tipo</title>
</head>
<body>
<h1>Criar Tipo</h1>

<a href="{{ url('/type') }}">← Voltar</a>

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('/type') }}" method="POST">
    @csrf

    <p>
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </p>

    <button type="submit">Salvar</button>
</form>
</body>
</html>