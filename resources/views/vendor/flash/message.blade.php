@if (session()->has('flash_notification.message'))
    @if (session()->has('flash_notification.overlay'))
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title' => session('flash_notification.title'),
            'body' => session('flash_notification.message'),
        ])
    @else
        <div
            class="alert
                    alert-{{ session('flash_notification.level') }}
                    {{ session()->has('flash_notification.important') ? 'alert-important' : '' }}">
            @if (session()->has('flash_notification.important'))
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
            @endif

            {!! session('flash_notification.message') !!}
        </div>
    @endif
@endif
