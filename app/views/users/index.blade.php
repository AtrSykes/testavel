@extends('layouts.default')

@section('content')
<h1>All Users</h1>
@if ($users->count() == 0)
  <h2>Oops, no users</h2>
@endif

@foreach ($users as $user)
  <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
@endforeach
@stop
