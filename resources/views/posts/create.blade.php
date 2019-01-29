@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Create Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-4 col-form-label">Title</label> 
                <div class="col-8">
                    <input id="title" name="title" type="text" class="form-control" required value="{{ old('title') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="textarea" class="col-4 col-form-label">Content</label> 
                <div class="col-8">
                    <textarea id="content" name="content" cols="40" rows="5" class="form-control" required="required">{{ old('content') }}</textarea>
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