@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="content-page-header">
                <h5>{{ !empty($post) ? 'Edit' : 'Create' }} Post</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <form method="POST" action="/posts/edit{{ !empty($post) ? '/' . $post->uuid : '' }}"
                            class="mt-5 col-md-6 mx-auto">
                            @csrf

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="form-group-item border-0 pb-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input name="title"
                                                value="{{ !is_null(old('title')) ? old('title') : (!empty($post) ? $post->title : '') }}"
                                                type="text" class="form-control" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" id="summernote_container">
                                            <label class="form-control-label">Content</label>
                                            <textarea name="content" class="summernote form-control" placeholder="Type your message">{{ !is_null(old('content')) ? old('content') : (!empty($post) ? $post->content : '') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label">Published At</label>
                                        <input name="published_at" type="date" class="form-control shadow-sm"
                                            value="{{ !is_null(old('published_at')) ? old('published_at') : (!empty($post) ? $post->published_at : '') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
