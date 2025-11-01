@extends('layouts.app', ['title' => 'Timeline', 'subTitle' => 'Chart', 'pageTitle' => 'Timeline'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4 mb-3">Basic Timeline</h4>
                <div dir="ltr">
                    <div id="basic-timeline" class="apex-charts" data-colors="#fa6767"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4 mb-3">Distributed Timeline </h4>
                <div dir="ltr">
                    <div id="distributed-timeline" class="apex-charts"
                        data-colors="#3e60d5,#47ad77,#fa5c7c,#6c757d,#39afd1"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4 mb-3">Multi Series Timeline</h4>

                <div dir="ltr">
                    <div id="multi-series-timeline" class="apex-charts" data-colors="#6c757d,#39afd1"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4 mb-3">Advanced Timeline</h4>
                <div dir="ltr">
                    <div id="advanced-timeline" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4 mb-3">Multiple Series - Group Rows</h4>
                <div dir="ltr">
                    <div id="group-rows-timeline" class="apex-charts"
                        data-colors="#3e60d5,#47ad77,#fa5c7c,#6c757d,#39afd1,#ffc35a, #eef2f7, #313a46,#3577f1, #0ab39c, #f0a548,#68eaff">
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/apex-timeline.js'])
@endsection
