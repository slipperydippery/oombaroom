@extends('layouts.master')

@section('content')

    <div class="header headder--user">
      <div class="row">
          <div class="column">
              <h1>{{ $user->name }}</h1>
              <p class="subheader subheader--main subheader--funeral">
                funeral commentary
              </p>
              <div class="info-block info-block--main clearfix">
                  <div class="column small-6 medium-3">
                      Ceremony
                  </div>
                  <div class="column small-6 medium-3">
                      {{ $funeral->ceremony ? $funeral->ceremony : "---" }}
                  </div>
                  <div class="column small-6 medium-3">
                      Burial
                  </div>
                  <div class="column small-6 medium-3">
                    {{ $funeral->burial_type ? $funeral->burial_type : "---" }}
                  </div>
                  <div class="column small-6 medium-3">
                      Location
                  </div>
                  <div class="column small-6 medium-3">
                    {{ $funeral->location ? $funeral->location : "---" }}
                  </div>
                  <div class="column small-6 medium-3">
                      Casket
                  </div>
                  <div class="column small-6 medium-3">
                    {{ $funeral->casket ? $funeral->casket : "---" }}
                  </div>
                  <div class="column small-6 medium-3">
                      Main Song
                  </div>
                  <div class="column small-6 medium-3">
                    {{ $funeral->song_name ? $funeral->song_name : "---" }}
                  </div>
              </div>
          </div>
      </div>

    </div>

    <div class="row">
        <div class="column">
            <h2>Funeral and planning</h2>
            <!-- Overview of Funeral Info and Choices -->
            @foreach($acts as $act)
              <h3>{{$act->title}}</h3>
              <p class="subhead subhead--h3">{{$act->commentary}}</p>

              @foreach($act->scenes as $scene)
                  <p>{{ $scene->name }}</p>
              @endforeach

              <a href="{{ URL::route('acts.media', [$act->id]) }}">add media to scene</a>
            @endforeach


        </div>

    </div>

    <div class="row">
        <div class="column">
            <h2>Media</h2>
            <a href="{{ URL::route('scenes.create') }}">Add Media</a>

        </div>
    </div>

    <div class="row">
        <div class="column">

            <h2>{{ $guestlist->name }}</h2>
            <ul>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
            </ul>
        </div>

    </div>


@stop
