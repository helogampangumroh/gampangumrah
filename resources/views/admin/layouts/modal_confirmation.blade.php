<div class="modal-header">
    <h4 class="modal-title" id="user_delete_confirm_title">@lang($model . '/modal.title')</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
    @if ($error)
        <div>{!! $error !!}</div>
    @else
        @lang($model . '/modal.body')
    @endif
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang($model . '/modal.cancel')</button>
    @if (!$error)
        <a href="{{ $confirm_route }}" type="button" class="btn btn-danger">@lang($model . '/modal.confirm')</a>
    @endif
</div>
