@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            <div class="card mb-4">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Post</button>
                    </form>
                </div>
            </div>
            @endauth

            <div class="card">
                <div class="card-header">Feed</div>
                <div class="card-body">
                    @foreach ($posts as $post)
                        <div class="media mb-4">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $post->user->name }}</h5>
                                <p>{{ $post->content }}</p>
                                <small>{{ $post->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
