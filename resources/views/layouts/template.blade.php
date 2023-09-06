@include('layouts.inc.wrappers.head')

@include('layouts.inc.topbar')
@include('layouts.inc.sidebar')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        @include('layouts.inc.pageheader')

        @include('layouts.inc.messages')

        @yield('content')

    </div>
</div>
<!-- /Page Wrapper -->

@include('layouts.inc.wrappers.foot')
