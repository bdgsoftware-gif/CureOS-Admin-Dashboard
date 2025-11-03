@extends('layouts.app', ['title' => 'Tippy Tooltip', 'subTitle' => 'Extended', 'pageTitle' => 'Tippy Tooltip'])

@section('css')
    @vite(['node_modules/tippy.js/dist/tippy.css'])
@endsection

@section('content')
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Placement Tooltips</h4>

                <p class="sub-header">A highly customizable vanilla JS tooltip & popover library</p>
                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    The default tippy tooltip looks like this when given no options. It has a nifty backdrop filling
                    animation!
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="top">Top</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="bottom">Bottom</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="left">Left</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="right">Right</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="top-start">Top-Start</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-placement="top-end">Top-End</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Arrows Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    Arrows point toward the reference element.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-animation="fade">Default</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowType="round"
                        data-tippy-animation="fade">Round</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(1.5)"
                        data-tippy-animation="fade">Wide</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(0.75)"
                        data-tippy-animation="fade">Skinny</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scale(0.75)"
                        data-tippy-animation="fade">Small</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scale(1.35)"
                        data-tippy-animation="fade">Large</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Interactivity Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    Tooltips can be interactive, meaning they won't hide when you hover over or click on them.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-interactive="true">Interactive (hover)</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-interactive="true" data-tippy-trigger="click">Interactive
                        (click)</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Duration Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    A tippy can have different transition durations.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-duration="0">0ms</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-duration="200">200ms</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-duration="1000">1000ms</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-duration="[500, 200]">[500ms, 200ms]</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Animations Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    Tooltips can have different types of animations.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="shift-away" data-tippy-arrow="true">Shift away</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="shift-toward" data-tippy-arrow="true">Shift
                        toward</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="fade" data-tippy-arrow="true">Fade</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="scale" data-tippy-arrow="true">Scale</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="perspective" data-tippy-arrow="true">Perspective</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="shift-away" data-tippy-inertia="true"
                        data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-away)</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="shift-toward" data-tippy-inertia="true"
                        data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-toward)</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="scale" data-tippy-inertia="true"
                        data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (scale)</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-animation="perspective" data-tippy-inertia="true"
                        data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (perspective)</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Themes Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    A tippy can have any kind of theme you want! Creating a custom theme is a breeze.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="See-through!" tabindex="0"
                        data-plugin="tippy" data-tippy-theme="translucent">Translucent</span>
                    <span class="btn btn-sm bg-primary text-white" title="A light Tooltip !" tabindex="0"
                        data-plugin="tippy" data-tippy-theme="light" data-tippy-arrow="true">Light</span>
                    <span class="btn btn-sm bg-primary text-white" title="Awesome Gradient !" tabindex="0"
                        data-plugin="tippy" data-tippy-theme="gradient">Gradient</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Misc Tooltips</h4>

                <p class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                    Tippy has a ton of features, and it's constantly improving.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="btn btn-sm bg-primary text-white" title="How cool&#39;s this?!" tabindex="0"
                        data-plugin="tippy" data-tippy-followCursor="true" data-tippy-arrow="true"
                        data-tippy-animation="fade">Follow cursor</span>
                    <span class="btn btn-sm bg-primary text-white" title="You&#39;ll need a touch device for this one."
                        tabindex="0" data-plugin="tippy" data-tippy-touchHold="true">Touch &amp; Hold</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m hugging the tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-distance="0" data-tippy-animation="fade">Distance</span>
                    <span class="btn btn-sm bg-primary text-white" title="10px x-axis, 50px y-axis offset" tabindex="0"
                        data-plugin="tippy" data-tippy-offset="10, 50">Offset</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-size="small">Small</span>
                    <span class="btn btn-sm bg-primary text-white" title="I&#39;m a Tippy tooltip!" tabindex="0"
                        data-plugin="tippy" data-tippy-size="large">Large</span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/extended-tippy.js'])
@endsection
