<section id="about" class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-8 text-center" >
                <h2>About</h2>
                <div class="divider"></div>
                <a class="btn btn-outline-secondary" href="https://github.com/lfwdev/moatmusic">
                    <div class="p-1">
                        <span> Check this out on github</span>
                        &nbsp;&nbsp;
                        <em class="fab fa-github"></em>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div> <em class="fa fa-readme"></em></div>
                {{ Illuminate\Mail\Markdown::parse(file_get_contents(base_path() . '/README.md')) }}
            </div>
        </div>
    </div>
</section>