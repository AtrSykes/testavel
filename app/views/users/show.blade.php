@extends('layouts.default')

@section('content')
		<h1> Hello, {{$user->username}}</h1>
		<p> Your favourite colour is {{$user->colour}}<p>

		<a href={{URL::to('/users/'.$user->username.'/edit')}}>edit</a>
@stop
