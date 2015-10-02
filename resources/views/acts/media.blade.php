@extends('layouts.master')

@section('content')

    <h2>{!! $act->title !!}</h2>
    <p>
      {!! $act->commentary !!}
    </p>
    @foreach($act->scenes as $scene)
      <div class=""><a href="{{ URL::route('acts.removescene', [$act, $scene->id])}}">
        {!! $scene->title !!}
        {!! $scene->artist !!}
      </a></div>
    @endforeach

    @foreach($user->scenes as $scene)
      <div class=""><a href="{{ URL::route('acts.addscene', [$act, $scene->id])}}">
          {!! $scene->title !!}
          {!! $scene->artist !!}
      </a></div>



    @endforeach

@stop
