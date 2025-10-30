@extends('layouts.vertical', ['title' => 'Line', 'subTitle' => 'Chart', 'pageTitle' => 'Line'])

@section('content')

    <div class="grid xl:grid-cols-2 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Simple line chart</h4>
                <div dir="ltr">
                    <div id="line-chart" data-colors="#ffbc00"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Line with Data Labels</h4>
                <div dir="ltr">
                    <div id="line-chart-datalabel" data-colors="#6c757d,#3e60d5"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Zoomable Timeseries</h4>
                <div dir="ltr">
                    <div id="line-chart-zoomable" data-colors="#fa5c7c"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Syncing charts</h4>
                <div id="line-chart-syncing2" data-colors="#3e60d5"></div>
                <div dir="ltr">
                    <div id="line-chart-syncing" data-colors="#6c757d"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Missing / Null values</h4>
                <div dir="ltr">
                    <div id="line-chart-missing" data-colors="#ffbc00,#47ad77,#39afd1"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Dashed Line Chart</h4>
                <div dir="ltr">
                    <div id="line-chart-dashed" data-colors="#6c757d,#47ad77,#39afd1"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Stepline Chart</h4>
                <div dir="ltr">
                    <div id="line-chart-stepline" data-colors="#47ad77"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Brush Chart</h4>
                <div dir="ltr">
                    <div id="chart-line2" data-colors="#3e60d5"></div>
                    <div id="chart-line" data-colors="#39afd1"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Realtime Chart</h4>
                <div dir="ltr">
                    <div id="line-chart-realtime" data-colors="#39afd1"></div>
                </div>
            </div>
        </div> <!-- end card -->

    </div><!-- end Grid -->

@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    @vite(['resources/js/pages/apex-line.js'])
@endsection
