@if ($errors->Any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ ucfirst(__('body.error_notif')) }}</strong> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif


@foreach (['success', 'info', 'warning', 'error'] as $item)
    @if (session($item))
        <div class="alert alert-{{ $item == 'error' ? 'danger' : $item }} alert-dismissible fade show" role="alert">
            <strong>{{ ucfirst(__('body.' . $item . '_notif')) }}</strong> {{ session($item) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach
