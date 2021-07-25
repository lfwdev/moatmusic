@extends('components.blueprint')
@section('loadercss')
    <style> .loader-wrapper{background: linear-gradient( 136deg, #111 0%, #333 100%); background-size: 200% 200%; animation: gradient 5s ease infinite;position:fixed;left:0;top:0;width:100vw;height:100vh;z-index:9999;}.loader-content{animation:pulse 2s infinite;position:fixed;left:38%;top:28%;height:24%;width:24%;text-align:center}.brand{width: 100%; height: 100%;}.brand img,.brand svg{position:relative;max-width:95%;max-height:95%}.spinner{-webkit-animation:rotate 2s linear infinite;animation:rotate 2s linear infinite;margin:24px 0 0 0;width:24px;height:24px}.spinner .path{stroke:#FFF;stroke-linecap:round;-webkit-animation:dash 1.5s ease-in-out infinite;animation:dash 1.5s ease-in-out infinite}@keyframes  pulse{0%,100%{opacity:.25}50%{opacity:1}}@-webkit-keyframes rotate{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes  rotate{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes dash{0%{stroke-dasharray:1,150;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-35}100%{stroke-dasharray:90,150;stroke-dashoffset:-124}}@keyframes  dash{0%{stroke-dasharray:1,150;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-35}100%{stroke-dasharray:90,150;stroke-dashoffset:-124}} @keyframes gradient { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }</style>
@endsection
@section('loaderhtml')
    <div id="loader" class="loader-wrapper">
        <div class="loader">
            <div class="loader-content">
                <div class="brand">
                    @include('components.elements.webp',[
                        'webp' => asset('assets/m/i/lfs_icon-inverse.webp'),
                        'or' => asset('assets/m/i/lfs_icon-inverse.png'),
                        'w' => 'auto',
                        'h' => 'auto',
                        'style' => 'max-width:100%;',
                        'alt' => 'Luís Felipe Souza',
                        'aria' => 'Luís Felipe Souza'
                    ])
                </div>
                <div>
                    <svg class="spinner" viewBox="0 0 50 50">
                        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('body')
    {{-- nav --}}
    <section id="globalnav">
        @include('components.navigation.globalnav')
    </section>
    {{-- content --}}
    <section id="main">
        <main @yield('mainAttr')>
            @yield('main')
        </main>
    </section>
    {{-- footer --}}
    <section id="globalfooter">
        @include('components.navigation.globalfooter')
    </section>
@endsection
{{-- Scripts --}}
@section('nonBlockingJS')
    <script type="text/javascript">
        window.addEventListener("load", function(){ document.getElementById('loader').style.display = 'none';  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });});
    </script>
@endsection