<!DOCTYPE html>
<html>
<head>
    <title>Continent App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('continent') }}">Continent Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('continent') }}">View All continent</a></li>
        <li><a href="{{ URL::to('continent/create') }}">Create a continent</a>
    </ul>
</nav>
@yield('content')
</div>
</body>

