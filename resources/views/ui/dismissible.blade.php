@extends('layouts.app', ['title' => 'Dismissible', 'subTitle' => 'Components', 'pageTitle' => 'Dismissible'])

@section('content')
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
        <div class="space-y-6">
            <div class="card">
                <div class="p-6">
                    <h4 class="card-title mb-4">Dismissible</h4>

                    <div id="dismiss-example"
                        class="border bg-info/10 text-info border-info/20 rounded px-4 py-3 flex justify-between items-center">
                        <p>
                            <span class="font-medium">Alert:</span>
                            You can dismiss this alert by, simply click on close button
                        </p>
                        <button class="flex-shrink-0" data-fc-dismiss="dismiss-example" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Card Dismissible</h4>

                <div class="card shadow-md max-w-xs relative transition-all duration-300" id="dismiss-card">
                    <div class="absolute end-2 top-2">
                        <button data-fc-dismiss="dismiss-card" type="button" id="dismiss-test"
                            class="ms-auto h-8 w-8 rounded-full bg-gray-500/20 flex justify-center items-center ">
                            <i class="ri-close-line text-xl"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            Card title
                        </h3>
                        <p class="mt-1 text-xs font-medium uppercase text-gray-500 dark:text-gray-500">
                            Card subtitle
                        </p>
                        <p class="mt-2 text-gray-800 dark:text-gray-400">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a class="inline-flex items-center gap-2 mt-5 text-sm font-medium text-primary hover:text-sky-700"
                            href="#">
                            Card link
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
