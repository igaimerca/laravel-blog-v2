@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <div class="col-md-9 mx-auto my-5">
        <h2>My Posts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col" class="col-md-2">Content</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th>{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td class="col-md-2">{{ $post['content'] }}</td>
                        {{-- <td>{{ $post->user->name }}</td> --}}
                        <td>{{ $post->user ? $post->user->name . '(you)' : 'User Not Found !' }}</td>
                        <td>{{ $post['published_at'] ? $post['published_at'] : 'Not Published Yet' }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post['uuid']) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('posts.edit', $post['uuid']) }}" class="btn btn-primary">Edit</a>
                            <form class="d-inline" action="{{ route('posts.delete', $post['uuid']) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this post ?')" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-4 mx-auto my-5">
        {{ $posts->links() }}
    </div>
@endsection
