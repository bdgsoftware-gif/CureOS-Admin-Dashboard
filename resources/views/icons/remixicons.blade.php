@extends('layouts.vertical', ['title' => 'Remix Icons', 'subTitle' => 'Icons', 'pageTitle' => 'Remix Icons'])

@section('content')

<div class="flex flex-col gap-6" id="icons"></div>

@endsection

@section('script')
@vite(['resources/js/pages/icons-remixicons.js'])
@endsection