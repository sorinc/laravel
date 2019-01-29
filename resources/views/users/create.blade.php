@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Create User</h1>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label> 
                <div class="col-8">
                    <input id="name" name="name" type="text" class="form-control" required value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-4 col-form-label">Role</label> 
                <div class="col-8">
                <select id="role" name="role_id" class="custom-select" required>
                    <option value="">Select Role</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if (old('role_id')==$role->id) selected @endif >{{ $role->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Confirm Password</label> 
                <div class="col-8">
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            @include('errors')
        </form>
    </div>
</div>

@endsection