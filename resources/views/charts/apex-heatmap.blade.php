@extends('layouts.vertical', ['title' => 'Heatmap', 'subTitle' => 'Chart', 'pageTitle' => 'Heatmap'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Basic Heatmap - Single Series</h4>
            <div dir="ltr">
                <div id="basic-heatmap" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Heatmap - Multiple Series</h4>
            <div dir="ltr">
                <div id="multiple-series-heatmap" class="apex-charts" data-colors="#F3B415,#F27036,#663F59,#6A6E94,#4E88B4,#00A7C6,#18D8D8,#A9D794,#46AF78"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Heatmap - Color Range</h4>
            <div dir="ltr">
                <div id="color-range-heatmap" class="apex-charts" data-colors="#fa5c7c,#ffbc00,#39afd1,#47ad77"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Heatmap - Range without Shades</h4>
            <div dir="ltr">
                <div id="rounded-heatmap" class="apex-charts" data-colors="#47ad77,#ffbc00"></div>
            </div>
        </div>
    </div> <!-- end card -->
</div><!-- end Grid -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-heatmap.js'])
@endsection