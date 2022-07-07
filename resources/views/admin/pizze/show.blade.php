@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $pizza->nome }}</h2>
        <p>Prezzo: {{ $pizza->prezzo }} &euro;</p>
        <p>Ingredienti: {{ $pizza->ingredienti }}</p>
        @if ($pizza->vegetariano)
            <p>Vegetariano: Si</p>
        @else
            <p>Vegetariano: No</p>
        @endif
        <a class="btn btn-success" href="{{ route('admin.pizza.index', $pizza) }}">Torna indietro</a>
        <a class="btn btn-primary" href="{{ route('admin.pizza.edit', $pizza) }}">Edit</a>
        <form class="d-inline" method="POST"
            onsubmit="return confirm('Confirm the action? Oance deleted it can\'t be restored')"
            action="{{ route('admin.pizza.destroy', $pizza) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
    </div>
@endsection
