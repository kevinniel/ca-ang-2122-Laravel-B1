<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
</head>
<body>
    <h1>Edit</h1>
    <a href="{{ route("directory.index") }}">Retour</a>
    <form action="{{ route('directory.update') }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom : </label>
        <input type="hidden" name="id" value="{{ $directory->id }}">
        <input type="text" name="name" id="name" value="{{ $directory->name }}">
        <input type="submit" value="Modifier !">
    </form>
</body>
</html>