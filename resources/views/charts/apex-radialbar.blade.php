@extends('layouts.vertical', ['title' => 'RadialBar Charts', 'subTitle' => 'Chart', 'pageTitle' => 'RadialBar Charts'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Basic RadialBar Chart</h4>
            <div dir="ltr">
                <div id="basic-radialbar" class="apex-charts" data-colors="#39afd1"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Multiple RadialBars</h4>
            <div dir="ltr">
                <div id="multiple-radialbar" class="apex-charts" data-colors="#6c757d,#ffbc00,#3e60d5,#47ad77"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Circle Chart - Custom Angle</h4>
            <div class="text-center" dir="ltr">
                <div id="circle-angle-radial" class="apex-charts" data-colors="#47ad77,#3e60d5,#fa5c7c,#ffbc00"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Circle Chart with Image</h4>
            <div dir="ltr">
                <div id="image-radial" class="apex-charts"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Stroked Circular Guage</h4>
            <div dir="ltr">
                <div id="stroked-guage-radial" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Gradient Circular Chart</h4>
            <div dir="ltr">
                <div id="gradient-chart" class="apex-charts" data-colors="#8f75da,#3e60d5"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Semi Circle Gauge</h4>
            <div dir="ltr">
                <div id="semi-circle-gauge" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-radialbar.js'])
@endsection