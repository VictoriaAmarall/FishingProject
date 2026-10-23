<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Fish</h1>
    <form action="{{ route('fish.update', $fish->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome do Peixe:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="color">Cor:</label>
        <input type="text" id="color" name="color" required>
        <br>
        <button type="submit">Alterar peixe</button>
    </form>
    <a href="{{ route('fish.index') }}">Back to List</a>
</body>
</html>