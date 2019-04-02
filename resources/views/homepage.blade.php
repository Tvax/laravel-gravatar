@extends('layouts.default')
@section('content')

<div id='main-container'>
    <div id="forms">
        @include('layouts.addAvatarMail')
    </div>

    <div id='lists'>
        <div id='mail-list'>
            <ul class="list-group">
                @forelse ($mails as $mail)
                <li class="list-group-item clearfix">@include('layouts.listMailItem')</li>
            </ul>

            @empty
                <p>No mails</p>
            @endforelse
        </div>

        <div>
            <ul class="list-group">
                @forelse ($avatars as $avatar)
                <li class="list-group-item clearfix">@include('layouts.listAvatarItem')</li>
            </ul>

            @empty
                <p>No avatars</p>
            @endforelse
        </div>
    </div>

</div>

<style>
    #main-container {
        display: flex;
        flex-direction: row;
    }
    #forms{
        margin-right: 5%;
    }
</style>
@stop
