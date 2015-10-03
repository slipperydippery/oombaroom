@extends('layouts.master')

@section('content')


{!! Form::open(['route' => ['users.guests.store', $user]]) !!}
        <!-- Name Form Input -->
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Note Form Input -->
        <div class="form-group">
        	{!! Form::label('note', 'Note:') !!}
        	{!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Guest Submit Field -->
        <div class="form-group">
            {!! Form::submit('Add Guest', ['class' => 'btn form-control']) !!}
        </div>
{!! Form::close() !!}

@stop