@extends('layouts.app')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">

                    <!-- Blog Details-->
                    <div class="blog-view">
                        <div class="blog-single-post">
                          @if (!Session::has('success'))
                            <p class="text-success my-2">{{ session('success') }}</p>
                        @endif
                            <a href="{{ url()->previous() }}" class="back-btn"><i class="feather-chevron-left"></i>
                                Back</a>
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img alt=""
                                        src="{{ asset('assets/img/category/blog-7.jpg') }}" class="img-fluid"></a>
                            </div>
                            <h3 class="blog-title my-4">{{ $post->title }}</h3>
                            <div class="blog-info">
                                <div class="post-list">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html"><img
                                                        src="{{ asset('assets/img/profiles/avatar-01.jpg') }}"
                                                        alt="Post Author">
                                                    <span>{{ $post->user ? 'By ' . $post->user->name : 'UNKNOWN !!' }}
                                                    </span></a>
                                            </div>
                                        </li>
                                        <li><i class="feather-clock"></i> {{ $post->created_at }}</li>
                                        <li><i class="feather-message-square"></i> {{ $post->comment->count() }}
                                            Comments</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="card author-widget clearfix">
                            <div class="card-header">
                                <h4 class="card-title">About Author</h4>
                            </div>
                            <div class="card-body">
                                <div class="about-author">
                                    <div class="author-details">
                                        <a href="profile.html"
                                            class="blog-author-name">{{ $post->user ? $post->user->name : 'UNKNOWN !!' }}<span></span></a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /About Author -->

                        <!-- Comments -->
                        <div class="card blog-comments">
                            <div class="card-header">
                                <h4 class="card-title">Comments ({{ $post->comment->count() }})</h4>
                            </div>
                            <div class="card-body ">
                                @if ($post->comment->count() > 0)
                                    <ul class="comments-list">
                                        @foreach ($post->comment as $comment)
                                            <li class="mb-2">
                                                <div class="comment">
                                                    <div class="comment-block">
                                                        <div class="comment-by">
                                                            <h6 class="blog-author-name">
                                                                {{ $comment->user ? $comment->user->name : 'User' }} <span
                                                                    class="blog-date">
                                                                    <i
                                                                        class="feather-clock me-1"></i>{{ $comment->created_at }}</span>
                                                            </h6>
                                                        </div>
                                                        <p>{{ $comment->content }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No comments yet.</p>
                                @endif
                            </div>
                        </div>
                        <!-- /Comments -->

                        <!-- Leave Comment -->
                        <div class="card new-comment clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Leave Comment</h4>
                            </div>
                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (Session::has('success'))
                                    <p class="text-success">{{ session('success') }}</p>
                                @endif
                                <form method="post" action="{{ route('comments.edit', $post->uuid) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="form-group">
                                            @if (auth()->check())
                                                <textarea rows="4" placeholder="Comment" class="form-control bg-grey" id="content" name="content" required></textarea>
                                            @else
                                                <textarea class="form-control" id="content" name="content" rows="4" placeholder="Comment" disabled></textarea>
                                                <p class="text-muted">Log in to add comment</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="submit-btn btn btn-primary"
                                            {{ auth()->check() ? '' : 'disabled' }}>Add Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Leave Comment -->
                    </div>
                </div>
            </div>
            <!-- /Blog Details-->

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
