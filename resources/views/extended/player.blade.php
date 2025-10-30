@extends('layouts.vertical', ['title' => 'Player', 'subTitle' => 'Extended', 'pageTitle' => 'Player'])

@section('css')
@vite(['node_modules/plyr/dist/plyr.css'])
@endsection

@section('content')

<div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
    <div class="card overflow-hidden">
        <div class="p-6">
            <h4 class="card-title mb-4">Youtube Player</h4>

            <div class="rounded-xl overflow-hidden">
                <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY" allowfullscreen></div>
            </div>
        </div>
    </div>

    <div class="card overflow-hidden">
        <div class="p-6">
            <h4 class="card-title mb-4">Vimeo Player</h4>

            <div class="rounded-xl overflow-hidden">
                <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/pages/extended-plyr.js'])
@endsection