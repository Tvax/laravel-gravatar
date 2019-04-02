
<div>
<img src="{{ $avatar->uri }}" alt="User avatar's" class="img-thumbnail">
@if ($avatar->default)
    <a href="{{ route('mails.default', $mail->id) }}" class="btn btn-success a-btn-slide-text disabled" role="button" aria-disabled="true">
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@else
<a href="{{ route('avatars.default', $avatar->id) }}" class="btn btn-success a-btn-slide-text">
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@endif

<a href="{{ route('avatars.delete', $avatar->id) }}" class="btn btn-danger a-btn-slide-text">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    <span><strong>Delete</strong></span>
</a>
</div>
