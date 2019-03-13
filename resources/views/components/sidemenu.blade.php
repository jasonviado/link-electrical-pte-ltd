<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="{{ url('/dashboard') }}">FEELS LIKE HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/dashboard') }}">Dashboard</a>
            </li>            
            <li class="nav-item {{ Request::is('living-room') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/living-room') }}">Living Room</a>
            </li>
            <li class="nav-item {{ Request::is('kitchen') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/kitchen') }}">Kitchen</a>
            </li>
            <li class="nav-item {{ Request::is('bedrooms') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/bedrooms') }}">Bedrooms</a>
            </li>
            <li class="nav-item {{ Request::is('dining') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/dining') }}">Dinning</a>
            </li>
            <li class="nav-item {{ Request::is('bathroom') ? 'active' : '' }}">
                <a class="nav-link" href=" {{ url('/bathroom') }}">Bathroom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>                
        </ul>
    </div>
</nav>