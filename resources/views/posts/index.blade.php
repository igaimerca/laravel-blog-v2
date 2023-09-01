@extends('layouts.app')

@section('title')
    Published Posts
@endsection

@section('content')
    <div class="container">
        <h2>Published Posts</h2>
        @if ($posts->isEmpty())
            <p>No published posts yet.</p>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                    <a href="{{ route('posts.show', $post->uuid) }}" class="font-weight-bold">
                                        {{ $post->title }}</a>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                <p class="card-title"><strong>Author : </strong><span>
                                        {{ $post->user ? $post->user->name : 'UNKNOWN !!' }} </span></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Published on: {{ $post->published_at }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-md-4 mx-auto my-5">
        {{ $posts->links() }}
    </div>
@endsection
