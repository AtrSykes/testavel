@extends('layouts.default')

@section('content')
    <h1> Create new User</h1>

    {{ Form::open(['route' => 'users.store']) }}

        <div>

        {{ Form::label('username', 'Username:') }}
        {{ Form::input('username', 'username') }}
				{{ $errors->first('username') }}
        </div>
        <div>

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
				{{ $errors->first('password') }}
        </div>

        <div>

        {{ Form::label('colour', 'Favourite Colour:') }}
        {{ Form::input('colour', 'colour') }}
        <div>
				
				<div>{{Form::submit('Register') }} <div>

    {{ Form::close() }}
@stop
