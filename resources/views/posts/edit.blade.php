@extends('layouts.app')

@section('title')
    {{ !empty($post) ? 'Edit' : 'Create' }} Post
@endsection

@section('content')
    <form method="POST" action="/posts/edit{{ !empty($post) ? '/' . $post->uuid : '' }}" class="mt-5 col-md-6 mx-auto">
        @csrf

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <h2>{{ !empty($post) ? 'Edit' : 'Create' }} Post</h2>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control shadow-sm"
                value="{{ !is_null(old('title')) ? old('title') : (!empty($post) ? $post->title : '') }}" autofocus>
        </div>
        <div class=" mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control shadow-sm">{{ !is_null(old('content')) ? old('content') : (!empty($post) ? $post->content : '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Published At</label>
            <input name="published_at" type="date" class="form-control shadow-sm"
                value="{{ !is_null(old('published_at')) ? old('published_at') : (!empty($post) ? $post->published_at : '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
