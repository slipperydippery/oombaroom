<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/">oombaroom</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active">
                <a href="{{ URL::route('users.show', [Auth::user()]) }}">
                    User Profile
                </a>
            </li>
            <li class="has-dropdown">
                <a href="#">Authentication</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li class="active"><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>
