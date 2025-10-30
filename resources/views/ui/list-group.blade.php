@extends('layouts.vertical', ['title' => 'List Group', 'subTitle' => 'Components', 'pageTitle' => 'List Group'])

@section('content')
    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Basic example</h5>

                <div class="pt-5">
                    <ul class="flex flex-col">
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-drive-line"></i>
                            Google Drive
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-messenger-line"></i>
                            Facebook Messenger
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-apple-line"></i>
                            Apple Technology Company
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-lifebuoy-line"></i>
                            Intercom Support System
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-paypal-line"></i>
                            Paypal Payment Gateway
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Active items</h5>

                <div class="pt-5">
                    <ul class="flex flex-col">
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-primary border text-white -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            <i class="ri-drive-line"></i>
                            Google Drive
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-messenger-line"></i>
                            Facebook Messenger
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-apple-line"></i>
                            Apple Technology Company
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-lifebuoy-line"></i>
                            Intercom Support System
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-paypal-line"></i>
                            Paypal Payment Gateway
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Disabled items</h5>

                <div class="pt-5">
                    <ul class="flex flex-col">
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-gray-50 border text-gray-800 -mt-px opacity-60 first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600"
                            disabled>
                            <i class="ri-drive-line"></i>
                            Google Drive
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-messenger-line"></i>
                            Facebook Messenger
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-apple-line"></i>
                            Apple Technology Company
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-lifebuoy-line"></i>
                            Intercom Support System
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <i class="ri-paypal-line"></i>
                            Paypal Payment Gateway
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Links and Buttons</h5>

                <div class="pt-5">
                    <div class="flex flex-col">
                        <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-primary border text-white -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600"
                            href="#">
                            Paypal Payment Gateway
                        </a>
                        <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-gray-50 hover:text-gray-400 focus:bg-gray-50 focus:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                            href="#">
                            Google Drive
                        </a>
                        <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-gray-50 hover:text-gray-400 focus:bg-gray-50 focus:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                            href="#">
                            Facebook Messenger
                        </a>
                        <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-gray-50 hover:text-gray-400 focus:bg-gray-50 focus:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                            href="#">
                            Apple Technology Company
                        </a>
                        <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-gray-50 border text-gray-800 -mt-px opacity-60 first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 cursor-default"
                            href="#" disabled>
                            Intercom Support System
                        </a>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Flush</h5>

                <div class="pt-5">
                    <ul class="flex flex-col divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-gray-800 dark:text-white">
                            Google Drive
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-gray-800 dark:text-white">
                            Facebook Messenger
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-gray-800 dark:text-white">
                            Apple Technology Company
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-gray-800 dark:text-white">
                            Intercom Support System
                        </li>
                        <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-gray-800 dark:text-white">
                            Paypal Payment Gateway
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Horizontal</h5>

                <div class="pt-5">
                    <ul class="flex mb-6">
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Google
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Whatsapp
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Facebook
                        </li>
                    </ul> <!-- flex-end -->

                    <ul class="flex mb-6">
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Apple
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            PayPal
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Intercom
                        </li>
                    </ul> <!-- flex-end -->

                    <ul class="flex">
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Google
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Whatsapp
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Facebook
                        </li>
                    </ul> <!-- flex-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Contextual classes</h5>

                <div class="pt-5">
                    <ul class="flex flex-col">
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border bg-white/10 text-black -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            Dapibus ac facilisis in
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-primary/10 border-primary/40 text-primary -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple primary list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-secondary/10 border-secondary/40 text-secondary -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple secondary list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-success/10 border-success/40 text-success -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple success list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-danger/10 border-danger/40 text-danger -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple danger list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-warning/10 border-warning/40 text-warning -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple warning list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-info/10 border-info/40 text-info -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple info list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-light/10 border-light/40 text-gray-200 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple light list group item
                        </li>
                        <li
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-dark/10 border-dark/40 text-dark -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            A simple dark list group item
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Contextual classes with Link</h5>

                <div class="pt-5">
                    <div class="flex flex-col">
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border bg-white/10 text-black -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-gray-50 hover:text-gray-500 focus:bg-gray-50 focus:text-gray-500">
                            Dapibus ac facilisis in
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-primary/10 border-primary/40 text-primary -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-primary/30 hover:text-gray-900 focus:bg-primary/30 focus:text-gray-900">
                            A simple primary list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-secondary/10 border-secondary/40 text-secondary -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-secondary/30 hover:text-gray-900 focus:bg-secondary/30 focus:text-gray-900">
                            A simple secondary list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-success/10 border-success/40 text-success -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-success/30 hover:text-gray-900 focus:bg-success/30 focus:text-gray-900">
                            A simple success list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-danger/10 border-danger/40 text-danger -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-danger/30 hover:text-gray-900 focus:bg-danger/30 focus:text-gray-900">
                            A simple danger list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-warning/10 border-warning/40 text-warning -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-warning/30 hover:text-gray-900 focus:bg-warning/30 focus:text-gray-900">
                            A simple warning list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-info/10 border-info/40 text-info -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-info/30 hover:text-gray-900 focus:bg-info/30 focus:text-gray-900">
                            A simple info list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-light/10 border-light/40 text-gray-200 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-light/30 hover:text-gray-900 focus:bg-light/30 focus:text-gray-900">
                            A simple light list group item
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-t-0 bg-dark/10 border-dark/40 text-dark -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white transition-all duration-300 hover:bg-dark/20 hover:text-gray-900 focus:bg-dark/20 focus:text-gray-900">
                            A simple dark list group item
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Custom content</h5>

                <div class="pt-5">
                    <a href="#"
                        class="flex flex-col py-3 px-5 font-normal bg-primary border text-white -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                        <div class="flex justify-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="text-gray-100">Donec id elit non mi porta.</small>
                    </a> <!-- end -->

                    <a href="#"
                        class="flex flex-col py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600 transition-all duration-300 hover:bg-gray-50 hover:text-gray-600 focus-within:bg-gray-50 focus:text-gray-600">
                        <div class="flex justify-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="text-gray-400">Donec id elit non mi porta.</small>
                    </a> <!-- end -->

                    <a href="#"
                        class="flex flex-col py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600 transition-all duration-300 hover:bg-gray-50 hover:text-gray-600 focus-within:bg-gray-50 focus:text-gray-600">
                        <div class="flex justify-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="text-gray-400">Donec id elit non mi porta.</small>
                    </a> <!-- end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">With badges</h5>

                <div class="pt-5">
                    <div class="flex flex-col">
                        <div
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            Gmail Emails
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">14</span>
                        </div>
                        <div
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            Pending Payments
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-success text-white">2</span>
                        </div>
                        <div
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            Action Needed
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-danger text-white">99+</span>
                        </div>
                        <div
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            Payments Done
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-success text-white">20+</span>
                        </div>
                        <div
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            Pending Payments
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-warning text-white">12</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Checkboxes and radios</h5>

                <div class="pt-5">
                    <div class="flex flex-col mb-3">
                        <div
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck1">
                                <label class="ms-1.5" for="customCheck1"> First checkbox</label>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck1">
                                <label class="ms-1.5" for="customCheck1">Second checkbox</label>
                            </div>
                        </div>
                    </div> <!-- checkbox-end -->

                    <div class="flex flex-col">
                        <div
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <div class="flex items-center">
                                <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio01"
                                    checked>
                                <label class="ms-1.5" for="formRadio01"> First radio</label>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <div class="flex items-center">
                                <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio01"
                                    checked>
                                <label class="ms-1.5" for="formRadio01">Second radio</label>
                            </div>
                        </div>
                    </div> <!-- radio-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <h5 class="card-title mb-1">Numbered</h5>

                <div class="pt-5">
                    <ol class="flex flex-col">
                        <li
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            <div class="flex flex-wrap gap-x-2">
                                <span>1.</span>
                                <div>
                                    <h6 class="font-semibold">CureOS Admin</h6>
                                    <p>CureOS Admin</p>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">865</span>
                        </li> <!-- li-end -->

                        <li
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            <div class="flex flex-wrap gap-x-2">
                                <span>2.</span>
                                <div>
                                    <h6 class="font-semibold">CureOS React Admin</h6>
                                    <p>CureOS React Admin</p>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">140</span>
                        </li> <!-- li-end -->

                        <li
                            class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal bg-white border text-gray-800 -mt-px first:rounded-t-md last:rounded-b-md dark:border-gray-600">
                            <div class="flex flex-wrap gap-x-2">
                                <span>3.</span>
                                <div>
                                    <h6 class="font-semibold">Angular Version</h6>
                                    <p>Angular Version</p>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">85</span>
                        </li> <!-- li-end -->
                    </ol> <!-- ol-end -->
                </div>

            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection
