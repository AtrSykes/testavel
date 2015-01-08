@extends('layouts.default')

@section('content')
    <h1> Create new User</h1>

    {{ Form::open(['route' => 'users.store']) }}

        <div>

        {{ Form::label('username', 'Username:') }}
        {{ Form::input('username', 'username') }}

        </div>
        <div>

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
        </div>

        <div>{{Form::submit('Do it') }} <div>

    {{ Form::close() }}
@stop
