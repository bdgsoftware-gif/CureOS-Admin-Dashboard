<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenavView ?? 'default' }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css')
</head>

<body>
@yield('preloader')
<div class="flex wrapper">

    @include('layouts.shared/sidenav')

    <div class="page-content">

        @include('layouts.shared/topbar')

        <main class="p-6">
            @include('layouts.shared/page-title')
            @yield('content')
        </main>

        @include('layouts.shared/footer')

    </div>

</div>

@include('layouts.shared/customizer')

@include('layouts.shared/footer-scripts')

@vite(['resources/js/app.js'])

</body>

</html>
