@extends('layouts.app', ['title' => 'Area Chart', 'subTitle' => 'Chart', 'pageTitle' => 'Area Chart'])

@section('content')
    <div class="grid xl:grid-cols-2 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Basic Area Chart</h4>
                <div dir="ltr">
                    <div id="basic-area" class="apex-charts" data-colors="#fa6767"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Spline Area</h4>
                <div dir="ltr">
                    <div id="spline-area" class="apex-charts" data-colors="#3e60d5,#6c757d"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Area Chart - Datetime X-axis</h4>
                <div class="toolbar apex-toolbar">
                    <button id="one_month" class="btn btn-sm btn-light">1M</button>
                    <button id="six_months" class="btn btn-sm btn-light">6M</button>
                    <button id="one_year" class="btn btn-sm btn-light active">1Y</button>
                    <button id="ytd" class="btn btn-sm btn-light">YTD</button>
                    <button id="all" class="btn btn-sm btn-light">ALL</button>
                </div>
                <div dir="ltr">
                    <div id="area-chart-datetime" class="apex-charts" data-colors="#6c757d"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Area with Negative Values</h4>
                <div dir="ltr">
                    <div id="area-chart-negative" class="apex-charts" data-colors="#47ad77,#ffbc00"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Stacked Area</h4>
                <div dir="ltr">
                    <div id="stacked-area" class="apex-charts" data-colors="#3e60d5,#47ad77,#e3eaef"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Irregular TimeSeries</h4>
                <div dir="ltr">
                    <div id="area-timeSeries" class="apex-charts" data-colors="#39afd1,#fa5c7c,#3e60d5"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Area Chart with Null values</h4>
                <div dir="ltr">
                    <div id="area-chart-nullvalues" class="apex-charts" data-colors="#6c757d"></div>
                </div>
            </div>
        </div> <!-- end card -->

    </div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    @vite(['resources/js/pages/apex-area.js'])
@endsection
