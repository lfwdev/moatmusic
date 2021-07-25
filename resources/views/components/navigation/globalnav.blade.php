<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><small>moatmusic</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mt-md-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"> <em class="fa fa-home"></em> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{ route('home').'/#about' }}"><small>About</small></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary pill-btn" href="{{ route('dashboard') }}">Sign-in <em class="fa fa-sign-in"></em></a>
                    </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-outline-secondary pill-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign-out <em class="fa fa-sign-out"></em>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>