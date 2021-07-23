<header>
    <div class="cover-container">
        <div class="cover-inner container">
            <div class="row justify-center">
                <div class="col-lg-7 mt-5 mb-5 text-center text-lg-left">
                    <h2 class="jumbotron-heading">Welcome <small>to the</small> moatmusic <small>project</small></h2>
                    <p class="lead">
                        This is a music collection app developed for the <a href="https://www.moat.ai/" target="_blank">moatbuilders</a> programming test.
                    </p>
                    <p>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-lg mb-2 mr-2 ml-2 pill-btn">Live demo &nbsp;&nbsp; <small class="fa fa-play"></small></a>
                        <a href="https://gitlab.com/-/snippets/2040915" class="btn link-white mb-2 ml-2 ml-2 pill-btn">Find out more</a>
                    </p>
                </div>
                <div class="col-lg-5 mt-5 mb-5 text-center">
                    @component('components.elements.blob')
                        <h1 class="fa fa-play"></h1>
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</header>
