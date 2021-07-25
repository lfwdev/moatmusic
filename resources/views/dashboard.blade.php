@extends('components.layout')
@section('main')
    {{-- DASHBOARD --}}
    <section id="dashmain">
        <div class="container">
            <div class="row">
                <div class="col">
                    DASHBOARD
                </div>
                @dump($content ?? 'no content')
            </div>
        </div>
    </section>
@endsection