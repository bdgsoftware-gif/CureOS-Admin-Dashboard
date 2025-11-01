@extends('layouts.app', ['title' => 'Popover', 'subTitle' => 'Components', 'pageTitle' => 'Popover'])

@section('content')
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Default Popover</h4>

                <button class="btn bg-primary text-white" data-fc-target="default-tooltip" data-fc-trigger="click"
                    data-fc-type="tooltip">
                    Click me
                </button>
                <div id="default-tooltip"
                    class="bg-slate-700 hidden mt-1 px-2 py-1 rounded transition-all text-white opacity-0 z-50">
                    Believe me! I'm Popover 😀
                    <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Auto Targeting Popover</h4>

                <button class="btn bg-primary text-white" data-fc-trigger="click" data-fc-type="tooltip">
                    Click me
                </button>
                <div class="bg-slate-700 hidden mt-1 px-2 py-1 rounded transition-all text-white opacity-0 z-50">
                    It's magic
                    <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Four directions Popovers</h4>

                <div class="flex flex-wrap gap-3">
                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="top" data-fc-trigger="click"
                            class="btn bg-primary/10 text-primary">
                            Popover on Top
                        </button>
                        <div class="bg-gray-400 hidden px-3 py-1 rounded-md transition-all text-white opacity-0 z-50">
                            Top popover
                            <div data-fc-arrow class="bg-gray-400 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                        </div>
                    </div>

                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="bottom" data-fc-trigger="click"
                            class="btn bg-primary/10 text-primary">
                            Popover on Bottom
                        </button>
                        <div class="bg-gray-400 hidden px-3 py-1 rounded-md transition-all text-white opacity-0 z-50">
                            Bottom popover
                            <div data-fc-arrow class="bg-gray-400 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                        </div>
                    </div>

                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="left" data-fc-trigger="click"
                            class="btn bg-primary/10 text-primary">
                            Popover on Left
                        </button>
                        <div class="bg-gray-400 hidden px-3 py-1 rounded-md transition-all text-white opacity-0 z-50">
                            <div data-fc-arrow class="bg-gray-400 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                            Left popover
                        </div>
                    </div>

                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="right" data-fc-trigger="click"
                            class="btn bg-primary/10 text-primary">
                            Popover on Right
                        </button>
                        <div class="bg-gray-400 hidden px-3 py-1 rounded-md transition-all text-white opacity-0 z-50">
                            Right popover
                            <div data-fc-arrow class="bg-gray-400 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">With content Popover</h4>

                <div class="flex flex-wrap gap-3">
                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="top" data-fc-trigger="click"
                            class="btn bg-primary text-white">
                            Popover With Text
                        </button>
                        <div class="w-72 hidden z-50">
                            <div data-fc-arrow
                                class="bg-white border border-gray-100 w-3 h-3 rotate-45 -z-10 rounded-[1px] dark:bg-gray-800 dark:border-gray-700">
                            </div>
                            <div class="bg-white border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                                <div class="px-4 py-3 border-b dark:border-gray-700">Popover title</div>
                                <div class="p-4">
                                    And here's some amazing content. It's very engaging. Right?
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" data-fc-type="tooltip" data-fc-placement="bottom" data-fc-trigger="click"
                            class="btn bg-primary text-white">
                            Popover with Images
                        </button>

                        <div class="hidden z-50">
                            <div data-fc-arrow
                                class="bg-white border border-gray-100 shadow-lg w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-gray-800 dark:border-gray-700">
                            </div>
                            <div class="max-w-xs bg-white border border-gray-100 text-left rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                                role="tooltip">
                                <span
                                    class="pt-3 px-4 block text-lg font-bold text-gray-800 dark:text-white">Overview</span>
                                <div class="py-3 px-4 text-sm text-gray-600 dark:text-gray-400">
                                    <img src="https://placehold.co/600x400" class="mb-3 rounded" alt="images">
                                    <p>This is a popover body with supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <dl class="mt-3">
                                        <dt class="font-bold pt-3 first:pt-0 dark:text-white">Assigned to:</dt>
                                        <dd class="text-gray-600 dark:text-gray-400">Mark Welson</dd>
                                        <dt class="font-bold pt-3 first:pt-0 dark:text-white">Due:</dt>
                                        <dd class="text-gray-600 dark:text-gray-400">December 21, 2021</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
