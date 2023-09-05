    @php
        $carbonDate = \Carbon\Carbon::parse($post->published_at);
        $day = $carbonDate->day;
        $month = $carbonDate->format('F'); // Full month name
    @endphp
    <div class="col-md-6 col-xl-4 col-sm-12 d-md-flex d-sm-block">
        <div class="blog grid-blog flex-fill">
            <div class="blog-image">
                <a href="{{ route('posts.show', $post->uuid) }}"><img class="img-fluid" src="{{ asset('assets/img/category/blog-1.jpg') }}"
                        alt="Post Image"></a>
                <div class="blog-views">
                    <p>{{ $day }}</p>
                    <span>{{ $month }}</span>
                </div>

            </div>
            <div class="blog-content">
                <ul class="entry-meta meta-item">
                    <li>
                        <div class="post-group d-flex align-items-center">
                            <div class="post-widget">
                                <span>Category</span>
                            </div>
                            <div class="post-author">
                                <a href="profile.html">
                                    <img src="{{ asset('assets/img/profiles/avatar-12.jpg') }}" alt="Post Author">
                                    <span>
                                        <span
                                            class="post-title">{{ $post->user ? $post->user->name : 'UNKNOWN !!' }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <h3 class="blog-title"><a href="{{ route('posts.show', $post->uuid) }}">
                        {{ $post->title }}</a></h3>
                <p>{{ Str::limit($post->content, 100) }}
                </p>
                @if ($action)
                    <div class="edit-options">
                        <div class="edit-delete-btn">
                            <a href="{{ route('posts.edit', $post['uuid']) }}" class="text-muted"><i
                                    class="fe fe-edit me-1"></i> Edit</a>
                            <form class="d-inline" action="{{ route('posts.delete', $post['uuid']) }}" method="post">
                                @csrf
                                @method('delete')
                                <a class="text-muted"
                                    onclick="return confirm('Are you sure you want to delete this post ?')"
                                    type="submit">
                                    Delete
                                </a>
                            </form>
                        </div>
                        <div class="text-end inactive-style">
                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal"
                                data-bs-target="#deleteNotConfirmModal"><i class="fe fe-alert-circle me-1"></i>
                                Active</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
