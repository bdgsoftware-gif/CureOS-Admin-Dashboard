<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenavView ?? 'default' }}">

<head>
    @include('layouts.shared.title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared.head-css')
    <!-- AlpineJS CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    @yield('preloader')
    <div class="flex wrapper">

        @include('layouts.shared/sidenav')

        <div class="page-content">

            @include('layouts.shared/topbar')

            <!-- Flash Messages -->
            @if (session()->has('flash'))
                <x-flash-message :message="session('flash.message')" :type="session('flash.type')" :icon="session('flash.icon')" />
            @endif

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
