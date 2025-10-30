@extends('layouts.vertical', ['title' => 'Breadcrumb', 'subTitle' => 'Components', 'pageTitle' => 'Breadcrumb'])

@section('content')

    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <h4 class="card-title">Simple</h4>
                </div>
            </div>
            <div class="p-6">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center text-sm font-semibold space-x-1">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="flex text-gray-400 hover:text-gray-500">
                                    <i data-lucide="home" class="h-4 w-4 flex-shrink-0 align-middle"></i>
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" width="16"
                                         height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         aria-hidden="true">
                                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round">
                                    </svg>
                                    <span class="sr-only">Home
                                    </span>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <i data-lucide="layout-grid" class="h-4 w-4 flex-shrink-0 text-gray-400"></i>
                                <a href="#" class="ms-1 text-sm font-medium text-gray-500 hover:text-gray-700">Apps</a>
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600" width="16"
                                     height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                     aria-hidden="true">
                                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round">
                                </svg>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <i data-lucide="calendar" class="h-4 w-4 flex-shrink-0 text-gray-400"></i>
                                <a href="#" class="ms-1 text-sm font-medium text-gray-500 hover:text-gray-700"
                                   aria-current="page">Calendar</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <h4 class="card-title">Example</h4>
                </div>
            </div>
            <div class="p-6">
                <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
                    <li class="text-sm text-gray-600 dark:text-gray-400">
                        <a class="flex items-center hover:text-primary" href="#">
                            Home
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600 mx-2" width="16"
                                 height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true">
                                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round">
                            </svg>
                        </a>
                    </li>

                    <li class="text-sm text-gray-600 dark:text-gray-400">
                        <a class="flex items-center hover:text-primary" href="#">
                            App Center
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400 dark:text-gray-600 mx-2" width="16"
                                 height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true">
                                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round">
                            </svg>
                        </a>
                    </li>

                    <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                        Application
                    </li>
                </ol>
            </div>
        </div>

    </div>

@endsection
