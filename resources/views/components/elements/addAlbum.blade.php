{{-- New --}}
<div class="col-6 col-md-4 col-lg-3 mb-3 mt-3">
    @component('components.elements.card')
        <a class="position-absolute w-100 h-100" href="{{ route('albums.create') }}" target="_blank"
           style=" top: 0; z-index: 9;"></a>
        <img class="card-img"
             src="https://data.whicdn.com/images/348892721/original.jpg"
             alt="Card image" style="opacity: 0.1">
        <div class="card-img-overlay p-0">
            <div class="d-flex h-100 w-100">
                <div class="align-self-center w-100 text-center">
                    <h1> <em class="fa fa-plus"></em> </h1>
                    <h6> Add New </h6>
                </div>
            </div>
        </div>
    @endcomponent
</div>