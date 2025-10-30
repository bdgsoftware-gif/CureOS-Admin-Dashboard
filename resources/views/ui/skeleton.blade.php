@extends('layouts.vertical', ['title' => 'Skeleton', 'subTitle' => 'Components', 'pageTitle' => 'Skeleton'])

@section('content')

<div class="grid lg:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h5 class="card-title mb-1">Placeholders</h5>

            <div class="pt-5">
                <div class="grid grid-cols-2 gap-6">

                    <div class="card">
                        <div class="rounded-md">

                            <div class="card-img">
                                <img src="/images/small/small-1.jpg" class="rounded-t-md">
                            </div> <!-- card-img-end -->

                            <div class="p-6">
                                <h5 class="card-title mb-2">Card title</h5>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn bg-primary text-white mt-5">Go somewhere</button> <!-- button-end -->
                            </div>

                        </div>
                    </div> <!-- col-end -->

                    <div class="card">
                        <div class="rounded-md">

                            <div class="card-img">
                                <div class="bg-teal-500 h-44 rounded-t-md"></div>
                            </div>

                            <div class="p-6">
                                <div class="w-1/2 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></div>

                                <ul class="space-y-2 mt-5">
                                    <div class="flex gap-1">
                                        <li class="w-3/5 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></li>
                                        <li class="w-2/5 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></li>
                                    </div>
                                    <div class="flex gap-1">
                                        <li class="w-2/5 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></li>
                                        <li class="w-3/5 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></li>
                                    </div>
                                    <li class="w-4/5 h-4 animate-pulse cursor-wait bg-gray-200 dark:bg-gray-700"></li>
                                </ul> <!-- ul-end -->

                                <div class="w-1/2 h-10 rounded-md bg-primary/50 dark:bg-gray-700 mt-5"></div>
                            </div>

                        </div>
                    </div> <!-- col-end -->

                </div> <!-- grid-end -->
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="space-y-6">

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Color</h5>

                <div class="pt-5">
                    <ul class="space-y-2">
                        <li class="w-full h-4 cursor-wait bg-gray-200"></li>
                        <li class="w-full h-4 cursor-wait bg-primary/50"></li>
                        <li class="w-full h-4 cursor-wait bg-secondary/50"></li>
                        <li class="w-full h-4 cursor-wait bg-success/50"></li>
                        <li class="w-full h-4 cursor-wait bg-danger/50"></li>
                        <li class="w-full h-4 cursor-wait bg-warning/50"></li>
                        <li class="w-full h-4 cursor-wait bg-info/50"></li>
                        <li class="w-full h-4 cursor-wait bg-light/50"></li>
                        <li class="w-full h-4 cursor-wait bg-dark/50"></li>
                    </ul> <!-- ul-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Width</h5>

                <div class="pt-5">
                    <ul class="space-y-2">
                        <li class="w-1/2 h-4 cursor-wait bg-gray-200"></li>
                        <li class="w-3/4 h-4 cursor-wait bg-gray-200"></li>
                        <li class="w-1/4 h-4 cursor-wait bg-gray-200"></li>
                    </ul> <!-- ul-end -->
                </div>

            </div>
        </div> <!-- card-end -->

    </div> <!-- col-end -->

    <div class="card">
        <div class="p-6">
            <h5 class="card-title mb-1">Sizing</h5>

            <div class="pt-5">
                <ul class="space-y-2">
                    <li class="w-full h-5 cursor-wait bg-gray-200"></li>
                    <li class="w-full h-4 cursor-wait bg-gray-200"></li>
                    <li class="w-full h-3 cursor-wait bg-gray-200"></li>
                    <li class="w-full h-2 cursor-wait bg-gray-200"></li>
                </ul> <!-- ul-end -->
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h5 class="card-title mb-1">How it works</h5>

            <div class="pt-5">
                <ul class="space-y-5">
                    <li class="w-1/2 h-4 cursor-wait bg-gray-200"></li>
                    <li class="w-1/3 h-10 rounded-md bg-primary/50"></li>
                </ul> <!-- ul-end -->
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="p-6">
            <h5 class="card-title mb-1">Animation</h5>

            <div class="pt-5">
                <ul class="space-y-5">
                    <li class="animate-pulse w-full h-4 cursor-wait bg-gray-200"></li>
                    <li class="w-full h-4 cursor-wait bg-gray-200"></li>
                </ul> <!-- ul-end -->
            </div>

        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection