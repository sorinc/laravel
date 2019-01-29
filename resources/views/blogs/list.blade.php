@extends('layouts.app')

@section('content')

    @foreach ($posts->items() as $post)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }}
                        <small class="form-text text-muted d-inline-block float-right">
                            {{ $post->posted_at }}
                        </small>
                    </div>
    
                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div><br/><br/>
    @endforeach

<div class="text-right">
{{ $posts->links() }}
</div>

@endsection