@extends('layouts.master')

@section('content')

    <div class="header header--user">
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
            <div class="row info-block info-block--schedule">
                <div class="column">

                    @foreach($acts as $act)
                        <div class="row">
                            <div class="column info-block__section">
                              <h3>{{$act->title}}</h3>
                              <p class="subheader subheader--h3">{{$act->commentary}}</p>
                              @foreach($act->scenes as $scene)
                                  <p>{{ $scene->title }}</p>
                              @endforeach

                              <a href="{{ URL::route('acts.media', [$act->id]) }}">add media to scene</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>

    <div class="row">
        <div class="column">
            <h2>Media</h2>
            @foreach($user->scenes as $scene)
                <p>{{ $scene->title }}</p>
            @endforeach
            <a href="{{ URL::route('scenes.create', [$user->id]) }}">Add Media</a>

        </div>
    </div>

    <div class="row">
        <div class="column">

            <h2>Guest List</h2>
            @foreach($user->own_guests as $guest)
                <p><a href="{{ URL::route('users.guests.edit',[$user, $guest]) }}">{{ $guest->name }}</a></p>
            @endforeach

            <a href="{{ URL::route('users.guests.create', [$user])}}">add a guest</a>
        </div>

    </div>

@stop
