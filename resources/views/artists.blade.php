@extends('components.layout')
@section('title','Artists')
@section('main')
    <section id="artists">
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="pt-5 pb-5">
                        @component('components.elements.blob')
                            <h4 class="text-uppercase">Artists</h4>
                        @endcomponent
                    </div>
                </div>
            </div>
            <div class="row">
                @if(is_array($artists))
                    @foreach($artists as $artist)
                        <div class="col-6 col-md-4 col-lg-3 mb-3 mt-3">
                            @component('components.elements.card')
                                @slot('link',url('/artists/' . $artist->id ))
                                @slot('body')
                                    <div class="text-center">
                                        <div class="mb-0 d-block p-1">
                                            <img src="https://unavatar.vercel.app/twitter/{{ strtr($artist->twitter,['@'=>'']) }}"
                                                 width="64"
                                                 class="img-fluid rounded-circle shadow-sm">
                                        </div>
                                        <div class="mb-0 d-block p-1">
                                            <h6 class="mb-0 text-white">
                                                {{ $artist->name }}
                                            </h6>
                                        </div>
                                    </div>
                                @endslot
                                @slot('footer')
                                    <a href="https://twitter.com/{{ strtr($artist->twitter,['@'=>'']) }}" class="social-link" target="_blank">
                                        <span class="small text-uppercase text-muted">
                                            <i class="fab fa-twitter"></i>
                                            {{ $artist->twitter }}
                                        </span>
                                    </a>
                                @endslot
                            @endcomponent
                        </div>
                    @endforeach
                @else
                    <div class="col-12 mb-3 mt-3 m-auto">
                        @component('components.elements.card')
                            @slot('body')
                                <div class="text-center">
                                    <div class="m-auto d-block p-1">
                                        <h6 class="text-white">
                                            No Artists to show.
                                        </h6>
                                    </div>
                                </div>
                            @endslot
                        @endcomponent
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection