<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
    <style>
        tr, th { padding: 10px;}
    </style>
</head>
<body>
    <h1>Directory</h1>
    <a href="{{ route("directory.create") }}">Creer</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                {{-- <th>creation</th> --}}
                {{-- <th>modification</th> --}}
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($directories as $directory)
                <tr>
                    <td>{{ $directory->id }}</td>
                    <td>{{ $directory->name }}</td>
                    {{-- <td>{{ $directory->created_at }}</td> --}}
                    {{-- <td>{{ $directory->updated_at }}</td> --}}
                    <td>
                        <a href="{{ route('directory.show', $directory->id) }}">Voir</a>
                        <a href="{{ route('directory.edit', $directory->id) }}">Modifier</a>
                        <form action="{{ route('directory.destroy') }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="id" value="{{ $directory->id }}">
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>