
<div>
<img src="{{ $avatar->uri }}" alt="User avatar's" class="img-thumbnail">
@if ($avatar->default)
<div class="btn btn-outline-success">
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    <span><strong>Default</strong></span>
</div>
@else
<a href="#" class="btn btn-success a-btn-slide-text">
{{-- <a href="{{ route('avatars.default', $avatar->id) }}" class="btn btn-success a-btn-slide-text"> --}}
        <span class="glyphicon glyphicon-success" aria-hidden="true"></span>
        <span><strong>Default</strong></span>
    </a>
@endif

<a href="#" class="btn btn-danger a-btn-slide-text">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    <span><strong>Delete</strong></span>
</a>
</div>
