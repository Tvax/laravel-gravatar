<div>
    <p>
        {!! Form::open(array('route' => 'mail', 'class' => 'form-group')) !!}
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
        {!! Form::open(array('route' => 'avatar', 'files' => 'true')) !!}
        {!! Form::file('image', 'Avatar') !!}
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
