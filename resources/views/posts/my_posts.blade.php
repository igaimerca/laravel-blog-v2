@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Posts</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle"><span class="me-2"><i
                                            class="fe fe-filter"></i></span>Filter </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);"><span><i class="fe fe-settings"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);"><span><i class="fe fe-grid"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="active btn-filters" href="javascript:void(0);"><span><i
                                            class="fe fe-list"></i></span> </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ route('posts.edit') }}"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add BLog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div id="filter_inputs" class="card filter-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

            <!-- Blogs-->
            <div class="card invoices-tabs-card">
                <div class="invoices-main-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="invoices-tabs">
                                <ul>
                                    <li><a href="/posts">Published Posts</a></li>
                                    <li><a href="/my_posts" class="active">My Posts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Blogs-->

            @if ($posts->isEmpty())
                <p>No posts yet.</p>
            @else
                <div class="row">
                    @foreach ($posts as $post)
                        <x-post-card :post="$post" :action="true"></x-post-card>
                    @endforeach
                </div>
            @endif
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-tab d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            <!-- /Pagination -->

        </div>
    </div>
@endsection
