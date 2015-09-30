@extends ('layouts.master')

@section('content')

    {!! Form::open([ 'route' => 'scenes.store']) !!}
        <!-- Title Form Input -->
        <div class="form-group">
        	{!! Form::label('title', 'Title:') !!}
        	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Artist Form Input -->
        <div class="form-group">
        	{!! Form::label('artist', 'Artist:') !!}
        	{!! Form::text('artist', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Comment Form Input -->
        <div class="form-group">
        	{!! Form::label('commentary', 'Commentary:') !!}
        	{!! Form::text('commentary', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Media link Form Input -->
        <div class="form-group">
        	{!! Form::label('media_link', 'Media link:') !!}
        	{!! Form::text('media_link', null, ['class' => 'form-control']) !!}
        </div>

        public/private

        <!-- Add Act Submit Field -->
        <div class="form-group">
            {!! Form::submit('Add Scene', ['class' => 'btn form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop