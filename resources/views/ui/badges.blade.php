@extends('layouts.vertical',['title' => 'Badges', 'subTitle' => 'Components', 'pageTitle' => 'Badges'])

@section('content')

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">

    <div class="space-y-4">
        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Default</h4>
                </div><!-- end card title -->

                <div class="grid gap-y-4">
                    <h1 class="text-2xl font-semibold">h1.Example heading <span class="py-0.5 px-2 rounded-md text-white bg-secondary">New</span></h1>
                    <h2 class="text-xl font-semibold">h2.Example heading <span class="py-0.5 px-2 rounded-md text-white bg-success">New</span></h2>
                    <h3 class="text-lg font-semibold">h3.Example heading <span class="py-0.5 px-2 rounded-md text-white bg-primary">New</span></h3>
                    <h4 class="text-base font-semibold">h4.Example heading <a href="#"><span class="py-0.5 px-2 rounded-md text-white bg-info">Info Link</span></a></h4>
                    <h5 class="text-sm font-semibold">h5.Example heading <span class="py-0.5 px-2 rounded-md text-white bg-warning">New</span></h5>
                    <h6 class="text-xs font-semibold">h6.Example heading <span class="py-0.5 px-2 rounded-md text-white bg-danger">New</span></h6>
                </div>
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Contextual variations</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-primary text-white">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-secondary text-white">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-success text-white">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-danger text-white">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-warning text-white">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-info text-white">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-light text-black">Light</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-dark text-white">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Lighten Badges</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-primary/10 text-primary">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-secondary/10 text-Secondary">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-success/10 text-Success">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-danger/10 text-Danger">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-warning/10 text-Warning">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-info/10 text-Info">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium bg-dark/10 text-dark">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Outline Badges</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-primary text-primary">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-secondary text-secondary">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-success text-success">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-danger text-danger">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-warning text-warning">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-info text-info">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-full text-xs font-medium border border-dark text-dark">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->
    </div><!-- space-y-4 End -->

    <div class="space-y-4">
        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Contextual variations</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-primary text-white">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-secondary text-white">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-success text-white">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-danger text-white">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-warning text-white">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-info text-white">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-light text-black">Iight</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-dark text-white">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Lighten Badges</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-primary/10 text-primary">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-secondary/10 text-secondary">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-success/10 text-success">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-danger/10 text-danger">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-warning/10 text-warning">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-info/10 text-info">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-dark/10 text-dark">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Outline Badges</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap items-end gap-2">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-primary text-primary">Primary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-secondary text-secondary">Secondary</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-success text-success">Success</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-danger text-danger">Danger</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-warning text-warning">Warning</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-info text-info">Info</span>
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium border border-dark text-dark">Dark</span>
                </div><!-- flex End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <div>
                    <h4 class="card-title mb-4">Badge Positioned</h4>
                </div><!-- end card title -->

                <div class="flex flex-wrap justify-between gap-x-7 gap-y-3">
                    <a class="relative inline-flex flex-shrink-0 justify-center items-center h-9 w-[3.375rem] rounded-md border font-medium bg-primary text-white shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Inbox
                        <span class="absolute top-0 end-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/2 translate-x-1/2 bg-rose-500 text-white">99+</span>
                    </a>

                    <a class="relative py-0.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-success text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                        Notifications
                        <span class="inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium bg-light text-dark">4</span>
                    </a>

                    <a href="javascript:void(0)" class="relative inline-flex flex-shrink-0 justify-center items-center h-9 w-[3.375rem] rounded-md border font-medium bg-primary text-white shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        Profile
                        <span class="absolute top-0 end-0 inline-flex items-center w-3.5 h-3.5 rounded-full border-2 border-white text-xs font-medium transform -translate-y-1/2 translate-x-1/2 bg-danger text-white"></span>
                    </a>
                </div><!-- flex End -->
            </div>
        </div> <!-- end card -->
    </div><!-- space-y-4 End -->
</div>

@endsection