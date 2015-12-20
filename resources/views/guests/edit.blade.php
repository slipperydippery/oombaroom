@extends('layouts.master')

@section('content')

{!! Form::model($guest, ['route' => ['users.guests.edit', $user]]) !!}
    @include('guests.partials.form', ['submittext' => 'Submit edits'])
{!! Form::close() !!}

@stop