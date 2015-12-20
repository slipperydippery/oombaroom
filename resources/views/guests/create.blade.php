@extends('layouts.master')

@section('content')


{!! Form::open(['route' => ['users.guests.store', $user]]) !!}
    @include('guests.partials.form', ['submittext' => 'Create Guest'])
{!! Form::close() !!}

@stop