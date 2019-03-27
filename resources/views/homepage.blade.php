@extends('layouts.default')
@section('content') 
<div>
    <ul class="list-group">
        @forelse ($mails as $mail)
        <li class="list-group-item clearfix">@include('layouts.listItem')</li>
    </ul>
        
    @empty
        <p>No mails</p>
    @endforelse
</div>
@stop