@extends("layouts.vertical", ['title' => 'Aspect Ratio', 'subTitle' => 'Components', 'pageTitle' => 'Aspect Ratio'])

@section('content')

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Aspect Ratio 21:9</h4>

            <!-- 21:9 aspect ratio -->
            <div class="aspect-w-7 aspect-h-3">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Aspect Ratio 16:9</h4>

            <!-- 16:9 aspect ratio -->
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Aspect Ratio 1:1</h4>
            <!-- 1:1 aspect ratio -->
            <div class="aspect-w-1 aspect-h-1">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Aspect Ratio 4:3</h4>

            <!-- 4:3 aspect ratio -->
            <div class="aspect-w-4 aspect-h-3">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>

@endsection