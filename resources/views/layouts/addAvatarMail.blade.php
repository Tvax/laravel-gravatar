<div>
    <p>
        {!! Form::open()->route('mails.add') !!}
        {!! Form::text('mail', 'Mail') !!}
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}<p/>
            @endforeach
        </div>
        @endif
        {!! Form::submit('Add email') !!}
        {!! Form::close() !!}
    </p>

    <p>
        {!! Form::open()->multipart()->route('avatars.add') !!}
        {!! Form::file('file', 'Avatar') !!}
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}<p/>
            @endforeach
        </div>
        @endif
        {!! Form::submit('Add avatar') !!}
        {!! Form::close() !!}
    </p>
</div>
