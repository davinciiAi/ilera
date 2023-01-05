<!--Header Area-->
<header class="header-area blue-bg-2">
    <nav class="navbar navbar-expand-lg main-menu">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: 900">
                ILERA
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link @yield('dashboard')" href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link @yield('add_dependent')" href="{{ url('add_dependent') }}">Add Dependent</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                    </li>
                </ul>
                <div class="header-btn justify-content-end">
                        <a href="{{ url('dashboard') }}" class="bttn-small btn-fill">Dashboard</a>
                </div>
            </div>
        </div>
        <form style="display: none;" action="{{ route('logout') }}" method="post" id="logout">
            @csrf
        </form>
    </nav>
</header><!--/Header Area-->
