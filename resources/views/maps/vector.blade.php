@extends('layouts.app', ['title' => 'Vector', 'subTitle' => 'Maps', 'pageTitle' => 'Vector'])

@section('css')
    @vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
    <div class="grid lg:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">World Vector Map</h4>

                <div class="mb-3">
                    <div id="world-map-markers" style="height: 360px"></div>
                </div>
            </div>
        </div> <!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">World Vector Map</h4>

                <div class="mb-3">
                    <div id="world-map-markers-line" style="height: 360px"></div>
                </div>
            </div>
        </div> <!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">India Vector Map</h4>
                <div class="mb-3">
                    <div id="india-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div> <!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Canada Vector Map</h4>
                <div class="mb-3">
                    <div id="canada-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div> <!-- card end -->


        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Russia Vector Map</h4>
                <div class="mb-3">
                    <div id="russia-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div><!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">US Vector Map</h4>
                <div class="mb-3">
                    <div id="usa-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div><!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Iraq Vector Map</h4>
                <div class="mb-3">
                    <div id="iraq-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div><!-- card end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Spain Vector Map</h4>
                <div class="mb-3">
                    <div id="spain-vector-map" style="height: 360px"></div>
                </div>
            </div>
        </div><!-- card end -->

    </div><!-- end grid-->
@endsection

@section('script')
    @vite(['resources/js/pages/maps-vector.js', 'resources/js/maps/us-mill-en.js', 'resources/js/maps/us-lcc-en.js', 'resources/js/maps/us-aea-en.js', 'resources/js/maps/in-mill-en.js', 'resources/js/maps/canada.js', 'resources/js/maps/iraq.js', 'resources/js/maps/russia.js', 'resources/js/maps/spain.js'])
@endsection
