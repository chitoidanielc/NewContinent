@extends('template')

@section('content')

<h1>Edit {{ $continent->id }}</h1>

{{ Form::model($continent, array('route' => array('continent.update', $continent->id), 'method' => 'PUT')) }}

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

    {{ Form::submit('Edit the country!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection
