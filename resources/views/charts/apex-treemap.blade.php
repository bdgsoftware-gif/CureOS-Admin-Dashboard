@extends('layouts.app', ['title' => 'Treemap', 'subTitle' => 'Chart', 'pageTitle' => 'Treemap'])

@section('content')
    <div class="grid md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Basic Treemap</h4>
                <div dir="ltr">
                    <div id="basic-treemap" class="apex-charts" data-colors="#39afd1"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Treemap Multiple Series</h4>
                <div dir="ltr">
                    <div id="multiple-treemap" class="apex-charts" data-colors="#fa5c7c,#6c757d"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Distributed Treemap</h4>
                <div dir="ltr">
                    <div id="distributed-treemap" class="apex-charts"
                        data-colors="#3e60d5,#47ad77,#fa5c7c,#6c757d,#39afd1,#ffc35a, #eef2f7, #313a46"></div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Color Range Treemap</h4>
                <div dir="ltr">
                    <div id="color-range-treemap" class="apex-charts" data-colors="#3e60d5,#39afd1"></div>
                </div>
            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection

@section('script')
    @vite(['resources/js/pages/apex-treemap.js'])
@endsection
