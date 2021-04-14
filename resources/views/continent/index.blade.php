@extends('template')

@section('content')

<h1>Country List</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tara</td>
            <td>Capitala</td>
            <td>Locuitori</td>
            <td>Presedinte</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($continent as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tara }}</td>
            <td>{{ $value->capitala }}</td>
            <td>{{ $value->locuitori }}</td>
            <td>{{ $value->presedinte }}</td>
            <td>
                <div class="inline">
                    <a class="mgr-5 btn btn-small btn-success" href="{{ URL::to('continent/' . $value->id) }}">Show Continent</a>
                    <a class="mgr-5 btn btn-small btn-info" href="{{ URL::to('continent/' . $value->id . '/edit') }}">Edit Continent</a>
                    {{ Form::open(array('url' => 'continent/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Continent', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
