<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
</head>
<body>
    <h1>Show</h1>
    <a href="{{ route("directory.index") }}">Retour</a>
    <ul>
        <li>{{ $directory->id }}</li>
        <li>{{ $directory->name }}</li>
        <li>{{ $directory->created_at }}</li>
        <li>{{ $directory->updated_at }}</li>
    </ul>
</body>
</html>