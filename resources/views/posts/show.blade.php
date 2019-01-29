@extends('layouts.app')

@section('content')

<ul class="list-group">
    <li class="list-group-item">{{ $post->title }}</li>
    <li class="list-group-item">{{ $post->content }}</li>
</ul>

@endsection