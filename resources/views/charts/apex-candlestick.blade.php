@extends('layouts.app', ['title' => 'Candlestick', 'subTitle' => 'Chart', 'pageTitle' => 'Candlestick'])

@section('content')
    <div class="grid xl:grid-cols-2 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Simple Candlestick Chart</h4>
                <div dir="ltr">
                    <div id="simple-candlestick" class="apex-charts" data-colors="#47ad77,#fa5c7c"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title">Combo Candlestick Chart</h4>
                <div dir="ltr">
                    <div id="combo-candlestick" class="apex-charts" data-colors="#47ad77,#fa5c7c"></div>
                    <div id="combo-bar-candlestick" class="apex-charts" data-colors="#3e60d5,#ffbc00"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-3">Category X-Axis</h4>
                <div dir="ltr">
                    <div id="x-axis-candlestick" class="apex-charts" data-colors="#47ad77,#fa5c7c,#3e60d5"></div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-3">Candlestick with Line</h4>
                <div dir="ltr">
                    <div id="candlestick-with-line" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c"></div>
                </div>
            </div>
        </div> <!-- end card -->
    </div><!-- end Grid -->
@endsection

@section('script')
    @vite(['resources/js/pages/apex-candlestick.js'])
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>
@endsection
