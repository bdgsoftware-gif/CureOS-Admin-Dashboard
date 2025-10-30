@extends('layouts.vertical', ['title' => 'Chartjs Bar', 'subTitle' => 'Chartjs', 'pageTitle' => 'Chartjs Bar' ])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Border Radius</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="border-radius-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Floating</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="floating-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Horizontal</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="horizontal-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Stacked</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="stacked-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Stacked with Groups</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="group-stack-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Vertical</h4>
            <div class="mt-3" style="height: 320px;">
                <canvas id="vertical-example" data-colors="#3e60d5,#47ad77"></canvas>
            </div>
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/chartjs-bar.js'])
@endsection