@extends('layouts.app')

@section('title')
    Show Post
@endsection

@section('content')
    <div class="card col-md-8 mx-auto my-5">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Title : </strong><span>{{ $post->title }}</span></h5>
            <h5 class="card-title"><strong>Content : </strong></h5>
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <div class="card col-md-8 mx-auto my-5">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (Session::has('success'))
            <p class="text-success m-3">{{ session('success') }}</p>
        @endif
        <div class="card-header">
            Add Comment
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('comments.edit', $post->uuid) }}">
                @csrf
                <div class="mb-3">
                    <label for="content" class="form-label">Comment Content</label>
                    @if (auth()->check())
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    @else
                        <textarea class="form-control" id="content" name="content" rows="3" disabled></textarea>
                        <p class="text-muted">Log in to add comment</p>
                    @endif

                </div>
                <button type="submit" class="btn btn-primary" {{ auth()->check() ? '' : 'disabled' }}>Add Comment</button>
            </form>
        </div>
    </div>

    <div class="card col-md-8 mx-auto my-5">
        <div class="card-header">
            Comments
        </div>
        <div class="card-body">
            @if ($post->comment->count() > 0)
                <ul class="list-group">
                    @foreach ($post->comment as $comment)
                        <li class="list-group-item">
                            <strong>{{ $comment->user ? $comment->user->name : 'User' }}</strong>: {{ $comment->content }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No comments yet.</p>
            @endif
        </div>
    </div>

    <div class="card col-md-8 mx-auto my-5">
        <div class="card-header">
            Post author Info
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Name : </strong><span class="fs-5">
                    {{ $post->user ? $post->user->name : 'UNKNOWN !!' }} </span></h5>
            <h5 class="card-title"><strong>Created At : </strong><span>{{ $post->created_at }}</span></h5>
        </div>
    </div>

@endsection
