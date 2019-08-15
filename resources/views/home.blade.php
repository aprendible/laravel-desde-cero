@extends('layout')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, quasi non perspiciatis corrupti a repellendus numquam dolore dolorum corporis omnis, porro velit aut ut nostrum vel cumque fugiat labore mollitia!</p>
            <a class="btn btn-lg btn-block btn-primary"
                href="{{ route('contact') }}"
            >Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary"
                href="{{ route('projects.index') }}"
            >Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
</div>

@endsection
