@extends('layouts.vertical', ['title' => 'Polar Area', 'subTitle' => 'Chart', 'pageTitle' => 'Polar Area Charts'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Basic Polar Area Chart</h4> <!-- card-title end -->
            <div dir="ltr">
                <div id="basic-polar-area" class="apex-charts" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#ffbc00,#39afd1"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Monochrome Polar Area</h4> <!-- card-title end -->
            <div dir="ltr">
                <div id="monochrome-polar-area" class="apex-charts" data-colors="#6c757d"></div>
            </div>
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite('resources/js/pages/apex-polar-area.js')
@endsection