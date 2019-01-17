@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>
    <ul>
        @forelse($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>

@endsection
