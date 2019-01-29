@extends('layouts.app')

@section('content')

<div class="text-right">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Published</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts->items() as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td> <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
            <td>{{ $post->posted_at }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary d-inline-block">Edit post</a>
                <form method="POST" action="posts/{{ $post->id }}" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-right">
{{ $posts->links() }}
</div>

@endsection