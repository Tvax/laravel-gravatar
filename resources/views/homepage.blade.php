@extends('layouts.default')
@section('content')

<div id='main-container'>
    <div id="forms">
        @include('layouts.addAvatarMail')
    </div>

    <div id='lists'>
        <div class="listview">
            <ul class="list-group">
                @forelse ($mails as $mail)
                <li class="list-group-item clearfix">@include('layouts.listMailItem')</li>
            </ul>

            @empty
                <p class='empty'>No mails</p>
            @endforelse
        </div>

        <div class="listview">
            <ul class="list-group">
                @forelse ($avatars as $avatar)
                <li class="list-group-item clearfix">@include('layouts.listAvatarItem')</li>
            </ul>

            @empty
                <p class='empty'>No avatars</p>
            @endforelse
        </div>
    </div>

</div>

<style>
    #main-container {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    #lists{
        display: flex;
        flex-direction: row;
    }
    .listview{
        width: 400px;
        max-height: 600px;
        margin-bottom: 10px;
        overflow:scroll;
        -webkit-overflow-scrolling: touch;
    }
    #forms{
        margin-right: 5%;
    }
    .empty{
        margin-top: 300px;
    }
</style>
@stop
