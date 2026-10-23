<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Peixes Cadastrados</h1>

<a href="{{ url('/fish/create') }}">+ Criar Peixe</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cor</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($fishes as $fish)
            <tr>
                <td>{{ $fish->id }}</td>
                <td>{{ $fish->name }}</td>
                <td>{{ $fish->color }}</td>
                <td>{{ $fish->type_id }}</td>
                <td><a href="/fish/edit/{{ $fish->id }}">Editar</a></td>
                <td><a href="/fish/delete/{{ $fish->id }}">Apagar</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Nenhum peixe cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>
