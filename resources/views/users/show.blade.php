@extends('layouts.app')

@section('content')

<ul class="list-group">
    <li class="list-group-item">{{ $user->name }}</li>
    <li class="list-group-item">{{ $user->email }}</li>
    <li class="list-group-item">{{ $user->role->name }}</li>
    <li class="list-group-item">{{ $user->created_at }}</li>
</ul>

@endsection