@extends('layouts.vertical', ['title' => 'Tooltip', 'subTitle' => 'Components', 'pageTitle' => 'Tooltip'])

@section('content')

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Placement Tooltips</h4>


            <div class="flex flex-wrap gap-2">
                <div>
                    <button class="btn bg-primary text-white" data-fc-type="tooltip" data-fc-placement="bottom">
                        Tooltip Bottom
                    </button>
                    <div class="bg-slate-700 hidden mt-1 px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Bottom Tooltip
                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-primary text-white" data-fc-type="tooltip" data-fc-placement="right">
                        Tooltip Right
                    </button>
                    <div class="bg-slate-700 hidden ms-1 px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Right Tooltip
                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-primary text-white" data-fc-type="tooltip" data-fc-placement="top">
                        Tooltip Top
                    </button>
                    <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Top Tooltip
                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-primary text-white" data-fc-type="tooltip" data-fc-placement="left">
                        Tooltip Left
                    </button>
                    <div class="bg-slate-700 hidden me-1 px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Left Tooltip
                        <div data-fc-arrow class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Color Tooltips</h4>

            <div class="flex flex-wrap gap-2">
                <div>
                    <button class="btn bg-primary text-white" data-fc-type="tooltip" data-fc-placement="top">
                        Primary
                    </button>
                    <div class="bg-primary hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Primary Tooltip
                        <div data-fc-arrow class="bg-primary w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-danger text-white" data-fc-type="tooltip" data-fc-placement="top">
                        danger
                    </button>
                    <div class="bg-danger hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        danger Tooltip
                        <div data-fc-arrow class="bg-danger w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-success text-white" data-fc-type="tooltip" data-fc-placement="top">
                        success
                    </button>
                    <div class="bg-success hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        success Tooltip
                        <div data-fc-arrow class="bg-success w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>

                <div>
                    <button class="btn bg-info text-white" data-fc-type="tooltip" data-fc-placement="top">
                        Info
                    </button>
                    <div class="bg-info hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                        Info Tooltip
                        <div data-fc-arrow class="bg-info w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Real Example</h4>

            <div class="text-muted">
                You can use frost
                <span class="underline italic cursor-help" data-fc-type="tooltip">tooltip</span>
                <span class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip"> Why you see at bottom
                    <span class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></span>
                </span>
                to specify extra information. You can also use in
                <span class="underline italic cursor-help" data-fc-placement="bottom" data-fc-type="tooltip">large</span>
                <div class="hidden">
                    <div class="max-w-xs bg-white border border-gray-100 text-left rounded-lg dark:bg-gray-800 dark:border-gray-600 p-3">
                        <p class="block text-lg font-medium">Overview</p>
                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                            <img alt="images" class="mb-3 rounded" src="https://placehold.co/300x150">
                            <p>This is a popover body with supporting text below as a natural lead-in to additional content.</p>
                            <dl class="mt-3">
                                <dt class="font-bold pt-3 first:pt-0 dark:text-white">Assigned to:</dt>
                                <dd class="text-gray-600 dark:text-gray-400">Charles East</dd>
                                <dt class="font-bold pt-3 first:pt-0 dark:text-white">Due:</dt>
                                <dd class="text-gray-600 dark:text-gray-400">March 20, 2023</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                Tooltip
            </div>

        </div>
    </div>
</div>

@endsection