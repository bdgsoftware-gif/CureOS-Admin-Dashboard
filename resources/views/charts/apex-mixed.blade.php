@extends('layouts.vertical', ['title' => 'Mixed', 'subTitle' => 'Chart', 'pageTitle' => 'Mixed'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Line & Column Chart</h4>
            <div dir="ltr">
                <div id="line-column-mixed" class="apex-charts" data-colors="#3e60d5,#47ad77"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Multiple Y-Axis Chart</h4>
            <div dir="ltr">
                <div id="multiple-yaxis-mixed" class="apex-charts" data-colors="#3e60d5,#39afd1,#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Line & Area Chart</h4>
            <div dir="ltr">
                <div id="line-area-mixed" class="apex-charts" data-colors="#47ad77,#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Line, Column & Area Chart</h4>
            <div dir="ltr">
                <div id="all-mixed" class="apex-charts" data-colors="#3e60d5,#39afd1,#fa5c7c"></div>
            </div>
        </div>
    </div> <!-- end card -->

</div><!-- end Grid -->

@endsection

@section('script')
@vite(['resources/js/pages/apex-mixed.js'])
@endsection