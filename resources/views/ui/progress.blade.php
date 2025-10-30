@extends('layouts.vertical', ['title' => 'Progress', 'subTitle' => 'Components', 'pageTitle' => 'Progress'])

@section('content')

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">

    <div class="space-y-6">
        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Examples</h3><!-- end card title -->
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- flex flex-col gap-3 End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Height</h3><!-- end card title -->
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex w-full h-px bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-0.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- flex flex-col gap-3 End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Multiple bars</h3><!-- end card title -->
                </div>
                <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                    <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="flex flex-col justify-center overflow-hidden bg-info dark:bg-white" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div> <!-- progressbar End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Animated stripes</h3><!-- end card title -->
                </div>
                <div class="w-full h-4 bg-black/10 rounded-full">
                    <div class="bg-danger h-4 rounded-s-full w-7/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                </div> <!-- progressbar End -->
            </div>
        </div><!-- Card End -->
    </div><!-- space-y-6 End-->

    <div class="space-y-6">
        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Labels</h3><!-- end card title -->
                </div>
                <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                    <div class="flex flex-col justify-center overflow-hidden bg-primary text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div> <!-- progressbar End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Backgrounds</h3><!-- end card title -->
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-dark" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- flex flex-col gap-3 End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h3 class="card-title mb-5">Striped</h3><!-- end card title -->
                </div>

                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-primary h-4 rounded-s-full w-3/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-success h-4 rounded-s-full w-4/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-info h-4 rounded-s-full w-5/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-warning h-4 rounded-s-full w-6/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-danger h-4 rounded-s-full w-7/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                </div> <!-- flex flex-col gap-3 End -->
            </div>
        </div><!-- Card End -->
    </div><!-- space-y-6 End -->
</div>

@endsection