@extends('template')

@section('content')

<h1>Create a country</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'continent')) }}

    <div class="form-group">
        {{ Form::label('tara', 'Tara') }}
        {{ Form::text('tara', old('tara'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('capitala', 'Capitala') }}
        {{ Form::text('capitala', old('capitala'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('locuitori', 'Locuitori') }}
        {{ Form::number('locuitori', old('locuitori'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('presedinte', 'Presedinte') }}
        {{ Form::text('presedinte', old('presedinte'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the country!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
