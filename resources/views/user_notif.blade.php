@include('common/header')

    <main class="page-content space-bottom">
		<div class="container overflow-hidden p-0">
            <div class="dz-list notification-list">
                <ul class="list-group">
                    @foreach ($getnotif as $notif)
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="media">
                            <div class="list-content">
                                <p class="c-text"><i class="feather icon-bell"></i> {{ $notif->description }}</p>
                                <span class="status">{{ $notif->created_at }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

	</main>

@include('common/footer')
