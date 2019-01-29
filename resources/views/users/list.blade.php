@extends('layouts.app')

@section('content')

<div class="text-right">
    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users->items() as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td> <a href="{{ route('users.show', $user->id) }}">{{ $user->email }}</a></td>
            <td>{{ $user->role->name }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary d-inline-block">Edit User</a>
                <form method="POST" action="users/{{ $user->id }}" class="d-inline-block">
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
{{ $users->links() }}
</div>

@endsection