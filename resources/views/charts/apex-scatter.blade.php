@extends('layouts.app', ['title' => 'Scatter Charts', 'subTitle' => 'Chart', 'pageTitle' => 'Scatter Charts'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scatter (XY) Chart</h4>
                <div dir="ltr">
                    <div id="basic-scatter" class="apex-charts" data-colors="#39afd1,#ffbc00,#3e60d5"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scatter Chart - Datetime</h4>
                <div dir="ltr">
                    <div id="datetime-scatter" class="apex-charts" data-colors="#6c757d,#ffbc00,#3e60d5,#47ad77,#fa5c7c">
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scatter - Images</h4>
                <div dir="ltr">
                    <div id="scatter-images" class="apex-charts scatter-images-chart" data-colors="#3b5998,#e1306c"></div>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/apex-scatter.js'])
@endsection
