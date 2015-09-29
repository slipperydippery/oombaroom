@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="column">
            <h2>{{ $user->name }}</h2>
            <div class="info-block info-block--main clearfix">
                <div class="column small-6 medium-3">
                    Birthday
                </div>
                <div class="column small-6 medium-3">
                    20-09-1979
                </div>
                <div class="column small-6 medium-3">
                    Birthday
                </div>
                <div class="column small-6 medium-3">
                    20-09-1979
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h2>Funeral and planning</h2>
            <!-- Overview of Funeral Info and Choices -->
            {{ $user }}
            {{ $user->funerals()->first() }}
            <div class="info-block clearfix">
                <div class="column small-6 medium-3">
                    Location
                </div>
                <div class="column small-6 medium-3">
                    Leidschendam
                </div>
                <div class="column small-6 medium-3">
                    Ceremony
                </div>
                <div class="column small-6 medium-3">
                    Informal
                </div>
                <div class="column small-6 medium-3">
                    Burial
                </div>
                <div class="column small-6 medium-3">
                    Cremation
                </div>
                <div class="column small-6 medium-3">
                    Main Song
                </div>
                <div class="column small-6 medium-3">
                    Rachmaninov 3
                </div>

            </div>
        </div>
        <!-- Funeral Program Sections -->
        <div class="column">
            <h3>Welcome</h3>
            <p class="subhead subhead--h3">This will be held at the Big Ben. The idea is to get the atmosphere positive. The celebration of a life lived instead of a life lost.</p>
            <div class="column small-2">0:00</div>
            <div class="column small-10">
                Intro by Bill Bob
            </div>
            <div class="column small-2">0:15</div>
            <div class="column small-10">
                "The best of times" by Janice
            </div>

        </div>

    </div>

    <div class="row">/resources/views/users/acts/create.blade.php)
        <div class="column">
            <h2>Media Collections</h2>
            <a href="{{ URL::route('acts.create', [Auth::user()]) }}">Add Media</a>

            <ul>
                @foreach($acts as $act)
                    <li>
                        {{ $act->name }}
                        <span> {{ $act->artist }}</span>
                    </li>
                @endforeach
            </ul>

            <h3>Music</h3>
            <h4>Category</h4>
            <ul>
                <li>3e Piano Concerto <span>Rachmaninov</span></li>
                <li>The good solider<span>Nine Inch Nails</span></li>
                <li>Dance yourself Clean<span></span></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h2>Guest List</h2>
            <ul>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
                <li>Maarten de Jager</li>
            </ul>
        </div>

    </div>


@stop

