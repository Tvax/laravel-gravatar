
<div>
<p>{{ $mail->mail }}</p>
@if default
<a href="#" class="btn btn-sucess a-btn-slide-text">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    <span><strong>Default</strong></span>            
</a>
@else
<a href="#" class="btn a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Default</strong></span>            
    </a>
@endif

<a href="#" class="btn btn-danger a-btn-slide-text">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    <span><strong>Delete</strong></span>            
</a>
</div>