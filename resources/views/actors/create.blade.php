@extends('layouts/app')
@section('content')

<div class="p-3 mb-2 bg-dark text-white">
<div class="card-header">
<h3 style= "font-family: 'Anton', sans-serif;">Find Your Favorite Actor</h3>
</div>
</div></br></br>

<div class="container">
<form method="POST" action="{{ route('actors.store') }}">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="POST"/>

    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name" name="name"required></br>

        <button type="submit" class="btn btn-success ribbon">Send</button>
    </div>
</form>

<!--  Alert messages generate when users don't fill in the form -->
@if(count($errors))
    <div class="alert alert-primary" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    </div>
@endsection
