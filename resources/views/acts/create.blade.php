@extends ('layouts.master')

@section('content')

    {!! Form::open([ 'route' => 'acts.store']) !!}
        <!-- Title Form Input -->
        <div class="form-group">
        	{!! Form::label('title', 'Title:') !!}
        	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Commentary Form Input -->
        <div class="form-group">
        	{!! Form::label('commentary', 'Commentary:') !!}
        	{!! Form::text('commentary', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Act Submit Field -->
        <div class="form-group">
            {!! Form::submit('Add Act', ['class' => 'btn form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop