@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
