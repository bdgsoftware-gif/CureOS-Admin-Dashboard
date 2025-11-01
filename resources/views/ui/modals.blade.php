@extends('layouts.app', ['title' => 'Modals', 'subTitle' => 'Components', 'pageTitle' => 'Modals'])

@section('content')
    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Example</h4>
                <div class="flex flex-wrap gap-3">
                    <div>
                        <button class="btn bg-primary text-white" data-fc-target="default-modal" data-fc-type="modal"
                            type="button"> Standard Modal </button>

                        <div id="default-modal"
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                    <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                    </p>
                                    <hr class="my-5 dark:border-gray-700">
                                    <h5 class="mb-2.5 text-base">Overflowing text to show scroll behavior</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="text-sm">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor fringilla.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Standard Modal -->

                    <div>
                        <button class="btn bg-info text-white" data-fc-type="modal" type="button"> Large Modal </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-7xl -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <p class="text-gray-800 dark:text-gray-200">...</p>
                                </div><!-- End Detail -->
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Large Modal -->

                    <div>
                        <button class="btn bg-success text-white" data-fc-type="modal" type="button">
                            Small Modal
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-sm -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <p class="text-gray-800 dark:text-gray-200">...</p>
                                </div><!-- End Modal Details -->
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Small Modal -->

                    <div>
                        <button class="btn bg-primary text-white" data-fc-type="modal" type="button">
                            Full Width
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-11/12 m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                    <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                    </p>
                                    <hr class="my-5 dark:border-gray-700">
                                    <h5 class="mb-2.5 text-base">Overflowing text to show scroll behavior</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="text-sm">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor fringilla.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Full Width Modal -->

                    <div>
                        <button class="btn bg-primary text-white" data-fc-type="modal" type="button"> Scrollable Modal
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full sm:max-h-[40%] m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                    <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                    </p>
                                    <hr class="my-5 dark:border-gray-700">
                                    <h5 class="mb-2.5 text-base">Overflowing text to show scroll behavior</h5>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                        magna, vel scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p class="text-sm">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor fringilla.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Content -->
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Scrollble Modal -->
                </div>
            </div><!-- p-6 End -->
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Modal with Pages</h4>
                <div class="flex flex-wrap gap-3">
                    <div>
                        <button class="btn bg-primary text-white" data-fc-type="modal" type="button"> Sign Up Modal
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="p-4 overflow-y-auto">
                                    <div class="p-9">
                                        <a href="{{ route('any', 'index') }}" class="flex justify-center">
                                            <img src="/images/logo.png" alt="logo" class="h-6 hidden dark:block">
                                            <img src="/images/logo-dark.png" alt="logo"
                                                class="h-6 block dark:hidden">
                                        </a>
                                    </div>

                                    <form class="px-6" action="#">

                                        <div class="space-y-1 mb-6">
                                            <label for="username" class="font-semibold text-gray-500">Name</label>
                                            <input class="form-input" type="email" id="username" required=""
                                                placeholder="Michael Zenaty">
                                        </div>

                                        <div class="space-y-1 mb-6">
                                            <label for="emailaddress" class="font-semibold text-gray-500">Email
                                                address</label>
                                            <input class="form-input" type="email" id="emailaddress" required=""
                                                placeholder="john@deo.com">
                                        </div>

                                        <div class="space-y-1 mb-6">
                                            <label for="password" class="font-semibold text-gray-500">Password</label>
                                            <input class="form-input" type="password" required="" id="password"
                                                placeholder="Enter your password">
                                        </div>

                                        <div class="mb-6">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="form-checkbox rounded text-primary"
                                                    id="checkbox-signin">
                                                <label class="ms-2 text-sm font-medium text-gray-500"
                                                    for="checkbox-signin">I accept <a href="#">Terms and
                                                        Conditions</a></label>
                                            </div>
                                        </div>

                                        <div class="mb-6 text-center">
                                            <button class="btn bg-primary text-white" type="submit">Sign Up Free</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sign Up Modal -->

                    <div>
                        <button class="btn bg-info text-white" data-fc-type="modal" type="button"> Log In Modal
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="p-4 overflow-y-auto">
                                    <div class="p-9">
                                        <a href="{{ route('any', 'index') }}" class="flex justify-center">
                                            <img src="/images/logo.png" alt="logo" class="h-6 hidden dark:block">
                                            <img src="/images/logo-dark.png" alt="logo"
                                                class="h-6 block dark:hidden">
                                        </a>
                                    </div><!-- End Modal Header -->

                                    <form class="px-6" action="#">
                                        <div class="space-y-1 mb-6">
                                            <label for="emailaddress1" class="font-semibold text-gray-500">Email
                                                address</label>
                                            <input class="form-input" type="email" id="emailaddress1" required=""
                                                placeholder="john@deo.com">
                                        </div>

                                        <div class="space-y-1 mb-6">
                                            <label for="password1" class="font-semibold text-gray-500">Password</label>
                                            <input class="form-input" type="password" required="" id="password1"
                                                placeholder="Enter your password">
                                        </div>

                                        <div class="mb-6">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="form-checkbox rounded text-primary"
                                                    id="checkbox-signin">
                                                <label class="ms-2 text-sm font-medium text-gray-500"
                                                    for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="mb-6 text-center">
                                            <button class="btn bg-primary text-white rounded-full" type="submit">Sign
                                                In</button>
                                        </div>
                                    </form><!-- End Modal Form -->
                                </div>
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Log In Modal -->
                </div>
            </div><!-- p-6 End -->
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Modal based Alerts</h4>
                <div class="flex flex-wrap gap-3">
                    <div>
                        <button class="btn bg-success text-white" data-fc-type="modal" type="button">
                            Success Alert
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-xs -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-success shadow-sm rounded">
                                <div class="p-9 overflow-y-auto">
                                    <div class="text-center text-white">
                                        <i class="ri-check-line text-4xl"></i>
                                        <h4 class="text-xl font-medium mt-3 mb-2.5">Well Done!</h4>
                                        <p class="mt-6 mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn bg-light text-gray-800 my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Success Alert Modal -->

                    <div>
                        <button class="btn bg-info text-white" data-fc-type="modal" type="button">
                            Info Alert
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-xs -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="p-9 overflow-y-auto">
                                    <div class="text-center text-gray-500">
                                        <i class="ri-information-line text-4xl text-info"></i>
                                        <h4 class="text-xl font-medium mt-3 mb-2.5">Heads up!</h4>
                                        <p class="mt-6 mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn bg-info text-white my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Info Alert Modal -->

                    <div>
                        <button class="btn bg-warning text-white" data-fc-type="modal" type="button">
                            Warning Alert
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-xs -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="p-9 overflow-y-auto">
                                    <div class="text-center text-gray-500">
                                        <i class="ri-alert-line text-4xl text-warning"></i>
                                        <h4 class="text-xl font-medium mt-3 mb-2.5">Incorrect Information</h4>
                                        <p class="mt-6 mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn bg-warning text-white my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Warning Alert Modal -->

                    <div>
                        <button class="btn bg-danger text-white" data-fc-type="modal" type="button">
                            Danger Alert
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-xs -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 sm:mx-auto flex flex-col bg-danger shadow-sm rounded">
                                <div class="p-9 overflow-y-auto">
                                    <div class="text-center text-white">
                                        <i class="ri-close-circle-line text-4xl"></i>
                                        <h4 class="text-xl font-medium mt-3 mb-2.5">Well Done!</h4>
                                        <p class="mt-6 mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn bg-light text-gray-800 my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Danger Alert Modal -->
                </div>
            </div><!-- p-6 End -->
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Modal Position</h4>
                <div class="flex flex-wrap gap-3">
                    <div>
                        <button class="btn bg-secondary text-white" data-fc-type="modal" type="button">Top
                            Modal</button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="sm:max-w-lg -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 mt-0 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                    <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        This is a wider card with supporting text below as a natural lead-in
                                        to additional
                                        content.
                                    </p>
                                </div><!-- End Modal Detail -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div><!-- End Modal Content -->
                        </div>
                    </div><!-- End Top Modal -->

                    <div>
                        <button class="btn bg-secondary text-white" data-fc-type="modal" type="button">
                            Bottom Modal
                        </button>

                        <div
                            class="w-full h-full fixed bottom-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div class="flex items-end h-full">
                                <div
                                    class="sm:max-w-xs -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 mb-0 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                    <div
                                        class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                            Modal Title
                                        </h3>
                                        <button
                                            class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                            data-fc-dismiss type="button">
                                            <i class="ri-close-line text-2xl"></i>
                                        </button>
                                    </div><!-- End Modal Header -->
                                    <div class="p-4 overflow-y-auto">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            This is a wider card with supporting text below as a natural lead-in
                                            to additional
                                            content.
                                        </p>
                                    </div><!-- End Modal Detail -->
                                    <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                        <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                            type="button">Close</button>
                                        <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                    </div><!-- End Modal Footer -->
                                </div>
                            </div>
                        </div>
                    </div><!-- End Bottom Modal -->

                    <div>
                        <button class="btn bg-secondary text-white" data-fc-type="modal" type="button">
                            Center Modal
                        </button>

                        <div
                            class="w-full h-full fixed bottom-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div class="flex items-center h-full">
                                <div
                                    class="sm:max-w-lg -translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:w-full m-3 mb-0 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                    <div
                                        class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-medium text-gray-800 dark:text-white text-lg">
                                            Modal Title
                                        </h3>
                                        <button
                                            class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                            data-fc-dismiss type="button">
                                            <i class="ri-close-line text-2xl"></i>
                                        </button>
                                    </div><!-- End Modal Header -->
                                    <div class="p-4 overflow-y-auto">
                                        <p class="text-gray-800 dark:text-gray-200">
                                            This is a wider card with supporting text below as a natural lead-in
                                            to additional
                                            content.
                                        </p>
                                    </div><!-- End Modal Detail -->
                                    <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                        <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                            type="button">Close</button>
                                        <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                    </div><!-- End Modal Footer -->
                                </div>
                            </div>
                        </div>
                    </div><!-- End Center Modal -->
                </div>
            </div><!-- End p-6 -->
        </div><!-- End Card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Colored Header Modals</h4>
                <div class="flex flex-wrap gap-2">
                    <div>
                        <button class="btn bg-primary text-white" data-fc-target="static-modal" data-fc-type="modal"
                            type="button"> Primary Header </button>

                        <div id="static-modal"
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-primary dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Primary Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Primary Header Modal -->

                    <div>
                        <button class="btn bg-secondary text-white" data-fc-type="modal" type="button"> Secondary Header
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="flex justify-between items-center py-2.5 px-4 bg-secondary dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Secondary Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-secondary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Secondary Header Modal -->

                    <div>
                        <button class="btn bg-info text-white" data-fc-type="modal" type="button"> Info Header </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-info dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Info Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-info text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Info Header Modal -->

                    <div>
                        <button class="btn bg-warning text-white" data-fc-type="modal" type="button"> Warning Header
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-warning dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Warning Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-warning text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Warning Header Modal -->

                    <div>
                        <button class="btn bg-danger text-white" data-fc-type="modal" type="button"> Danger Header
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-danger dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Danger Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-danger text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Danger Header Modal -->

                    <div>
                        <button class="btn bg-dark text-white" data-fc-type="modal" type="button"> Dark Header </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-dark dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Dark Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn bg-dark text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Dark Header Modal -->
                </div>
            </div><!-- End p-6 -->
        </div><!-- End Card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Colored Filled Modals</h4>
                <div class="flex flex-wrap gap-2">
                    <div>
                        <button class="btn bg-primary text-white" data-fc-type="modal" type="button"> Primary Filled
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="flex justify-between items-center py-2.5 px-4 bg-primary/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-primary text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Primary Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-primary border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Primary Filled Modal -->

                    <div>
                        <button class="btn bg-secondary text-white" data-fc-type="modal" type="button"> Secondary Filled
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="flex justify-between items-center py-2.5 px-4 bg-secondary/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-secondary text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Secondary Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-secondary border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Secondary Filled Modal -->

                    <div>
                        <button class="btn bg-info text-white" data-fc-type="modal" type="button"> Info Filled </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-info/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-info text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Info Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-info border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Info Filled Modal -->

                    <div>
                        <button class="btn bg-warning text-white" data-fc-type="modal" type="button"> Warning Filled
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="flex justify-between items-center py-2.5 px-4 bg-warning/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-warning text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Warning Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-warning border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Warning Filled Modal -->

                    <div>
                        <button class="btn bg-danger text-white" data-fc-type="modal" type="button"> Danger Filled
                        </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="flex justify-between items-center py-2.5 px-4 bg-danger/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-danger text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Danger Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-danger border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Danger Filled Modal -->

                    <div>
                        <button class="btn bg-dark text-white" data-fc-type="modal" type="button"> Dark Filled </button>

                        <div
                            class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                            <div
                                class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center py-2.5 px-4 bg-dark/90 dark:border-gray-700">
                                    <h3 class="font-medium text-white text-lg">
                                        Modal Title
                                    </h3>
                                    <button
                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                        data-fc-dismiss type="button">
                                        <i class="ri-close-line text-2xl text-white"></i>
                                    </button>
                                </div><!-- End Modal Header -->
                                <div class="p-4 bg-dark text-white overflow-y-auto">
                                    <h5 class="mb-2.5 text-base">Dark Background</h5>
                                    <p class="text-sm mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                        odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p class="text-sm mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                        et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex justify-end items-center gap-2 p-4 border-t bg-dark border-white/5">
                                    <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                        type="button">Close</button>
                                    <a class="btn border-light hover:bg-light hover:text-gray-800 text-white"
                                        href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div><!-- End Modal Content -->
                    </div><!-- End Dark Filled Modal -->
                </div>
            </div><!-- End p-6 -->
        </div><!-- End Card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Multiple Modal</h4>
                <div>
                    <button class="btn bg-primary text-white" data-fc-type="modal" type="button"> Standard Modal
                    </button>

                    <div class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                        <div
                            class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                                    Modal Title
                                </h3>
                                <button
                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                    data-fc-dismiss type="button">
                                    <i class="ri-close-line text-2xl"></i>
                                </button>
                            </div><!-- End Modal Header -->
                            <div class="p-4 overflow-y-auto">
                                <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                </p>
                            </div><!-- End Modal Details -->
                            <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                <botton class="btn bg-primary text-white" data-fc-type="modal" type="button">Next
                                </botton>

                                <div
                                    class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                                    <div
                                        class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 my-0 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                                        <div
                                            class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                            <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                                                Modal Title
                                            </h3>
                                            <button
                                                class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                                data-fc-dismiss type="button">
                                                <i class="ri-close-line text-2xl"></i>
                                            </button>
                                        </div><!-- End Child Modal Header -->
                                        <div class="p-4 overflow-y-auto">
                                            <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                            <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat
                                                porttitor ligula.</p>
                                        </div><!-- End Child Modal Details -->
                                        <div
                                            class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                                            <button class="btn bg-primary text-white transition-all" data-fc-dismiss
                                                type="button">Close</button>
                                        </div><!-- End Child Modal Footer -->
                                    </div>
                                </div><!-- End Child Modal Content -->
                            </div><!-- End Child Modal -->
                        </div>
                    </div><!-- End Modal Content -->
                </div><!-- End Standard Modal -->
            </div><!-- End p-6 -->
        </div><!-- End Card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Fullscreen Modal</h4>
                <div>
                    <button class="btn bg-primary text-white" data-fc-type="modal" type="button"> Standard Modal
                    </button>

                    <div class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
                        <div
                            class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all h-screen w-screen flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
                            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                                    Modal Title
                                </h3>
                                <button
                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                    data-fc-dismiss type="button">
                                    <i class="ri-close-line text-2xl"></i>
                                </button>
                            </div><!-- End Modal Header -->
                            <div class="p-4 overflow-y-auto">
                                <h5 class="mb-2.5 text-base">Text in a modal</h5>
                                <p class="text-sm mb-4">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                </p>
                            </div><!-- End Modal Details -->
                            <div class="flex justify-end items-center gap-4 p-4 mt-auto border-t dark:border-gray-700">
                                <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss
                                    type="button">Close</button>
                                <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                            </div><!-- End Modal Footer -->
                        </div>
                    </div><!-- End Modal Content -->
                </div><!-- End Standard Modal -->
            </div><!-- End p-6 -->
        </div><!-- End Card -->
    </div>
@endsection
