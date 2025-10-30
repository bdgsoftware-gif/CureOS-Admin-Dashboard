@extends('layouts.vertical', ['title' => 'Chartjs Line', 'subTitle' => 'Chartjs', 'pageTitle' => 'Chartjs Line' ])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Interpolation</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="interpolation-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Line</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="line-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Multi-Axes</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="multi-axes-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Point Styling</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="point-styling-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Line Segment</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="line-segment-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Stepped</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="stepped-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/chartjs-line.js'])
@endsection