@extends('layout.layout')

@section('title')
    Create Directory
@endsection

@section('main')
    <h1>Create</h1>
    <a href="{{ route("directory.index") }}">Retour</a>
    <form action="{{ route('directory.store') }}" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Créer !">
    </form>
@endsection