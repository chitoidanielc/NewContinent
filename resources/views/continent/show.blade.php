@extends('template')

@section('continent')

<h1>Showing {{ $continent->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $continent->id }}</h2>
        <p>
            <strong>Tara:</strong> {{ $continent->tara }}<br>
            <strong>Capitala:</strong> {{ $continent->capitala }}<br>
            <strong>Locuitori:</strong> {{ $continent->locuitori }}<br>
            <strong>Presedinte:</strong> {{ $continent->presedinte }}<br>
        </p>
    </div>
@endsection
