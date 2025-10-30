@extends('layouts.vertical', ['title' => 'Scrollbar', 'subTitle' => 'Extended', 'pageTitle' => 'Scrollbar'])

@section('content')

<div class="grid md:grid-cols-2 gap-6">

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Custom Scroll (CSS)</h4>
        </div>

        <div class="py-6 px-1">
            <div class="custom-scroll overflow-auto h-56 px-5">
                <div class="max-w-full">
                    <p class="text-lg text-slate-700 dark:text-slate-400">Tailwind CSS works by scanning all of your HTML files, JavaScript components, and any other templates for class names, generating the corresponding styles and then writing them to a static CSS file.</p>
                    <p class="mt-4 text-lg text-slate-700 dark:text-slate-400">It's fast, flexible, and reliable — with zero-runtime.</p>
                    <p class="mt-4 text-lg text-slate-700 dark:text-slate-400">Over 500+ professionally designed, fully responsive, expertly crafted component examples you can drop into your Tailwind projects and customize to your heart’s content.</p>
                    <p class="mt-4 text-lg text-slate-700 dark:text-slate-400">Tailwind CSS is incredibly performance focused and aims to produce the smallest CSS file possible by only generating the CSS you are actually using in your project.</p>
                    <p class="mt-4 text-lg text-slate-700 dark:text-slate-400">Combined with minification and network compression, this usually leads to CSS files that are less than 10kB, even for large projects. For example, Netflix uses Tailwind for <a class="underline" target="_blank" href="https://top10.netflix.com/">Netflix Top 10</a> and the entire website delivers only 6.5kB of CSS over the network.</p>
                    <p class="mt-4 text-lg text-slate-700 dark:text-slate-400">With CSS files this small, you don’t have to worry about complex solutions like code-splitting your CSS for each page, and can instead just ship a single small CSS file that’s downloaded once and cached until you redeploy your site.</p>
                </div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Simplebar Scroll</h4>
        </div>
        <div class="py-6">
            <div class="h-56 px-6" data-simplebar>
                <div class="prose max-w-full text-slate-700 dark:text-slate-400">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong class="dark:text-white">does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong class="dark:text-white">native</strong>
                        <codeco>overflow: auto</code> scroll and <strong class="dark:text-white">only</strong> replace
                            the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p>SimpleBar has been tested on the following browsers: Chrome, Firefox,
                        Safari, Edge, IE11.</p>
                </div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">RTL Position</h4>
        </div>
        <div class="py-6">
            <div class="h-56 px-6" data-simplebar data-simplebar-direction='rtl'>
                <div class="prose max-w-full text-slate-700 dark:text-slate-400">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong class="dark:text-white">does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong class="dark:text-white">native</strong>
                        <code>overflow: auto</code> scroll and <strong class="dark:text-white">only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p>SimpleBar has been tested on the following browsers: Chrome, Firefox,
                        Safari, Edge, IE11.</p>
                </div>
            </div>

        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Scroll Size</h4>
        </div>

        <div class="py-6">
            <div class="h-56 px-6" data-simplebar data-simplebar-lg>
                <div class="prose-lg max-w-full text-slate-700 dark:text-slate-400">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong class="dark:text-white">does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong class="dark:text-white">native</strong>
                        <code>overflow: auto</code> scroll and <strong class="dark:text-white">only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p>SimpleBar has been tested on the following browsers: Chrome, Firefox,
                        Safari, Edge, IE11.</p>
                </div>
            </div>
        </div>
    </div> <!-- card-end -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Scroll Color</h4>
        </div>

        <div class="py-6">
            <div class="h-56 px-6" data-simplebar data-simplebar-primary>
                <div class="prose max-w-full text-slate-700 dark:text-slate-400">
                    SimpleBar does only one thing: replace the browser's default scrollbar
                    with a custom CSS-styled one without losing performances.
                    Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                    Javascript, causing janks and strange scrolling behaviours...
                    You keep the awesomeness of native scrolling...with a custom scrollbar!
                    <p>SimpleBar <strong class="dark:text-white">does NOT implement a custom scroll
                            behaviour</strong>. It keeps the <strong class="dark:text-white">native</strong>
                        <code>overflow: auto</code> scroll and <strong class="dark:text-white">only</strong> replace
                        the scrollbar visual appearance.
                    </p>
                    <h5>Design it as you want</h5>
                    <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                        customize it as you want! Or even have multiple style on the same
                        page...or just keep the default style ("Mac OS" scrollbar style).
                    </p>
                    <h5>Lightweight and performant</h5>
                    <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                        scrolling. You keep the performances/behaviours of the native
                        scroll.</p>
                    <h5>Supported everywhere</h5>
                    <p>SimpleBar has been tested on the following browsers: Chrome, Firefox,
                        Safari, Edge, IE11.</p>
                </div>
            </div>

        </div>
    </div> <!-- card-end -->

</div> <!-- grid-end -->

@endsection