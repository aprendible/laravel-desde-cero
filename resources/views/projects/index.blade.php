@extends('layout')

@section('title', 'Projects')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">@lang('Projects')</h1>
        @auth
            <a class="btn btn-primary"
                href="{{ route('projects.create') }}"
            >Crear proyecto</a>
        @endauth
    </div>
    <p class="lead text-secondary">Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <ul class="list-group">
        @forelse($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center"
                    href="{{ route('projects.show', $project) }}"
                >
                    <span class=" font-weight-bold">
                        {{ $project->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y')}}
                    </span>
                </a>
            </li>
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No hay proyectos para mostrar
            </li>
        @endforelse
        {{ $projects->links() }}
    </ul>
</div>
@endsection
