@extends('layouts.app', ['title' => 'Email Read', 'subTitle' => 'Apps', 'pageTitle' => 'Email Read'])

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
                <h5 class="text-lg">Your elite author Graphic Optimization reward is ready!</h5>

                <hr class="dark:border-gray-700 my-5" />

                <div class="flex items-center mb-6 mt-1.5">
                    <img class="me-3 rounded-full h-8" src="/images/users/avatar-2.jpg" alt="placeholder image">
                    <div class="w-full overflow-hidden">
                        <small class="float-right">April 24, 2023, 10:59 PM</small>
                        <h6 class="text-sm/normal">Steven Smith</h6>
                        <small class="text-gray-500 dark:text-gray-400">From: jonathan@domain.com</small>
                    </div>
                </div>

                <p class="mb-4 text-sm/normal">Hi End Brackets!</p>
                <p class="mb-4 text-sm/normal">Clicking ‘Order Service’ on the right-hand side of the above page will
                    present you with an order page. This service has the following Briefing Guidelines that will need to be
                    filled before placing your order:</p>
                <ol class="mb-4 block list-decimal ps-10">
                    <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                    <li>Tell me, why is your item different? </li>
                    <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                    <li>Do you have any preference or specific thing you would like to change or improve on your item page?
                    </li>
                    <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me
                        in vector format (Ai or EPS) </li>
                    <li>Please provide me with the copy or text to display</li>
                </ol>

                <p class="mb-4 text-sm/normal">Filling in this form with the above information will ensure that they will
                    be able to start work quickly.</p>
                <p class="mb-4 text-sm/normal">You can complete your order by putting your coupon code into the Promotional
                    code box and clicking ‘Apply Coupon’.</p>
                <p class="mb-4 text-sm/normal"><b>Best,</b> <br /> Graphic Studio</p>

                <hr class="dark:border-gray-700 my-5" />

                <h5 class="text-base/normal mb-3">Attachments</h5>

                <div class="grid grid-cols-3 gap-6">
                    <div class="card mb-1.5 shadow-none border dark:border-gray-700">
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-12 w-12">
                                        <span
                                            class="inline-flex items-center justify-center w-full h-full bg-primary/20 text-primary rounded">
                                            .ZIP
                                        </span>
                                    </div>
                                    <div class="">
                                        <a href="javascript:void(0);"
                                            class="text-gray-500 dark:text-gray-400 text-sm font-bold">CureOS-admin-design.zip</a>
                                        <p class="text-sm/normal">2.3 MB</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-lg text-gray-500 !text-xl">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1.5 shadow-none border dark:border-gray-700">
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-12 w-12">
                                        <img src="/images/small/small-4.jpg" class="w-full h-full rounded"
                                            alt="file-image">
                                    </div>
                                    <div class="">
                                        <a href="javascript:void(0);"
                                            class="text-gray-500 dark:text-gray-400 text-sm font-bold">Dashboard-design.jpg</a>
                                        <p class="text-sm/normal">3.25 MB</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-lg text-gray-500 !text-xl">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1.5 shadow-none border dark:border-gray-700">
                        <div class="p-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-12 w-12">
                                        <span
                                            class="inline-flex items-center justify-center w-full h-full bg-dark/20 text-dark dark:bg-light/20 dark:text-light rounded">
                                            .MP 4
                                        </span>
                                    </div>
                                    <div class="">
                                        <a href="javascript:void(0);"
                                            class="text-gray-500 dark:text-gray-400 text-sm font-bold">Admin-bug-report.mp4g</a>
                                        <p class="text-sm/normal">7.05 MB</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="javascript:void(0);" class="btn btn-lg text-gray-500 !text-xl">
                                        <i class="ri-download-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5">
                    <a href="" class="btn bg-secondary text-white me-3"><i class="ri-reply-line me-1"></i>
                        Reply</a>
                    <a href=""
                        class="btn bg-secondary/20 hover:bg-secondary/40 text-gray-800 dark:text-gray-200">Forward <i
                            class="ri-share-forward-2-fill ms-1"></i></a>
                </div>

            </div>
        </div>
    </div> <!-- card End -->

    <!-- Compose Modal -->
    <div id="default-modal"
        class="w-full h-full mt-5 fixed top-0 start-0 z-50 transition-all duration-500 fc-modal hidden">
        <div
            class="fc-modal-open:opacity-100 duration-500 opacity-0 ease-in-out overflow-hidden transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
            <div class="flex justify-between items-center p-4 bg-primary">
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
                            class="ri-send-plane-2-line me-1"></i> Send Message</button>
                    <button type="button" class="btn bg-light text-gray-800 dark:bg-gray-700 dark:text-gray-200"
                        data-fc-dismiss>Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/apps-inbox.js'])
@endsection
