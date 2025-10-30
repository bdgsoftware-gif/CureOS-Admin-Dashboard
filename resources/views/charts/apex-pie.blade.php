@extends('layouts.vertical', ['title' => 'Pie', 'subTitle' => 'Chart', 'pageTitle' => 'Pie'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Simple Pie Chart</h4>
            <div dir="ltr">
                <div id="simple-pie" class="apex-charts" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#e3eaef"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Simple Donut Chart</h4>
            <div dir="ltr">
                <div id="simple-donut" class="apex-charts" data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#47ad77"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Monochrome Pie Chart</h4>
            <div dir="ltr">
                <div id="monochrome-pie" class="apex-charts"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Gradient Donut Chart</h4>
            <div dir="ltr">
                <div id="gradient-donut" class="apex-charts" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c,#e3eaef"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Patterned Donut Chart</h4>
            <div dir="ltr">
                <div id="patterned-donut" class="apex-charts" data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#47ad77"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Pie Chart with Image fill</h4>
            <div dir="ltr">
                <div id="image-pie" class="apex-charts" data-colors="#39afd1,#ffbc00,#3e60d5,#47ad77"></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Donut Update</h4>
            <div dir="ltr">
                <div id="update-donut" class="apex-charts" data-colors="#3e60d5,#6c757d,#47ad77,#fa5c7c"></div>
            </div>

            <div class="text-center mt-2">
                <button class="btn btn-sm btn-primary" id="randomize">RANDOMIZE</button>
                <button class="btn btn-sm btn-primary" id="add">ADD</button>
                <button class="btn btn-sm btn-primary" id="remove">REMOVE</button>
                <button class="btn btn-sm btn-primary" id="reset">RESET</button>
            </div> <!-- button-end -->
        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-pie.js'])
@endsection