@extends('layouts.vertical', ['title' => 'Buttons', 'subTitle' => 'Components', 'pageTitle' => 'Buttons'])

@section('content')

<div class="grid xl:grid-cols-2 gap-6">
    <div class="card p-6">
        <h4 class="card-title mb-4">Default Buttons</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn bg-primary text-white">Primary</button>
            <button type="button" class="btn bg-secondary text-white">Secondary</button>
            <button type="button" class="btn bg-success text-white">Success</button>
            <button type="button" class="btn bg-danger text-white">Danger</button>
            <button type="button" class="btn bg-warning text-white">Warning</button>
            <button type="button" class="btn bg-info text-white">Info</button>
            <button type="button" class="btn bg-light text-slate-900 dark:text-slate-200">Light</button>
            <button type="button" class="btn bg-dark text-white">Dark</button>
            <button type="button" class="btn bg-transparent text-primary">Link</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Button Outline</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn border-primary text-primary hover:bg-primary hover:text-white">Primary</button>
            <button type="button" class="btn border-secondary text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            <button type="button" class="btn border-success text-success hover:bg-success hover:text-white">Success</button>
            <button type="button" class="btn border-danger text-danger hover:bg-danger hover:text-white">Danger</button>
            <button type="button" class="btn border-warning text-warning hover:bg-warning hover:text-white">Warning</button>
            <button type="button" class="btn border-info text-info hover:bg-info hover:text-white">Info</button>
            <button type="button" class="btn border-light text-light hover:bg-light hover:text-gray-800 dark:text-slate-200">Light</button>
            <button type="button" class="btn border-dark text-slate-900 dark:text-slate-200 hover:bg-dark hover:text-white">Dark</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Button-Rounded</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn bg-primary text-white rounded-full">Primary</button>
            <button type="button" class="btn bg-secondary text-white rounded-full">Secondary</button>
            <button type="button" class="btn bg-success text-white rounded-full">Success</button>
            <button type="button" class="btn bg-danger text-white rounded-full">Danger</button>
            <button type="button" class="btn bg-warning text-white rounded-full">Warning</button>
            <button type="button" class="btn bg-info text-white rounded-full">Info</button>
            <button type="button" class="btn bg-light text-slate-900 dark:text-slate-200 rounded-full">Light</button>
            <button type="button" class="btn bg-dark text-white rounded-full">Dark</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Outline Rounded Buttons</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn rounded-full border border-primary text-primary hover:bg-primary hover:text-white">Primary</button>
            <button type="button" class="btn rounded-full border border-secondary text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            <button type="button" class="btn rounded-full border border-success text-success hover:bg-success hover:text-white">Success</button>
            <button type="button" class="btn rounded-full border border-danger text-danger hover:bg-danger hover:text-white">Danger</button>
            <button type="button" class="btn rounded-full border border-warning text-warning hover:bg-warning hover:text-white">Warning</button>
            <button type="button" class="btn rounded-full border border-info text-info hover:bg-info hover:text-white">Info</button>
            <button type="button" class="btn rounded-full border-light text-light hover:bg-light hover:text-gray-800 dark:text-slate-200">Light</button>
            <button type="button" class="btn rounded-full border border-dark text-slate-900 dark:text-slate-200 hover:bg-dark hover:text-white">Dark</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Soft Buttons</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn bg-primary/25 text-primary hover:bg-primary hover:text-white">Primary</button>
            <button type="button" class="btn bg-secondary/25 text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            <button type="button" class="btn bg-success/25 text-success hover:bg-success hover:text-white">Success</button>
            <button type="button" class="btn bg-danger/25 text-danger hover:bg-danger hover:text-white">Danger</button>
            <button type="button" class="btn bg-warning/25 text-warning hover:bg-warning hover:text-white">Warning</button>
            <button type="button" class="btn bg-info/25 text-info hover:bg-info hover:text-white">Info</button>
            <button type="button" class="btn bg-dark/25 text-slate-900 dark:text-slate-200 hover:bg-dark hover:text-white">Dark</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Soft Rounded Buttons</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn rounded-full bg-primary/25 text-primary hover:bg-primary hover:text-white">Primary</button>
            <button type="button" class="btn rounded-full bg-secondary/25 text-secondary hover:bg-secondary hover:text-white">Secondary</button>
            <button type="button" class="btn rounded-full bg-success/25 text-success hover:bg-success hover:text-white">Success</button>
            <button type="button" class="btn rounded-full bg-danger/25 text-danger hover:bg-danger hover:text-white">Danger</button>
            <button type="button" class="btn rounded-full bg-warning/25 text-warning hover:bg-warning hover:text-white">Warning</button>
            <button type="button" class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white">Info</button>
            <button type="button" class="btn rounded-full bg-dark/25 text-slate-900 dark:text-slate-200 hover:bg-dark hover:text-white">Dark</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Sizes</h4>
        <div class="flex items-center gap-2">
            <button type="button" class="btn btn-lg bg-primary text-white">Large</button>
            <button type="button" class="btn bg-info text-white">Normal</button>
            <button type="button" class="btn btn-sm bg-success text-white">Small</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Disabled</h4>
        <div class="flex items-center gap-2">
            <button type="button" class="btn bg-primary/60 text-white" disabled>Large</button>
            <button type="button" class="btn bg-info/60 text-white" disabled>Normal</button>
            <button type="button" class="btn bg-success/60 text-white" disabled>Small</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Buttons with Icon</h4>
        <div class="flex flex-wrap items-center gap-3">
            <button type="button" class="btn bg-light text-gray-800"><i class="ri-heart-line text-sm"></i></button>
            <button type="button" class="btn bg-danger text-white"><i class="ri-windows-line text-sm"></i></button>
            <button type="button" class="btn bg-dark text-white"><i class="ri-music-line text-sm"></i></button>
            <button type="button" class="btn bg-primary text-white"><i class="ri-shield-star-line text-sm"></i></button>
            <button type="button" class="btn bg-success text-white"><i class="ri-thumb-up-line text-sm"></i></button>
            <button type="button" class="btn bg-info text-white"><i class="ri-keyboard-line text-sm"></i></button>
            <button type="button" class="btn bg-warning text-white"><i class="ri-school-line text-sm"></i></button>
            <button type="button" class="btn bg-light text-gray-800"><i class="ri-hearts-fill text-sm me-1.5"></i><span>Like</span></button>
            <button type="button" class="btn bg-warning text-white"><i class="ri-rocket-line text-sm me-1.5"></i><span>Launch</span></button>
            <button type="button" class="btn bg-info text-white"><i class="ri-server-line text-sm me-1.5"></i><span>Cloud Hosting</span></button>
            <button type="button" class="btn rounded border border-success text-success hover:bg-success hover:text-white"><i class="ri-money-pound-circle-line me-1.5"></i><span>Money</span></button>
            <button type="button" class="btn rounded border border-primary text-primary hover:bg-primary hover:text-white"><i class="ri-paypal-line me-1.5"></i><span>Money</span></button>
            <button type="button" class="btn rounded border border-danger text-danger hover:bg-danger hover:text-white"><i class="ri-equalizer-line me-1.5"></i><span>Settings</span></button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Block Button</h4>
        <div class="flex flex-col gap-2">
            <button type="button" class="btn w-full bg-primary text-white">Default</button>
            <button type="button" class="btn btn-lg w-full bg-success text-white">Default</button>
        </div>
    </div>

    <div class="card p-6">
        <h4 class="card-title mb-4">Button Group</h4>
        <div class="">
            <div class="inline-flex rounded-md shadow-sm">
                <button type="button" class="btn bg-light first:rounded-l-lg first:ml-0 last:rounded-r-lg transition-all">
                    Years
                </button>
                <button type="button" class="btn bg-light first:rounded-l-lg first:ml-0 last:rounded-r-lg transition-all">
                    Month
                </button>
                <button type="button" class="btn bg-light first:rounded-l-lg first:ml-0 last:rounded-r-lg transition-all">
                    Date
                </button>
            </div>
        </div>
    </div>
</div>

@endsection