@extends('components.layout')
@section('title',$album->name ?? 'Albums')
@section('main')
    <section id="artist">
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="pt-5 pb-5">
                        @component('components.elements.blob')
                            <h4 class="text-uppercase">Albums</h4>
                        @endcomponent
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="col-12">
                        <div class="alert alert-dark alert-dismissible fade show">
                            <h6>{{ $message }}</h6>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                @include('components.elements.addAlbum')
                @include('albums.index')
            </div>
        </div>
    </section>
@endsection