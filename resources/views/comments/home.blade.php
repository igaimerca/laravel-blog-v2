@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9">
            <!-- Comments -->
            <div class="card blog-comments">
                <div class="card-header">
                    <h4 class="card-title">Comments ({{ $comments->count() }})</h4>
                </div>
                <div class="card-body ">
                    @if ($comments->count() > 0)
                        <ul class="comments-list">
                            @foreach ($comments as $comment)
                                <li class="mb-2">
                                  <p class="">Post: {{$comment->post->title}}</p>
                                    <div class="comment">
                                        <div class="comment-block">
                                            <div class="comment-by">
                                                <h6 class="blog-author-name">
                                                    {{ $comment->user ? $comment->user->name : 'User' }} <span
                                                        class="blog-date">
                                                        <i class="feather-clock me-1"></i>{{ $comment->created_at }}</span>
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
        </div>
    </div>
@endsection
