@extends('layouts.vertical', ['title' => 'Radar', 'subTitle' => 'Chart', 'pageTitle' => 'Radar'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4 mb-3">Basic Radar Chart</h4>
            <div dir="ltr">
                <div id="basic-radar" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4 mb-3">Radar with Polygon-fill</h4>
            <div dir="ltr">
                <div id="radar-polygon" class="apex-charts" data-colors="#FF4560"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4 mb-3">Radar – Multiple Series</h4>
            <div dir="ltr">
                <div id="radar-multiple-series" class="apex-charts" data-colors="#3e60d5,#02a8b5,#fd7e14"></div>
                <div class="text-center mt-2">
                    <button onclick="update()" class="btn btn-sm btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-radar.js'])
@endsection