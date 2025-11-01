@extends('layouts.app', ['title' => 'Spinners', 'subTitle' => 'Components', 'pageTitle' => 'Spinners'])

@section('content')
    <div class="grid lg:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Border Spinner</h5>

                <div class="pt-5">
                    <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-secondary rounded-full"
                        role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Growing Spinner</h5>

                <div class="pt-5">
                    <div class="h-5 w-5">
                        <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Colors</h5>

                <div class="pt-5">
                    <div class="flex flex-wrap gap-6">
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-primary rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-secondary rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-success rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-danger rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-warning rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-info rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-light rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-dark rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Color Growing Spinner</h5>

                <div class="pt-5">
                    <div class="flex flex-wrap gap-10">
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-primary/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-success/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-danger/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-warning/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-info/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-light/75"></span>
                        </div>
                        <div class="h-5 w-5">
                            <span class="animate-ping inline-flex h-full w-full rounded-full bg-dark/75"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Alignment</h5>

                <div class="pt-5">
                    <div class="flex justify-center items-center">
                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-secondary rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Placement</h5>

                <div class="pt-5">
                    <div class="flex justify-between items-center">
                        <strong>Loading...</strong>

                        <div class="animate-spin w-8 h-8 border-[3px] border-current border-t-transparent text-secondary rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Size</h5>

                <div class="pt-5">
                    <div class="grid sm:grid-cols-2 gap-6">

                        <div class="flex items-center gap-12">
                            <div class="animate-spin w-24 h-24 border-[3px] border-current border-t-transparent text-primary rounded-full"
                                role="status" aria-label="loading">
                                <span class="sr-only">Loading...</span>
                            </div> <!-- spin primary end -->

                            <div class="h-14 w-14">
                                <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                            </div> <!-- ping secondary end -->
                        </div> <!-- flex end -->

                        <div class="flex items-center gap-12">
                            <div class="animate-spin w-20 h-20 border-[3px] border-current border-t-transparent text-primary rounded-full"
                                role="status" aria-label="loading">
                                <span class="sr-only">Loading...</span>
                            </div> <!-- spin primary end -->

                            <div class="h-12 w-12">
                                <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                            </div> <!-- ping secondary end -->
                        </div> <!-- flex end -->

                        <div class="flex items-center gap-12">
                            <div class="animate-spin w-14 h-14 border-[3px] border-current border-t-transparent text-primary rounded-full"
                                role="status" aria-label="loading">
                                <span class="sr-only">Loading...</span>
                            </div> <!-- spin primary end -->

                            <div class="h-8 w-8">
                                <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                            </div> <!-- ping secondary end -->
                        </div> <!-- flex end -->

                        <div class="flex items-center gap-12">
                            <div class="animate-spin w-5 h-5 border-[3px] border-current border-t-transparent text-primary rounded-full"
                                role="status" aria-label="loading">
                                <span class="sr-only">Loading...</span>
                            </div> <!-- spin primary end -->

                            <div class="h-3 w-3">
                                <span class="animate-ping inline-flex h-full w-full rounded-full bg-secondary/75"></span>
                            </div> <!-- ping secondary end -->
                        </div> <!-- flex end -->

                    </div> <!-- grid-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Buttons Spinner</h5>

                <div class="pt-5">
                    <div class="grid sm:grid-cols-2 gap-6">

                        <div class="flex items-center gap-4">
                            <button type="button" class="btn bg-primary/60 text-white cursor-default">
                                <div class="animate-spin w-5 h-5 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button> <!-- button-end -->

                            <button type="button" class="btn bg-primary/60 text-white cursor-default gap-3">
                                <div class="animate-spin w-5 h-5 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Loading...
                            </button> <!-- button-end -->
                        </div> <!-- flex-end -->

                        <div class="flex items-center gap-4">
                            <button type="button" class="btn bg-primary/60 text-white cursor-default">
                                <div class="flex items-center h-5 w-5">
                                    <span class="animate-ping inline-flex h-3 w-3 rounded-full bg-white"></span>
                                </div>
                            </button> <!-- button-end -->

                            <button type="button" class="btn bg-primary/60 text-white cursor-default gap-3">
                                <div class="flex items-center h-5 w-5">
                                    <span class="animate-ping inline-flex h-3 w-3 rounded-full bg-white"></span>
                                </div>
                                Loading...
                            </button> <!-- button-end -->
                        </div> <!-- flex-end -->

                    </div> <!-- grid-end -->
                </div>

            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection
