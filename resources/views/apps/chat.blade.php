@extends('layouts.app', ['title' => 'Chat', 'subTitle' => 'Apps', 'pageTitle' => 'Chat'])

@section('content')
    <div class="relative lg:overflow-visible overflow-hidden">
        <div class="lg:flex gap-4">

            <!-- Chat List -->
            <div class="card lg:min-w-96">
                <div class="p-6">
                    <div class="flex justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <img src="/images/users/avatar-1.jpg" class="rounded-full h-10" alt="Brandon Smith">
                            <div class="w-full">
                                <h5 class="">
                                    <a href="{{ route('second', ['pages', 'profile']) }}">Tosha Minner</a>
                                </h5>
                                <p class="flex items-center">
                                    <small class="ri-checkbox-blank-circle-fill me-1 text-success"></small> Online
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="javascript: void(0);" data-fc-type="dropdown" data-fc-placement="bottom-end">
                                <i class="ri-settings-5-line text-xl"></i>
                            </a>
                            <div
                                class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript: void(0);"><i class="ri-archive-line me-2 text-base"></i>Archive</a>
                                <a class="flex items-center py-1.5 px-5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript: void(0);"><i class="ri-equalizer-line me-2 text-base"></i>Setting</a>
                                <a class="flex items-center py-1.5 px-5 text-sm font-medium text-danger hover:bg-gray-100 dark:hover:bg-gray-700"
                                    href="javascript: void(0);"><i class="ri-delete-bin-line me-2 text-base"></i>Delete</a>
                                <hr class="my-1.5">
                                <a class="flex items-center py-1.5 px-5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript: void(0);"><i class="ri-logout-circle-line me-2 text-base"></i>Log
                                    Out</a>
                            </div>
                        </div>
                    </div>

                    <!-- start search box -->
                    <div class="mb-3">
                        <form>
                            <div class="relative flex rounded-md">
                                <input type="text" id="trailing-button-add-on-with-icon-and-button"
                                    name="trailing-button-add-on-with-icon-and-button"
                                    class="form-input form-input-light ps-9" placeholder="People, groups & messages...">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                    <i class="ri-search-line text-base"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end search box -->

                    <h6 class="fs-13 text-muted text-uppercase mb-3">Group Chats</h6>
                    <div class="flex flex-col ">
                        <a href="javascript: void(0);" class="text-reset mb-2 flex items-center">
                            <i class="ri-checkbox-blank-circle-line me-1 text-success"></i>
                            <span>App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset mb-2 flex items-center">
                            <i class="ri-checkbox-blank-circle-line me-1 text-warning"></i>
                            <span>Office Work</span>
                        </a>
                    </div>

                </div>

                <div>
                    <h6 class="fs-13 text-muted text-uppercase px-6 mb-4">Contacts</h6>

                    <div data-simplebar class="h-[calc(100vh-526px)]">
                        <div class="">
                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-2.jpg" class="rounded-full h-10" alt="Brandon Smith">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Brandon Smith</h6>
                                            <small class="text-gray-400">4:30am</small>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="font-light text-gray-400">How are you today?</span>
                                            <span class=""><span
                                                    class="px-1 py-0.5 text-xs rounded-full bg-danger/25 text-danger">3</span></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div
                                    class="flex items-center gap-2 py-3 px-6 border-y bg-light/40 dark:bg-light/5 dark:border-gray-600">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-full h-10" alt=" James Zavel">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6> James Zavel</h6>
                                            <small class="text-gray-400">5:30am</small>
                                        </div>
                                        <span class="font-light text-gray-400">typing...</span>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-7.jpg" class="rounded-full h-10" alt="Maria C">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Maria C</h6>
                                            <small class="text-gray-400">Thu</small>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="font-light text-gray-400">Are we going to have this week's planning
                                                meeting today?</span>
                                            <span class=""><span
                                                    class="px-1 py-0.5 text-xs rounded-full bg-danger/25 text-danger">2</span></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-10.jpg" class="rounded-full h-10" alt="Rhonda D">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Rhonda D</h6>
                                            <small class="text-gray-400">Wed</small>
                                        </div>
                                        <span class="font-light text-gray-400">Please check these design assets...</span>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-3.jpg" class="rounded-full h-10" alt="Michael H">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Michael H</h6>
                                            <small class="text-gray-400">Tue</small>
                                        </div>
                                        <span class="font-light text-gray-400">Are you free for 15 min? I would like to
                                            discuss something...</span>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-6.jpg" class="rounded-full h-10" alt="Michael H">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Thomas R</h6>
                                            <small class="text-gray-400">Tue</small>
                                        </div>
                                        <span class="font-light text-gray-400">Let's have meeting today between me, you and
                                            Tony...</span>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-8.jpg" class="rounded-full h-10" alt="Michael H">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Thomas J</h6>
                                            <small class="text-gray-400">Tue</small>
                                        </div>
                                        <span class="font-light text-gray-400">Howdy?</span>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" data-fc-target="default-offcanvas" data-fc-backdrop="false"
                                data-fc-type="offcanvas">
                                <div class="flex items-center gap-2 py-3 px-6">
                                    <img src="/images/users/avatar-4.jpg" class="rounded-full h-10" alt="Michael H">
                                    <div class="w-full">
                                        <div class="flex justify-between">
                                            <h6>Ricky J</h6>
                                            <small class="text-gray-400">Mon</small>
                                        </div>
                                        <span class="font-light text-gray-400">Are you interested in learning?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chat Conversation -->
            <div id="default-offcanvas"
                class="fc-offcanvas-open:translate-x-0 hidden lg:flex lg:static absolute inset-y-0 end-0 translate-x-full lg:rtl:translate-x-0 lg:translate-x-0 rtl:-translate-x-full transition-all duration-300 transform w-full"
                tabindex="-1">
                <div class="card w-full overflow-hidden">

                    <div class="py-3 px-6 border-b border-light dark:border-gray-600">
                        <div class="flex flex-wrap justify-between gap-3 py-1.5">
                            <div class="sm:w-7/12">
                                <div class="flex items-center gap-2">
                                    <button class="lg:hidden block rtl:rotate-180" data-fc-dismiss type="button">
                                        <i
                                            class="ri-arrow-left-s-line text-xl text-gray-500 hover:text-gray-700 dark:text-gray-500 dark:hover:text-gray-400"></i>
                                    </button>

                                    <img src="/images/users/avatar-5.jpg" class="me-2 rounded-full h-9"
                                        alt="Brandon Smith">
                                    <div>
                                        <h5 class="text-sm ">
                                            <a href="{{ route('second', ['pages', 'profile']) }}"
                                                class="text-gray-500">James Zavel</a>
                                        </h5>
                                        <p class="mt-1.5 text-gray-400 text-xs flex items-center">
                                            <small class="ri-checkbox-blank-circle-fill text-danger me-1"></small> Offline
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-auto">
                                <div id="tooltips-container">
                                    <a href="javascript: void(0);" class="p-1.5 inline-block">
                                        <i class="ri-phone-line text-xl" data-fc-target="voice-call"
                                            data-fc-type="tooltip"></i>
                                        <div id="voice-call"
                                            class="bg-slate-700 hidden mt-1 py-1.5 px-3 rounded-md font-medium transition-all text-white opacity-0 z-50 dark:bg-light dark:text-gray-600"
                                            role="tooltip">
                                            Voice call
                                            <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light"
                                                data-fc-arrow></div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="p-1.5 inline-block">
                                        <i class="ri-vidicon-line text-xl" data-fc-target="video-call"
                                            data-fc-type="tooltip"></i>
                                        <div id="video-call"
                                            class="bg-slate-700 hidden mt-1 py-1.5 px-3 rounded-md font-medium transition-all text-white opacity-0 z-50 dark:bg-light dark:text-gray-600"
                                            role="tooltip">
                                            Video call
                                            <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light"
                                                data-fc-arrow></div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="p-1.5 inline-block">
                                        <i class="ri-group-line text-xl" data-fc-target="add-user"
                                            data-fc-type="tooltip"></i>
                                        <div id="add-user"
                                            class="bg-slate-700 hidden mt-1 py-1.5 px-3 rounded-md font-medium transition-all text-white opacity-0 z-50 dark:bg-light dark:text-gray-600"
                                            role="tooltip">
                                            Add User
                                            <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light"
                                                data-fc-arrow></div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="p-1.5 inline-block">
                                        <i class="ri-delete-bin-line text-xl" data-fc-target="delete"
                                            data-fc-type="tooltip"></i>
                                        <div id="delete"
                                            class="bg-slate-700 hidden mt-1 py-1.5 px-3 rounded-md font-medium transition-all text-white opacity-0 z-50 dark:bg-light dark:text-gray-600"
                                            role="tooltip">
                                            Delete
                                            <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px] dark:bg-light"
                                                data-fc-arrow></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 h-[calc(100vh-400px)]" data-simplebar>
                        <div class="space-y-4">
                            <!-- Chat Left -->
                            <div class="flex items-start text-start gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:00</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-light p-3 relative rounded rounded-ss-none after:top-0 after:-start-2.5 after:absolute after:border-[6px] after:border-t-light after:border-e-light after:border-transparent dark:bg-gray-700 dark:after:border-t-gray-700 dark:after:border-e-gray-700">
                                    <p class="text-xs font-bold relative">James Z</p>
                                    <p class="pt-1">Hello!</p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Right -->
                            <div class="flex flex-row-reverse items-start text-end gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-1.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:01</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-primary p-3 relative rounded rounded-se-none after:top-0 after:-end-2.5 after:absolute after:border-[6px] after:border-t-primary after:border-s-primary after:border-transparent">
                                    <p class="block text-xs font-bold text-white relative">Geneva M</p>
                                    <p class="pt-1 text-white/90">
                                        Hi, How are you? What about our next meeting?
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown"
                                        data-fc-placement="bottom-end">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Left -->
                            <div class="flex items-start text-start gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:01</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-light p-3 relative rounded rounded-ss-none after:top-0 after:-start-2.5 after:absolute after:border-[6px] after:border-t-light after:border-e-light after:border-transparent dark:bg-gray-700 dark:after:border-t-gray-700 dark:after:border-e-gray-700">
                                    <p class="block text-xs font-bold relative">James Z</p>
                                    <p class="pt-1">
                                        Yeah everything is fine
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Right -->
                            <div class="flex flex-row-reverse items-start text-end gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-1.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:02</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-primary p-3 relative rounded rounded-se-none after:top-0 after:-end-2.5 after:absolute after:border-[6px] after:border-t-primary after:border-s-primary after:border-transparent">
                                    <p class="block text-xs font-bold text-white relative">Geneva M</p>
                                    <p class="pt-1 text-white/90">
                                        Wow that's great
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown"
                                        data-fc-placement="bottom-end">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Left -->
                            <div class="flex items-start text-start gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:02</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-light p-3 relative rounded rounded-ss-none after:top-0 after:-start-2.5 after:absolute after:border-[6px] after:border-t-light after:border-e-light after:border-transparent dark:bg-gray-700 dark:after:border-t-gray-700 dark:after:border-e-gray-700">
                                    <p class="block text-xs font-bold relative">James Z</p>
                                    <p class="pt-1">
                                        Let's have it today if you are free
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Right -->
                            <div class="flex flex-row-reverse items-start text-end gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-1.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:03</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-primary p-3 relative rounded rounded-se-none after:top-0 after:-end-2.5 after:absolute after:border-[6px] after:border-t-primary after:border-s-primary after:border-transparent">
                                    <p class="block text-xs font-bold text-white relative">Geneva M</p>
                                    <p class="pt-1 text-white/90">
                                        Sure thing! let me know if 2pm works for you
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown"
                                        data-fc-placement="bottom-end">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Left -->
                            <div class="flex items-start text-start gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:04</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-light p-3 relative rounded rounded-ss-none after:top-0 after:-start-2.5 after:absolute after:border-[6px] after:border-t-light after:border-e-light after:border-transparent dark:bg-gray-700 dark:after:border-t-gray-700 dark:after:border-e-gray-700">
                                    <p class="block text-xs font-bold relative">James Z</p>
                                    <p class="pt-1">
                                        Sorry, I have another meeting scheduled at 2pm. Can we have it at 3pm instead?
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Left -->
                            <div class="flex items-start text-start gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-5.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:04</p>
                                </div>

                                <div
                                    class="max-w-3/4 bg-light p-3 relative rounded rounded-ss-none after:top-0 after:-start-2.5 after:absolute after:border-[6px] after:border-t-light after:border-e-light after:border-transparent dark:bg-gray-700 dark:after:border-t-gray-700 dark:after:border-e-gray-700">
                                    <p class="block text-xs font-bold relative">James Z</p>
                                    <p class="pt-1">
                                        We can also discuss about the presentation talk format if you have some extra mins
                                    </p>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Right -->
                            <div class="flex flex-row-reverse items-start text-end gap-3 group">
                                <div class="text-center">
                                    <img src="/images/users/avatar-1.jpg" class="rounded-md h-8" />
                                    <p class="text-xs pt-0.5">10:05</p>
                                </div>

                                <div class="max-w-3/4">
                                    <div
                                        class="bg-primary p-3 relative rounded rounded-se-none after:top-0 after:-end-2.5 after:absolute after:border-[6px] after:border-t-primary after:border-s-primary after:border-transparent">
                                        <p class="block text-xs font-bold text-white relative">Geneva M</p>
                                        <p class="pt-1 text-white/90">
                                            3pm it is. Sure, let's discuss about presentation format, it would be great to
                                            finalize today. I am attaching the last year format and assets here...
                                        </p>
                                    </div>
                                    <div class="border rounded mt-3 dark:border-slate-700">
                                        <div class="p-3">
                                            <div class="flex items-center justify-between gap-3">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-12 h-12">
                                                        <span
                                                            class="inline-flex items-center justify-center h-full w-full bg-primary text-white rounded">
                                                            .ZIP
                                                        </span>
                                                    </div>
                                                    <div class="text-start text-gray-400">
                                                        <a href="javascript:void(0);"
                                                            class="text-sm font-bold">CureOS-sketch.zip</a>
                                                        <p class="text-sm">2.3 MB</p>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="btn !text-xl">
                                                    <i class="ri-download-2-line"></i>
                                                </a>
                                            </div> <!-- end flex -->
                                        </div> <!-- end .p-3 -->
                                    </div>
                                </div>

                                <div class="hidden group-hover:block">
                                    <button class="text-primary" type="button" data-fc-type="dropdown"
                                        data-fc-placement="bottom-end">
                                        <i class="ri-more-2-fill text-lg"></i>
                                    </button>
                                    <div
                                        class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 mt-2 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1.5 hidden">
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Copy Message</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Edit</a>
                                        <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript: void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-full">
                            <div class="bg-light p-6 dark:bg-gray-700">
                                <form name="chat-form">
                                    <div class="flex gap-2">
                                        <input type="text"
                                            class="form-input border-none bg-white dark:bg-gray-800 placeholder:text-slate-400"
                                            placeholder="Enter your text" required="" />
                                        <div class="w-auto">
                                            <div class="flex gap-1">
                                                <a href="#"
                                                    class="btn bg-light text-gray-800 hover:bg-dark/20 dark:bg-gray-700 dark:text-gray-100 dark:hover:bg-light/20"><i
                                                        class="ri-attachment-2"></i></a>
                                                <button type="submit" class="btn bg-success text-white w-full"><i
                                                        class="ri-send-plane-2-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
