@extends('layouts.vertical', ['title' => 'Bubble', 'subTitle' => 'Chart', 'pageTitle' => 'Bubble'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Simple Bubble Chart</h4>
            <div dir="ltr">
                <div id="simple-bubble" class="apex-charts" data-colors="#3e60d5,#ffbc00,#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">3D Bubble Chart</h4>
            <div dir="ltr">
                <div id="second-bubble" class="apex-charts" data-colors="#3e60d5,#47ad77,#fa5c7c,#39afd1"></div>
            </div>
        </div>
    </div> <!-- end card -->
</div><!-- end Grid -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-bubble.js'])
@endsection