@extends('layouts.default')

@section('content')
    <h1> Create new User</h1>

    {{ Form::open(['method' => 'PUT', 'route' => ['users.update', $user->username]]) }}

        <div>
        {{ $user->username }}
        </div>
        <div>

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
				{{ $errors->first('password') }}
        </div>

        <div>

        {{ Form::label('colour', 'Favourite Colour:') }}
        {{ Form::input('colour', 'colour', 'blue') }}
        <div>
				
				<div>{{Form::submit('Update') }} <div>

    {{ Form::close() }}
@stop
