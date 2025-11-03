@extends('layouts.app', ['title' => 'Chartjs', 'subTitle' => 'Chartjs', 'pageTitle' => 'Chartjs'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Bubble</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="bubble-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Donut</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="donut-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Pie</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="pie-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Polar Area</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="polar-area-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Radar</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="radar-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scatter</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="scatter-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Stacked Bar/Line</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="bar-line-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/chartjs-other.js'])
@endsection
