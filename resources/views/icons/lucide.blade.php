@extends('layouts.vertical', ['title' => 'Lucide Icons' , 'subTitle' => 'Icons', 'pageTitle' => 'Lucide Icons'])

@section('content')

    <div class="card">
        <div class="p-6">
            <h5 class="card-title mb-4">All Icons</h5>
            <p class="card-title-desc mb-6">Use <code>&lt;i data-lucide="menu"&gt;&lt;/i&gt;</code></p>

            <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-6 icons-list-demo" id="icons"></div>
        </div>
    </div> <!-- end card -->

@endsection

@section('script')
    @vite(['resources/js/pages/icons-lucide.js'])
@endsection
