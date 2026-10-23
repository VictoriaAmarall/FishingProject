<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
</head>
<body>
<h1>Tipos Cadastrados</h1>

<a href="{{ url('/type/create') }}">+ Criar Tipo</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td><a href="/type/edit/{{ $type->id }}">Editar</a></td>
                <td><a href="/type/delete/{{ $type->id }}">Apagar</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Nenhum tipo cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>