
<div>
<p>{{ $mail->mail }}</p>
@if ($mail->default)
    <a href="{{ route('mails.default', $mail->id) }}" class="btn btn-success a-btn-slide-text disabled" role="button" aria-disabled="true">
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@else
    <a href="{{ route('mails.default', $mail->id) }}" class="btn btn-success a-btn-slide-text">
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@endif

@if (count($mails) < 2 || $mail->default)
    <a href="{{ route('mails.delete', $mail->id) }}" class="btn btn-danger a-btn-slide-text disabled" role="button" aria-disabled="true">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>
    </a>
@else
    <a href="{{ route('mails.delete', $mail->id) }}" class="btn btn-danger a-btn-slide-text">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>
    </a>
@endif
</div>
