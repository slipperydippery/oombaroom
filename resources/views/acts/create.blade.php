@extends ('layouts.master')

@section('content')

    {!! Form::open([ 'route' => 'acts.store']) !!}
        <!-- Name Form Input -->
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Artist Form Input -->
        <div class="form-group">
        	{!! Form::label('artist', 'Artist:') !!}
        	{!! Form::text('artist', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Comment Form Input -->
        <div class="form-group">
        	{!! Form::label('comment', 'Comment:') !!}
        	{!! Form::text('comment', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Media link Form Input -->
        <div class="form-group">
        	{!! Form::label('media_link', 'Media link:') !!}
        	{!! Form::text('media_link', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Act Submit Field -->
        <div class="form-group">
            {!! Form::submit('Add Act', ['class' => 'btn form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop