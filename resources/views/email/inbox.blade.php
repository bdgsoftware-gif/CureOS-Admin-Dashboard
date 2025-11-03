@extends('layouts.app', ['title' => 'Email Inbox', 'subTitle' => 'Apps', 'pageTitle' => 'Email Inbox'])

@section('css')
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.bubble.css', 'node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <div class="lg:flex w-full gap-2">
        <!-- Email Sidebar Menu -->
        <div id="email-sidebar"
            class="lg:block hidden inset-y-0 start-0 transform fc-offcanvas-open:translate-x-0 lg:z-0 z-50 fixed lg:static lg:translate-x-0 -translate-x-full lg:rtl:-translate-x-0 rtl:translate-x-full transition-all duration-300"
            tabindex="-1">
            <div class="card min-w-80 h-full min-h-full rounded-none lg:rounded-md">
                <div data-simplebar class="h-full p-6">
                    <a href="javascript:void(0)" data-fc-target="default-modal" data-fc-type="modal" type="button"
                        type="button" class="btn bg-danger inline-flex justify-center text-white w-full">
                        Compose
                    </a>

                    <div class="mt-6">
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-bold text-danger"><i
                                class="ri-inbox-line me-2"></i>Inbox<span
                                class="py-0.5 px-1.5 text-xs rounded bg-danger/10 text-danger ms-auto">7</span></a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-star-line me-2"></i>Starred</a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-time-line me-2"></i>Snoozed</a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-article-line me-2"></i>Draft<span
                                class="py-0.5 px-1.5 text-xs rounded bg-info/10 text-info ms-auto">32</span></a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-mail-send-line me-2"></i>Sent Mail</a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-delete-bin-line me-2"></i>Trash</a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-price-tag-3-line me-2"></i>Important</a>
                        <a href="javascript: void(0);"
                            class="py-2 px-1.5 text-sm flex items-center font-medium text-gray-400 hover:text-gray-800 dark:hover:text-white"><i
                                class="ri-alert-line me-2"></i>Spam</a>
                    </div>

                    <div class="mt-9">
                        <h6 class="uppercase">Labels</h6>
                        <div class="mt-4">
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-info me-2"></i>
                                <span>Updates</span>
                            </a>
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-warning me-2"></i>
                                <span>Friends</span>
                            </a>
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-success me-2"></i>
                                <span>Family</span>
                            </a>
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-primary me-2"></i>
                                <span>Social</span>
                            </a>
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-danger me-2"></i>
                                <span>Important</span>
                            </a>
                            <a href="javascript: void(0);"
                                class="py-2 px-1.5 text-sm font-medium flex items-center text-gray-400 hover:text-gray-800 dark:hover:text-white">
                                <i class="ri-checkbox-blank-circle-fill text-sm text-secondary me-2"></i>
                                <span>Promotions</span>
                            </a>
                        </div>
                    </div>

                    <div class="mt-16">
                        <span
                            class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-sm/none font-semibold uppercase bg-gray-900/20 text-gray-900 dark:bg-gray-700 dark:text-gray-400 open:opacity-0">Free</span>
                        <h6 class="text-uppercase mt-3">Storage</h6>
                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 mt-4">
                            <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar"
                                style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-gray-500 mt-4 text-xs">7.02 GB (46%) of 15 GB used</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email List -->
        <div class="card p-6 min-w-auto">
            <div class="flex flex-wrap items-center gap-2">
                <div class="lg:hidden block">
                    <button data-fc-target="email-sidebar" data-fc-type="offcanvas"
                        class="inline-flex items-center justify-center text-gray-700 border border-gray-300 rounded shadow hover:bg-slate-100 dark:text-gray-400 hover:dark:bg-gray-800 dark:border-gray-700 transition h-9 w-9 duration-100">
                        <div class="ri-menu-2-fill text-lg"></div>
                    </button>
                </div>
                <div class="inline-flex">
                    <button type="button" class="btn bg-secondary/90 text-white rounded-e-none hover:bg-secondary"><i
                            class="ri-inbox-archive-line text-base"></i></button>
                    <button type="button" class="btn bg-secondary/90 text-white rounded-none hover:bg-secondary"><i
                            class="ri-spam-2-line text-base"></i></button>
                    <button type="button" class="btn bg-secondary/90 text-white rounded-s-none hover:bg-secondary"><i
                            class="ri-delete-bin-line text-base"></i></button>
                </div>
                <div class="relative rounded inline-flex align-middle">
                    <button type="button" class="btn bg-secondary/90 text-white rounded hover:bg-secondary"
                        data-fc-type="dropdown">
                        <i class="ri-folder-2-line text-base"></i>
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div
                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                        <span class="flex items-center py-1.5 px-3.5 text-sm text-gray-500 dark:text-gray-400">Move
                            to:</span>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Social</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Promotions</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Updates</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Forums</a>
                    </div>
                </div>
                <div class="relative rounded inline-flex align-middle">
                    <button class="btn bg-secondary/90 text-white rounded hover:bg-secondary" data-fc-type="dropdown">
                        <i class="ri-price-tag-3-line text-base"></i>
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div
                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                        <span class="flex items-center py-1.5 px-3.5 text-sm text-gray-500 dark:text-gray-400">Label
                            as:</span>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Updates</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Social</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Promotions</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Forums</a>
                    </div>
                </div>
                <div class="relative rounded inline-flex align-middle">
                    <button class="btn bg-secondary/90 text-white rounded hover:bg-secondary" data-fc-type="dropdown">
                        <i class="ri-more-line text-base me-1"></i> More
                        <i class="ri-arrow-down-s-line"></i>
                    </button>
                    <div
                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                        <span class="flex items-center py-1.5 px-3.5 text-sm text-gray-500 dark:text-gray-400">More Options
                            :</span>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Mark as Unread</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Add to Tasks</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Add Star</a>
                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="javascript: void(0);">Mute</a>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Lucas Kriebel (via Twitter)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">Lucas Kriebel (@LucasKriebel) has sent you a
                                        direct message on Twitter!&nbsp;–&nbsp; @LucasKriebel - Very cool :) Nicklas,
                                        You have a new direct message.</a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">11:49 am</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Andrew Zimmer</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">OMochila Beta: Subscription Confirmed
                                        &nbsp;–&nbsp; <span>You've been confirmed! Welcome to the ruling class of the inbox.
                                            For your records, here is a copy of the information you submitted to
                                            us...</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Mar 8</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-800 dark:text-gray-200">Infinity HR</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-800 dark:text-gray-200">
                                        Sveriges Hetaste sommarjobb &nbsp;&ndash;&nbsp;
                                        <span>Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett
                                            rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Mar 8</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Web Support Dennis</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Re: New mail settings &nbsp;&ndash;&nbsp;
                                        <span>Will you answer him asap?</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Mar 7</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">me, Peter (2)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Off on Thursday &nbsp;&ndash;&nbsp;
                                        <span>Eff that place, you might as well stay here with us instead! Sent from my
                                            iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Mar 7</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Medium</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        This Week's Top Stories &nbsp;&ndash;&nbsp;
                                        <span>Our top pick for you on Medium this week The Man Who Destroyed America’s
                                            Ego</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Mar 7</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Death to Stock</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Montly High-Res Photos &nbsp;&ndash;&nbsp;
                                        <span>To create this month's pack, we hosted a party with local musician Jared
                                            Mahone here in Columbus, Ohio.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 28</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Reviber</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Weekend on Revibe &nbsp;&ndash;&nbsp;
                                        <span>Today's Friday and we thought maybe you want some music inspiration for the
                                            weekend. Here are some trending tracks and playlists we think you should give a
                                            listen!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 27</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Erik, me (5)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Regarding our meeting &nbsp;&ndash;&nbsp;
                                        <span>That's great, see you on Thursday!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 24</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">KanbanFlow</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Task assigned: Clone ARP's website
                                        &nbsp;&ndash;&nbsp; <span>You have been assigned a task by Alex@Work on the board
                                            Web.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 24</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Tobias Berg</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Let's go fishing! &nbsp;&ndash;&nbsp;
                                        <span>Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 23</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Charukaw, me (7)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Hey man &nbsp;&ndash;&nbsp;
                                        <span>Nah man sorry i don't. Should i get it?</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 23</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-800 dark:text-gray-200">me, Peter (5)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-800 dark:text-gray-200">
                                        Home again! &nbsp;&ndash;&nbsp;
                                        <span>That's just perfect! See you tomorrow.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-800 dark:text-gray-200 w-20 text-end">Feb 21</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Stack Exchange</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        1 new items in your Stackexchange inbox&nbsp;&ndash;&nbsp;
                                        <span>The following items were added to your Stack Exchange global inbox since you
                                            last checked it.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 21</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Google Drive Team</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        You can now use your storage in Google
                                        Drive &nbsp;&ndash;&nbsp; <span>Hey Nicklas Sandell! Thank you for purchasing extra
                                            storage space in Google Drive.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Feb 20</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-800 dark:text-gray-200">me, Susanna (11)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-800 dark:text-gray-200">
                                        Train/Bus &nbsp;&ndash;&nbsp;
                                        <span>Yes ok, great! I'm not stuck in Stockholm anymore, we're making
                                            progress.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-800 dark:text-gray-200 w-20 text-end">Feb 19</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-800 hover:text-danger dark:text-gray-200"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Peter, me (3)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Hello &nbsp;&ndash;&nbsp;
                                        <span>Trip home from Colombo has been arranged, then Jenna will come get me from
                                            Stockholm. :)</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Jan 28</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">me, Susanna (7)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Since you asked... and i'm inconceivably bored at the train station
                                        &nbsp;&ndash;&nbsp;
                                        <span>Alright thanks. I'll have to re-book that somehow, i'll get back to
                                            you.</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Jan 25</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative px-4 py-3 transition-all duration-500 hover:bg-light/50 overflow-hidden dark:hover:bg-light/5">
                    <div class="flex items-center h-full">
                        <!-- Read Checkbox -->
                        <input type="checkbox" class="form-checkbox rounded">

                        <!-- Star -->
                        <i class="ri-star-line mx-5 text-lg text-warning"></i>

                        <!-- Email Subject -->
                        <div class="grid grid-cols-10 font-medium whitespace-nowrap flex-grow">
                            <div class="2xl:col-span-2 xl:col-span-4 sm:col-span-5 col-span-10">
                                <a href="#" class="text-gray-500">Randy, me (5)</a>
                            </div>

                            <div class="2xl:col-span-8 xl:col-span-6 sm:col-span-5 hidden sm:block">
                                <div class="truncate overflow-hidden">
                                    <a href="#" class="text-gray-500">
                                        Last pic over my village &nbsp;&ndash;&nbsp;
                                        <span>Yeah i'd like that! Do you remember the video you showed me of your train ride
                                            between Colombo and Kandy? The one with the mountain view? I would love to see
                                            that one again!</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Time -->
                        <div class="whitespace-nowrap hidden sm:block">
                            <div class="text-gray-500 w-20 text-end">Jan 22</div>
                        </div>
                    </div>

                    <!-- Email Action -->
                    <div class="absolute inset-y-0 -end-52 transition-all group-hover:end-0">
                        <div class="flex items-center justify-center gap-4 backdrop-blur-sm px-4 h-full">
                            <a href="javascript: void(0);"><i
                                    class="ri-archive-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-delete-bin-6-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-mail-open-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                            <a href="javascript: void(0);"><i
                                    class="ri-time-line text-xl transition-all duration-500 text-gray-500 hover:text-danger"></i></a>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <div class="">
                        Showing 1 - 20 of 289
                    </div>
                    <div class="">
                        <div class="flex">
                            <button type="button" class="btn btn-sm bg-light text-dark rounded-e-none"><i
                                    class="ri-arrow-left-s-line text-sm"></i></button>
                            <button type="button" class="btn btn-sm bg-info text-light rounded-s-none"><i
                                    class="ri-arrow-right-s-line text-sm"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- card End -->

    <!-- Compose Modal -->
    <div id="default-modal"
        class="w-full h-full mt-5 fixed top-0 start-0 z-50 transition-all duration-500 fc-modal hidden">
        <div
            class="fc-modal-open:opacity-100 duration-500 opacity-0 overflow-hidden ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
            <div class="flex justify-between items-center p-4 bg-primary ">
                <h3 class="font-semibold text-white text-lg">
                    New Message
                </h3>
                <button class="text-white" data-fc-dismiss type="button">
                    <i class="ri-close-line text-xl"></i>
                </button>
            </div>
            <div class="p-1.5">
                <div class="px-6 pt-6 pb-0">
                    <form>
                        <div class="mb-3 space-y-2">
                            <label for="msgto" class="text-gray-500 font-semibold">To</label>
                            <input type="text" id="msgto" class="form-input" placeholder="Example@email.com">
                        </div>

                        <div class="mb-3 space-y-2">
                            <label for="mailsubject" class="text-gray-500 font-semibold">Subject</label>
                            <input type="text" id="mailsubject" class="form-input" placeholder="Your subject">
                        </div>

                        <div class="mb-3">
                            <label class="text-gray-500 font-semibold mb-2">Message</label>
                            <div id="snow-editor" style="height: 200px;">
                                <h3>This is a simple editable area.</h3>
                                <p>
                                    End of simple area
                                </p>
                            </div><!-- end Snow-editor-->
                        </div>
                    </form>
                </div>
                <div class="flex items-center gap-1 px-6 py-6">
                    <button type="button" class="btn bg-primary text-white" data-fc-dismiss><i
                            class="ri-send-plane-2-line me-1"></i> Send Message
                    </button>
                    <button type="button" class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-gray-200"
                        data-fc-dismiss>Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/apps-inbox.js'])
@endsection
