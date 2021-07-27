@extends('components.layout')
@section('title',$album->name ?? 'Albums')
@section('main')
    <section id="artist">
        <div class="container pb-5 pt-5">
            <div class="row">
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
                                        </div>
                                    </div>
                                    <div class="w-100 card-footer position-absolute" style="bottom:0">
                                        @if(isset($album['id']))
                                            <a class="float-left" href="{{ route('albums.edit',$album['id']) }}">
                                                <em class="fa fa-pencil"></em> Edit
                                            </a>
                                            @can('delete albums')
                                                <a class="float-right" href="{{ route('albums.destroy',$album['id']) }}">
                                                    <em class="fa fa-trash"></em> Delete
                                                </a>
                                            @endcan
                                        @endif
                                    </div>
                                </div>
                            @endcomponent
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection