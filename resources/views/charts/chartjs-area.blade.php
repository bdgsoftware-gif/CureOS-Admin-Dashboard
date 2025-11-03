@extends('layouts.app', ['title' => 'Chartjs Area', 'subTitle' => 'Chartjs', 'pageTitle' => 'Chartjs Area'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Boundaries</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="boundaries-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Different Dataset</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="dataset-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Draw Time</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="draw-time-example" data-colors="#3e60d5,#47ad77"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Stacked</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="stacked-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Radar</h4>
                <div class="mt-3" style="height: 320px;">
                    <canvas id="radar-example" data-colors="#3e60d5,#fa5c7c,#47ad77,#ebeff2, #f56f36"></canvas>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/chartjs-area.js'])
@endsection
