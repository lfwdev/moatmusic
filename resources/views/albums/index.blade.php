{{-- Albums --}}
@foreach($content as $album)
    @if(is_array($album))
        <div class="col-6 col-md-4 col-lg-3 mb-3 mt-3">
            @component('components.elements.card')
                <img class="card-img"
                     src="https://data.whicdn.com/images/348892721/original.jpg"
                     alt="Card image" style="opacity: 0.1">
                <div class="card-img-overlay p-0">
                    <div class="d-flex h-100 w-100">
                        <div class="align-self-center w-100 text-center">
                            <a href="{{ route('albums.index').'/'.$album['id'] ?? ''}}">
                                <h5 class="mb-0 text-white">
                                    {{ $album['name'] ?? ''}}
                                </h5>
                            </a>
                            <br>
                            <a href="{{ route('artists').'/'.$album['artist_id'] ?? ''}}">
                                <p class="mb-0 text-white">
                                    {{ $album['artist_name'] ?? ''}}
                                </p>
                            </a>
                            <small class="text-muted">
                                {{ $album['year'] ?? ''}}
                            </small>
                        </div>
                    </div>
                    <div class="w-100 card-footer position-absolute" style="bottom:0">
                        @if(isset($album['id']))
                            <a class="float-left btn btn-sm btn-link" href="{{ route('albums.edit',$album['id']) }}">
                                <em class="fa fa-pencil"></em> Edit
                            </a>
                            @can('delete albums')
                                <form class="float-right" action="{{ route('albums.destroy',$album['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-link">
                                        <em class="fa fa-trash"></em> Delete
                                    </button>
                                </form>
                            @endcan
                        @endif
                    </div>
                </div>
            @endcomponent
        </div>
    @endif
@endforeach