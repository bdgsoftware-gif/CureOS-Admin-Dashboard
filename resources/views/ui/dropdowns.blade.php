@extends('layouts.app', ['title' => 'Dropdown', 'subTitle' => 'Components', 'pageTitle' => 'Dropdown'])

@section('content')
    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Default</h4>
                <div class="flex flex-wrap gap-2">
                    <div class="">
                        <button data-fc-type="dropdown" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Dropdown button <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-secondary text-sm text-white">
                            Dropdown link <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Menu alignment</h4>
                <div class="flex flex-wrap gap-2">
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" data-fc-placement="right"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Dropdown Right <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="left-start" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Dropdown left <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="top" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Dropdown Top <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="bottom" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Dropdown Bottom <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="top-start" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Top Start <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="top-end" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Top End <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Variant</h4>
                <div class="flex flex-wrap gap-2">
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-primary text-sm text-white">
                            Primary <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Secondary <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-success text-sm text-white">
                            Success <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-info text-sm text-white">
                            Info <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-warning text-sm text-white">
                            Warning <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn bg-danger text-sm text-white">
                            Danger <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Split Variant</h4>
                <div class="flex flex-wrap gap-2">
                    <div class="">
                        <div type="button" class="flex">
                            <button class="btn bg-primary text-white rounded-e-none">Primary</button>
                            <button
                                class="btn bg-primary text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div type="button" class="flex">
                            <button
                                class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white rounded-e-none">Secondary</button>
                            <button
                                class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div type="button" class="flex">
                            <button class="btn bg-success text-white rounded-e-none">Success</button>
                            <button
                                class="btn bg-success text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div type="button" class="flex">
                            <button class="btn bg-info text-white rounded-e-none">Info</button>
                            <button
                                class="btn bg-info text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div type="button" class="flex">
                            <button class="btn bg-warning text-white rounded-e-none">Warning</button>
                            <button
                                class="btn bg-warning text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div type="button" class="flex">
                            <button class="btn bg-danger text-white rounded-e-none">Danger</button>
                            <button
                                class="btn bg-danger text-white px-2 rounded-s-none relative after:content-[''] after:absolute after:inset-0 after:bg-black/10"
                                data-fc-type="dropdown"><i class="ri-arrow-down-s-fill"></i></button>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Another Action
                                </a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                                <hr class="my-2 dark:border-gray-700">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Separated link
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Animated Dropdown</h4>
                <div class="flex flex-wrap gap-2">
                    <button class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white" data-fc-type="dropdown"
                        type="button">
                        Action <i class="ri-arrow-down-s-fill"></i>
                    </button>

                    <div
                        class="hidden bg-white  shadow rounded border fc-dropdown-open:opacity-100 opacity-0 transition-all duration-300 py-1 dark:bg-gray-800 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Another Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Something else here
                        </a>
                        <hr class="my-2 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Separated link
                        </a>
                    </div>

                    <button class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white" data-fc-type="dropdown"
                        type="button">
                        Scaling <i class="ri-arrow-down-s-fill"></i>
                    </button>

                    <div
                        class="hidden bg-white  shadow rounded border dark:border-gray-700 fc-dropdown-open:scale-100 scale-90 origin-top-left transition-all py-1 dark:bg-gray-800">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Another Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Something else here
                        </a>
                        <hr class="my-2 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Separated link
                        </a>
                    </div>

                    <button class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white" data-fc-type="dropdown"
                        type="button">
                        Bouncing <i class="ri-arrow-down-s-fill"></i>
                    </button>

                    <div
                        class="hidden bg-white  shadow rounded border  dark:border-gray-700 fc-dropdown-open:scale-100 scale-105 origin-center transition-all duration-300 py-1 dark:bg-gray-800">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Another Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Something else here
                        </a>
                        <hr class="my-2 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Separated link
                        </a>
                    </div>

                    <button class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white" data-fc-type="dropdown"
                        type="button">
                        Sliding <i class="ri-arrow-down-s-fill"></i>
                    </button>

                    <div
                        class="hidden bg-white  shadow rounded border dark:border-gray-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-1 dark:bg-gray-800">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Another Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Something else here
                        </a>
                        <hr class="my-2 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Separated link
                        </a>
                    </div>

                    <button class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-white" data-fc-type="dropdown"
                        type="button">
                        Sliding 2 <i class="ri-arrow-down-s-fill"></i>
                    </button>

                    <div
                        class="hidden bg-white  shadow rounded border  dark:border-gray-700 fc-dropdown-open:h-[155px] overflow-hidden h-0 origin-center transition-all ease-linear py-1 dark:bg-gray-800">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Another Action
                        </a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Something else here
                        </a>
                        <hr class="my-2 dark:border-gray-700">
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript:void(0)">
                            Separated link
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Sizing</h4>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown"
                            class="btn btn-sm bg-light text-sm text-gray-800">
                            Small <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Default <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" data-fc-type="dropdown" class="btn btn-lg bg-light text-gray-800">
                            Large <i class="ri-arrow-down-s-fill ms-1"></i>
                        </a>

                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                            <hr class="my-2 dark:border-gray-700">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Separated link
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Nested Dropdown</h4>
                <div class="flex flex-wrap gap-2">
                    <div>
                        <button data-fc-type="dropdown" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Two Level Dropdown <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div id="dropdown-target"
                            class="hidden bg-white  shadow rounded-md0 border py-1 dark:bg-gray-800 dark:border-gray-700">
                            <div class="relative">
                                <a class="flex items-center justify-between py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer"
                                    data-fc-offset="8" data-fc-placement="right-start" data-fc-trigger="hover"
                                    data-fc-type="dropdown" type="button">
                                    Actions
                                    <i class="ri-arrow-right-s-fill text-lg/none"></i>
                                </a>

                                <div
                                    class="-ms-2 hidden w-48 bg-white shadow-md rounded border py-1 dark:bg-gray-800 dark:border-gray-700">
                                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        Action
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        Another action
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        Something else here
                                    </a>
                                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        Separated link
                                    </a>
                                </div>
                            </div>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Another Action
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                Something else here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Dropdown With Form Components</h4>
                <div class="flex flex-wrap gap-2">
                    <div>
                        <button data-fc-type="dropdown" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Radio <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div class="hidden bg-white  shadow rounded border py-1 dark:bg-gray-800 dark:border-gray-700">
                            <div
                                class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                <div class="flex">
                                    <input type="radio" name="default-radio" class="shrink-0 form-radio rounded"
                                        id="default-radio">
                                    <label for="default-radio"
                                        class="text-sm text-gray-500 ms-2 dark:text-gray-400">Default
                                        radio</label>
                                </div>
                            </div>
                            <div
                                class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                <div class="flex">
                                    <input type="radio" name="default-radio" class="shrink-0 form-radio rounded"
                                        id="checked-radio" checked>
                                    <label for="checked-radio"
                                        class="text-sm text-gray-500 ms-2 dark:text-gray-400">Checked
                                        radio</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            CheckBox <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div class="hidden bg-white  shadow rounded border py-1 dark:bg-gray-800 dark:border-gray-700">
                            <div
                                class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                <div class="flex">
                                    <input type="checkbox" class="shrink-0 form-checkbox rounded" id="default-checkbox">
                                    <label for="default-checkbox"
                                        class="text-sm text-gray-500 ms-3 dark:text-gray-400">Default
                                        checkbox</label>
                                </div>
                            </div>
                            <div
                                class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-light hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                <div class="flex">
                                    <input type="checkbox" class="shrink-0 form-checkbox rounded" id="checked-checkbox"
                                        checked>
                                    <label for="checked-checkbox"
                                        class="text-sm text-gray-500 ms-3 dark:text-gray-400">Checked
                                        checkbox</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="top" type="button"
                            class="btn bg-light dark:bg-gray-700 dark:text-white text-sm text-gray-800">
                            Form <i class="ri-arrow-down-s-fill ms-1"></i>
                        </button>

                        <div class="hidden bg-white  shadow rounded border p-5 dark:bg-gray-800 dark:border-gray-700">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="mb-2">Email
                                        address</label>
                                    <input type="email" class="form-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp"
                                        class="form-text text-sm text-slate-700 dark:text-slate-400">We'll
                                        never share your email
                                        with anyone else.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="mb-2">Password</label>
                                    <input type="password" class="form-input" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <input type="checkbox" class="form-checkbox rounded border border-gray-200"
                                        id="checkmeout0">
                                    <label class="text-gray-800 text-sm font-medium inline-block" for="checkmeout0">Check
                                        me out !</label>
                                </div>
                                <button type="submit" class="btn bg-primary text-white">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
