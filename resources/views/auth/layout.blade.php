@extends('components.layout')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="pt-5 pb-5">
                            @component('components.elements.blob')
                                <h4 class="text-uppercase">@yield('sectiontitle')</h4>
                            @endcomponent
                        </div>
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
