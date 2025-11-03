@extends('layouts.app', ['title' => 'Boxplot', 'subTitle' => 'Chart', 'pageTitle' => 'Boxplot'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Basic Boxplot</h4>
                <div dir="ltr">
                    <div id="basic-boxplot" class="apex-charts" data-colors="#3e60d5,#47ad77"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scatter Boxplot </h4>
                <div dir="ltr">
                    <div id="scatter-boxplot" class="apex-charts" data-colors="#fa5c7c,#6c757d"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Horizontal BoxPlot</h4>
                <div dir="ltr">
                    <div id="horizontal-boxplot" class="apex-charts" data-colors="#3e60d5,#47ad77,#e3eaef"></div>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/apex-boxplot.js'])
@endsection
