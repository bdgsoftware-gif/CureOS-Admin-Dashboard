@extends('layouts.vertical', ['title' => 'Column', 'subTitle' => 'Chart', 'pageTitle' => 'Column'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Basic Column Chart</h4>
            <div dir="ltr">
                <div id="basic-column" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-3">Column Chart with Datalabels</h4>
            <div dir="ltr">
                <div id="datalabels-column" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Stacked Column Chart</h4>
            <div dir="ltr">
                <div id="stacked-column" class="apex-charts" data-colors="#39afd1,#ffbc00,#e3eaef"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">100% Stacked Column Chart</h4>
            <div dir="ltr">
                <div id="full-stacked-column" class="apex-charts" data-colors="#39afd1,#47ad77,#e3eaef"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Column with Markers</h4>
            <div dir="ltr">
                <div id="column-with-markers" class="apex-charts" data-colors="#3e60d5,#ffbc00"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Column with Group Label</h4>
            <div dir="ltr">
                <div id="column-with-group-label" class="apex-charts" data-colors="#39afd1,#47ad77,#e3eaef"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Column Chart with rotated labels & Annotations</h4>
            <div dir="ltr">
                <div id="rotate-labels-column" class="apex-charts" data-colors="#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Column Chart with negative values</h4>
            <div dir="ltr">
                <div id="negative-value-column" class="apex-charts" data-colors="#3e60d5"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Distributed Column Chart</h4>
            <div dir="ltr">
                <div id="distributed-column" class="apex-charts" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#ffbc00,#39afd1,#e3eaef,#313a46"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Range Column Chart</h4>
            <div dir="ltr">
                <div id="range-column" class="apex-charts" data-colors="#47ad77,#39afd1"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="xl:col-span-2">
        <div class="card">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h4 class="card-title mb-4">Dynamic Loaded Chart</h4>
                    <div class="flex-shrink-0">
                        <select id="model" class="form-select form-select-sm">
                            <option value="iphone5">iPhone 5</option>
                            <option value="iphone6">iPhone 6</option>
                            <option value="iphone7">iPhone 7</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-6 pt-0">
                <h4 class="card-title"></h4>
                <div dir="ltr">
                    <div class="grid grid-cols-2">
                        <div class="col-span-1">
                            <div id="chart-year" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#ffbc00,#39afd1"></div>
                        </div>
                        <div class="col-span-1">
                            <div id="chart-quarter" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#ffbc00,#39afd1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div><!-- end col-span-2 -->
</div><!-- end Grid -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-column.js'])
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>
@endsection