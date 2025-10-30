@extends('layouts.vertical', ['title' => 'Ratings', 'subTitle' => 'Extended', 'pageTitle' => 'Ratings'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">

            <div class="flex justify-between items-center">
                <h4 class="card-title mb-1">Rater Js Example</h4>
            </div> <!-- card-title end -->

            <div class="pt-5">
                <div id="basic-rater"></div>
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">

            <div class="flex justify-between items-center">
                <h4 class="card-title mb-1">5 star rater with step</h4>
            </div> <!-- card-title end -->

            <div class="pt-5">
                <div id="rater-step"></div>
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">

            <div class="flex justify-between items-center">
                <h4 class="card-title mb-1">Random Number Betweeen</h4>
            </div> <!-- card-title end -->

            <div class="pt-5">
                <div id="rater-message"></div>
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">

            <div class="flex justify-between items-center">
                <h4 class="card-title mb-1">On hover Event</h4>
            </div> <!-- card-title end -->

            <div class="pt-5">
                <div>
                    <div id="rater-onhover" class="align-middle"></div>
                    <span class="ratingnum inline-block text-center rounded-full w-6 h-full text-sm bg-info text-white align-middle ms-2"></span>
                </div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">

            <div class="flex justify-between items-center">
                <h4 class="card-title mb-1">Clear/Reset rater</h4>
            </div> <!-- card-title end -->

            <div class="pt-5">
                <div class="flex items-center">
                    <div id="raterreset" class="align-middle"></div>
                    <span class="clear-rating"></span>
                    <button id="raterreset-button" class="btn btn-sm bg-primary text-white ms-4">Reset</button>
                </div>
            </div>

        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection

@section('script')
@vite(['resources/js/pages/extended-ratings.js'])
@endsection