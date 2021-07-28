@extends('components.layout')
@section('title','New Album')
@section('blockingCSS')
    @parent
    @include('components.structure.nonblockingcss',['slot' =>
    [
        1 => ['href' => ('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css')],
    ]])
@endsection
@section('nonBlockingJS')
    @parent
    <script src="{{ ('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js') }}" defer></script>
@endsection
@section('main')
    <section id="newAlbum">
        <div class="container pb-5 pt-5">
            <div class="row">
                @include('components.elements.breadcrumb', [
                    'itemList' => [
                        0 => [
                            'name' => 'Albums',
                            'link' => route('albums.index'),
                            'active' => false,
                        ],
                        1 => [
                            'name' => 'New',
                            'link' => Illuminate\Support\Facades\Route::current()->uri(),
                            'active' => true,
                        ],
                    ]
                ])
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="pt-5 pb-5">
                                <form method="POST" action="{{ route('albums.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control form-control-custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name','default')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                                        <div class="col-md-6">
                                            <input id="year" type="number" minlength="4" maxlength="4" min="1889" max="{{ date('Y') }}" class="form-control form-control-custom @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>

                                            @error('year','default')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Artist') }}</label>
                                        <div class="col-md-6">
                                            @include('components.elements.select.artists')
                                            @error('artist','default')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-primary float-right">
                                                {{ __('Add') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection