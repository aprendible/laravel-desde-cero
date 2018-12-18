@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre..." value="Jorge"><br>
        <input type="email" name="email" placeholder="Email..." value="jorge@aprendible.com"><br>
        <input name="subject" placeholder="Asunto..." value="Asunto de prueba"><br>
        <textarea name="content" placeholder="Mensaje...">Mensaje de prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection
