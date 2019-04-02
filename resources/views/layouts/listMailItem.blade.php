
<div>
<p>{{ $mail->mail }}</p>
@if ($mail->default)
<div class="btn btn-outline-success">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    <span><strong>Default</strong></span>
</div>
@else
<a href="{{ route('mails.default', $mail->id) }}" class="btn btn-success a-btn-slide-text">
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@endif

<a href="#" class="btn btn-warning a-btn-slide-text">
    <span class="glyphicon glyphicon-warning" aria-hidden="true"></span>
    <span><strong>Modify</strong></span>
</a>

<a href="{{ route('mails.delete', $mail->id) }}" class="btn btn-danger a-btn-slide-text">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    <span><strong>Delete</strong></span>
</a>
</div>
