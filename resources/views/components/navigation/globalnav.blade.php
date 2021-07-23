<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">moatmusic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mt-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}"> <em class="fa fa-home"></em> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home').'/#about' }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary pill-btn" href="{{ route('dashboard') }}"><em class="fa fa-play"></em></a>
                </li>
            </ul>
        </div>
    </div>
</nav>