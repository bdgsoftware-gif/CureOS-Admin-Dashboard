@extends('layouts.vertical', ['title' => 'Scatter Charts', 'subTitle' => 'Charts', 'pageTitle' => 'Scatter Chart'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Basic Bar Chart</h4>
            <div dir="ltr">
                <div id="basic-bar" class="apex-charts" data-colors="#39afd1"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Grouped Bar Chart</h4>
            <div dir="ltr">
                <div id="grouped-bar" class="apex-charts" data-colors="#fa5c7c,#6c757d"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Stacked Bar Chart</h4>
            <div dir="ltr">
                <div id="stacked-bar" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c,#6c757d,#39afd1"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">100% Stacked Bar Chart</h4>
            <div dir="ltr">
                <div id="full-stacked-bar" class="apex-charts" data-colors="#ffbc00,#39afd1,#6c757d,#e3eaef,#3e60d5"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Bar with Negative Values</h4>
            <div dir="ltr">
                <div id="negative-bar" class="apex-charts" data-colors="#fa5c7c,#47ad77"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Reversed Bar Chart</h4>
            <div dir="ltr">
                <div id="reversed-bar" class="apex-charts" data-colors="#3e60d5,#47ad77"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Bar with Image Fill</h4>
            <div dir="ltr">
                <div id="image-fill-bar" class="apex-charts" data-colors="#3e60d5,#47ad77,#e3eaef"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Custom DataLabels Bar</h4>
            <div dir="ltr">
                <div id="datalables-bar" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c,#6c757d,#39afd1,#2b908f,#ffbc00,#90ee7e,#f48024,#212730"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Patterned Bar Chart</h4>
            <div dir="ltr">
                <div id="pattern-bar" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c,#39afd1"></div>
            </div>
        </div>
    </div>
    <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Bar with Markers</h4>
            <div dir="ltr">
                <div id="bar-markers" class="apex-charts" data-colors="#47ad77,#fa5c7c"></div>
            </div>
        </div>
    </div>
    <!-- end card -->
</div>

@endsection

@section('script')
@vite(['resources/js/pages/apex-bar.js'])
@endsection