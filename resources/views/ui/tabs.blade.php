@extends('layouts.app', ['title' => 'Tabs', 'subTitle' => 'Components', 'pageTitle' => 'Tabs'])

@section('content')
    <div class="grid lg:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Basic</h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div data-fc-type="tab">

                        <nav class="flex space-x-3 border-b" aria-label="Tabs">
                            <button data-fc-target="#tabs-with-underline-1" type="button"
                                class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary active">
                                Tab One
                            </button> <!-- button-end -->
                            <button data-fc-target="#tabs-with-underline-2" type="button"
                                class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary">
                                Tab Two
                            </button> <!-- button-end -->
                            <button data-fc-target="#tabs-with-underline-3" type="button"
                                class="fc-tab-active:font-semibold fc-tab-active:border-primary fc-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all text-sm whitespace-nowrap text-gray-500 hover:text-primary">
                                Tab Three
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->

                        <div class="mt-3 overflow-hidden">
                            <div id="tabs-with-underline-1"
                                class="active fc-tab-active:opacity-100 opacity-0 transition-all duration-300 transform"
                                role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind is a utility-first CSS framework that offers an extensive range of
                                    classes, including flex, pt-4, text-center, and rotate-90. These classes can be
                                    combined to construct any design directly in your markup, allowing you to build
                                    your next idea even faster. Along with its efficiency, Tailwind also provides
                                    beautifully designed, expertly crafted components and templates, making it the
                                    perfect starting point for your next project. With over 200+ professionally
                                    designed, fully responsive, expertly crafted component examples at your
                                    disposal, you can seamlessly integrate them into your Tailwind projects and
                                    customize them according to your preferences.
                                </p>
                            </div> <!-- tabs-with-underline-1 end -->

                            <div id="tabs-with-underline-2"
                                class="hidden fc-tab-active:opacity-100 transition-all duration-300 transform opacity-0"
                                role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind Elements simplifies the process of adding a dark mode to your project.
                                    By utilizing Tailwind's classes and a dark variant, you can effortlessly
                                    integrate a dual-themed website. Our components come equipped with the dark
                                    theme variant as a default feature. Furthermore, like any Tailwind project, the
                                    default theme can be personalized by modifying the project's color palette, type
                                    scale, fonts, breakpoints, border radius values, and other attributes through
                                    the tailwind.config.js configuration file.
                                </p>
                            </div> <!-- tabs-with-underline-2 end -->

                            <div id="tabs-with-underline-3"
                                class="hidden fc-tab-active:opacity-100 transition-all duration-300 transform opacity-0"
                                role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind CSS offers a seamless way to build modern websites without having to
                                    leave your HTML. The framework functions by scanning all of your HTML files,
                                    JavaScript components, and templates for class names, automatically generating
                                    corresponding styles, and writing them to a static CSS file. This approach is
                                    fast, flexible, and reliable, requiring zero runtime. Whether you need to create
                                    form layouts, tables, or modal dialogs, Tailwind CSS provides everything
                                    necessary to design beautiful, responsive web applications. Additionally, the
                                    framework includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div> <!-- tabs-with-underline-3 end -->
                        </div>

                    </div> <!-- tab-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Bar with tab</h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div data-fc-type="tab">

                        <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-gray-600"
                            aria-label="Tabs" role="tablist">
                            <button data-fc-target="#bar-with-underline-1" type="button"
                                class="fc-tab-active:border-b-primary fc-tab-active:text-gray-900 dark:fc-tab-active:text-white relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 active"
                                id="bar-with-underline-item-1" aria-controls="bar-with-underline-1" role="tab">
                                Tab 1
                            </button> <!-- button-end -->
                            <button data-fc-target="#bar-with-underline-2" type="button"
                                class="fc-tab-active:border-b-primary fc-tab-active:text-gray-900 dark:fc-tab-active:text-white relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400"
                                id="bar-with-underline-item-2" aria-controls="bar-with-underline-2" role="tab">
                                Tab 2
                            </button> <!-- button-end -->
                            <button data-fc-target="#bar-with-underline-3" type="button"
                                class="fc-tab-active:border-b-primary fc-tab-active:text-gray-900 dark:fc-tab-active:text-white relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400"
                                id="bar-with-underline-item-3" aria-controls="bar-with-underline-3" role="tab">
                                Tab 3
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->

                        <div class="mt-3">
                            <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind is a utility-first CSS framework that offers an extensive range of
                                    classes,
                                    including flex, pt-4, text-center, and rotate-90. These classes can be combined
                                    to
                                    construct any design directly in your markup, allowing you to build your next
                                    idea
                                    even faster. Along with its efficiency, Tailwind also provides beautifully
                                    designed,
                                    expertly crafted components and templates, making it the perfect starting point
                                    for
                                    your next project. With over 200+ professionally designed, fully responsive,
                                    expertly crafted component examples at your disposal, you can seamlessly
                                    integrate
                                    them into your Tailwind projects and customize them according to your
                                    preferences.
                                </p>
                            </div> <!-- bar-with-underline-1 end -->

                            <div id="bar-with-underline-2" class="hidden" role="tabpanel"
                                aria-labelledby="bar-with-underline-item-2">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind Elements simplifies the process of adding a dark mode to your project.
                                    By
                                    utilizing Tailwind's classes and a dark variant, you can effortlessly integrate
                                    a
                                    dual-themed website. Our components come equipped with the dark theme variant as
                                    a
                                    default feature. Furthermore, like any Tailwind project, the default theme can
                                    be
                                    personalized by modifying the project's color palette, type scale, fonts,
                                    breakpoints, border radius values, and other attributes through the
                                    tailwind.config.js configuration file.
                                </p>
                            </div> <!-- bar-with-underline-2 end -->

                            <div id="bar-with-underline-3" class="hidden" role="tabpanel"
                                aria-labelledby="bar-with-underline-item-3">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind CSS offers a seamless way to build modern websites without having to
                                    leave
                                    your HTML. The framework functions by scanning all of your HTML files,
                                    JavaScript
                                    components, and templates for class names, automatically generating
                                    corresponding
                                    styles, and writing them to a static CSS file. This approach is fast, flexible,
                                    and
                                    reliable, requiring zero runtime. Whether you need to create form layouts,
                                    tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful,
                                    responsive web applications. Additionally, the framework includes checkout
                                    forms,
                                    shopping carts, and product views, making it the ideal choice for developing
                                    your
                                    next e-commerce front-end.
                                </p>
                            </div> <!-- bar-with-underline-3 end -->
                        </div>

                    </div> <!-- tab-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Card type tab</h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div data-fc-type="tab" class="">

                        <nav class="flex space-x-2 border-b border-gray-200 dark:border-gray-600" aria-label="Tabs"
                            role="tablist">
                            <button data-fc-target="#card-type-tab-1" type="button"
                                class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 active"
                                id="card-type-tab-item-1" aria-controls="card-type-tab-1" role="tab">
                                Tab 1
                            </button> <!-- button-end -->
                            <button data-fc-target="#card-type-tab-2" type="button"
                                class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300"
                                id="card-type-tab-item-2" aria-controls="card-type-tab-2" role="tab">
                                Tab 2
                            </button> <!-- button-end -->
                            <button data-fc-target="#card-type-tab-3" type="button"
                                class="fc-tab-active:bg-white fc-tab-active:border-b-transparent fc-tab-active:text-primary dark:fc-tab-active:bg-gray-800 dark:fc-tab-active:border-b-gray-800 dark:fc-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 dark:hover:text-gray-300"
                                id="card-type-tab-item-3" aria-controls="card-type-tab-3" role="tab">
                                Tab 3
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->

                        <div class="mt-3">
                            <div id="card-type-tab-1" role="tabpanel" aria-labelledby="card-type-tab-item-1">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind is a utility-first CSS framework that offers an extensive range of classes,
                                    including flex, pt-4, text-center, and rotate-90. These classes can be combined to
                                    construct any design directly in your markup, allowing you to build your next idea
                                    even faster. Along with its efficiency, Tailwind also provides beautifully designed,
                                    expertly crafted components and templates, making it the perfect starting point for
                                    your next project. With over 200+ professionally designed, fully responsive,
                                    expertly crafted component examples at your disposal, you can seamlessly integrate
                                    them into your Tailwind projects and customize them according to your preferences.
                                </p>
                            </div> <!-- card-type-tab-1 end -->

                            <div id="card-type-tab-2" class="hidden" role="tabpanel"
                                aria-labelledby="card-type-tab-item-2">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind Elements simplifies the process of adding a dark mode to your project. By
                                    utilizing Tailwind's classes and a dark variant, you can effortlessly integrate a
                                    dual-themed website. Our components come equipped with the dark theme variant as a
                                    default feature. Furthermore, like any Tailwind project, the default theme can be
                                    personalized by modifying the project's color palette, type scale, fonts,
                                    breakpoints, border radius values, and other attributes through the
                                    tailwind.config.js configuration file.
                                </p>
                            </div> <!-- card-type-tab-2 end -->

                            <div id="card-type-tab-3" class="hidden" role="tabpanel"
                                aria-labelledby="card-type-tab-item-3">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind CSS offers a seamless way to build modern websites without having to leave
                                    your HTML. The framework functions by scanning all of your HTML files, JavaScript
                                    components, and templates for class names, automatically generating corresponding
                                    styles, and writing them to a static CSS file. This approach is fast, flexible, and
                                    reliable, requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design beautiful,
                                    responsive web applications. Additionally, the framework includes checkout forms,
                                    shopping carts, and product views, making it the ideal choice for developing your
                                    next e-commerce front-end.
                                </p>
                            </div> <!-- card-type-tab-3 end -->
                        </div>

                    </div> <!-- tab-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Pill tab</h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div data-fc-type="tab">

                        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400 active"
                                id="pills-with-brand-color-item-1" data-fc-target="#pills-with-brand-color-1"
                                aria-controls="pills-with-brand-color-1" role="tab">
                                Tab 1
                            </button> <!-- button-end -->
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400"
                                id="pills-with-brand-color-item-2" data-fc-target="#pills-with-brand-color-2"
                                aria-controls="pills-with-brand-color-2" role="tab">
                                Tab 2
                            </button> <!-- button-end -->
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400"
                                id="pills-with-brand-color-item-3" data-fc-target="#pills-with-brand-color-3"
                                aria-controls="pills-with-brand-color-3" role="tab">
                                Tab 3
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->

                        <div class="mt-3">
                            <div id="pills-with-brand-color-1" role="tabpanel"
                                aria-labelledby="pills-with-brand-color-item-1">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind is a utility-first CSS framework that offers an extensive range of classes,
                                    including flex, pt-4, text-center, and rotate-90. These classes can be combined to
                                    construct any design directly in your markup, allowing you to build your next idea
                                    even faster. Along with its efficiency, Tailwind also provides beautifully designed,
                                    expertly crafted components and templates, making it the perfect starting point for
                                    your next project. With over 200+ professionally designed, fully responsive,
                                    expertly crafted component examples at your disposal, you can seamlessly integrate
                                    them into your Tailwind projects and customize them according to your preferences.
                                </p>
                            </div> <!-- pills-with-brand-color-1 end -->

                            <div id="pills-with-brand-color-2" class="hidden" role="tabpanel"
                                aria-labelledby="pills-with-brand-color-item-2">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind Elements simplifies the process of adding a dark mode to your project. By
                                    utilizing Tailwind's classes and a dark variant, you can effortlessly integrate a
                                    dual-themed website. Our components come equipped with the dark theme variant as a
                                    default feature. Furthermore, like any Tailwind project, the default theme can be
                                    personalized by modifying the project's color palette, type scale, fonts,
                                    breakpoints, border radius values, and other attributes through the
                                    tailwind.config.js configuration file.
                                </p>
                            </div> <!-- pills-with-brand-color-2 end -->

                            <div id="pills-with-brand-color-3" class="hidden" role="tabpanel"
                                aria-labelledby="pills-with-brand-color-item-3">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind CSS offers a seamless way to build modern websites without having to leave
                                    your HTML. The framework functions by scanning all of your HTML files, JavaScript
                                    components, and templates for class names, automatically generating corresponding
                                    styles, and writing them to a static CSS file. This approach is fast, flexible, and
                                    reliable, requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design beautiful,
                                    responsive web applications. Additionally, the framework includes checkout forms,
                                    shopping carts, and product views, making it the ideal choice for developing your
                                    next e-commerce front-end.
                                </p>
                            </div> <!-- pills-with-brand-color-3 end -->
                        </div>

                    </div> <!-- tab-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Justifyed tab</h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div data-fc-type="tab">

                        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-medium text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400 active"
                                data-fc-target="#fill-and-justify-1" aria-controls="fill-and-justify-1" role="tab">
                                Tab 1
                            </button> <!-- button-end -->
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-medium text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400"
                                data-fc-target="#fill-and-justify-2" aria-controls="fill-and-justify-2" role="tab">
                                This is the longest link I've seen
                            </button> <!-- button-end -->
                            <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-medium text-gray-500 rounded-lg hover:text-primary dark:hover:text-gray-400"
                                data-fc-target="#fill-and-justify-3" aria-controls="fill-and-justify-3" role="tab">
                                Tab 3
                            </button> <!-- button-end -->
                        </nav> <!-- nav-end -->

                        <div class="mt-3">
                            <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind is a utility-first CSS framework that offers an extensive range of classes,
                                    including flex, pt-4, text-center, and rotate-90. These classes can be combined to
                                    construct any design directly in your markup, allowing you to build your next idea
                                    even faster. Along with its efficiency, Tailwind also provides beautifully designed,
                                    expertly crafted components and templates, making it the perfect starting point for
                                    your next project. With over 200+ professionally designed, fully responsive,
                                    expertly crafted component examples at your disposal, you can seamlessly integrate
                                    them into your Tailwind projects and customize them according to your preferences.
                                </p>
                            </div> <!-- fill-and-justify-1 end -->

                            <div id="fill-and-justify-2" class="hidden" role="tabpanel"
                                aria-labelledby="fill-and-justify-item-2">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind Elements simplifies the process of adding a dark mode to your project. By
                                    utilizing Tailwind's classes and a dark variant, you can effortlessly integrate a
                                    dual-themed website. Our components come equipped with the dark theme variant as a
                                    default feature. Furthermore, like any Tailwind project, the default theme can be
                                    personalized by modifying the project's color palette, type scale, fonts,
                                    breakpoints, border radius values, and other attributes through the
                                    tailwind.config.js configuration file.
                                </p>
                            </div> <!-- fill-and-justify-2 end -->

                            <div id="fill-and-justify-3" class="hidden" role="tabpanel"
                                aria-labelledby="fill-and-justify-item-3">
                                <p class="text-gray-500 dark:text-gray-400">
                                    Tailwind CSS offers a seamless way to build modern websites without having to leave
                                    your HTML. The framework functions by scanning all of your HTML files, JavaScript
                                    components, and templates for class names, automatically generating corresponding
                                    styles, and writing them to a static CSS file. This approach is fast, flexible, and
                                    reliable, requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design beautiful,
                                    responsive web applications. Additionally, the framework includes checkout forms,
                                    shopping carts, and product views, making it the ideal choice for developing your
                                    next e-commerce front-end.
                                </p>
                            </div> <!-- fill-and-justify-3 end -->
                        </div>

                    </div> <!-- tab-end -->
                </div>

            </div>
        </div> <!-- card-end -->

        <div class="card">
            <div class="p-5">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Tabs Vertical Left </h4>
                </div> <!-- card-title end -->

                <div class="pt-5">
                    <div class="flex gap-3">
                        <div data-fc-type="tab" class="grid md:grid-cols-5 gap-5">

                            <nav class="flex md:flex-col gap-2 space-y-2" aria-label="Tabs" role="tablist">
                                <button data-fc-target="#vertical-tab-with-border-1" type="button"
                                    class="fc-tab-active:bg-primary fc-tab-active:text-white btn bg-transparent active"
                                    id="vertical-tab-with-border-item-1" aria-controls="vertical-tab-with-border-1"
                                    role="tab">
                                    Tab 1
                                </button> <!-- button-end -->
                                <button data-fc-target="#vertical-tab-with-border-2" type="button"
                                    class="fc-tab-active:bg-primary fc-tab-active:text-white btn bg-transparent"
                                    id="vertical-tab-with-border-item-2" aria-controls="vertical-tab-with-border-2"
                                    role="tab">
                                    Tab 2
                                </button> <!-- button-end -->
                                <button data-fc-target="#vertical-tab-with-border-3" type="button"
                                    class="fc-tab-active:bg-primary fc-tab-active:text-white btn bg-transparent"
                                    id="vertical-tab-with-border-item-3" aria-controls="vertical-tab-with-border-3"
                                    role="tab">
                                    Tab 3
                                </button> <!-- button-end -->
                            </nav> <!-- nav-end -->

                            <div class="md:col-span-4">
                                <div id="vertical-tab-with-border-1" role="tabpanel"
                                    aria-labelledby="vertical-tab-with-border-item-1">
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Tailwind is a utility-first CSS framework that offers an extensive range of
                                        classes, including flex, pt-4, text-center, and rotate-90. These classes can be
                                        combined to construct any design directly in your markup, allowing you to build
                                        your next idea even faster. Along with its efficiency, Tailwind also provides
                                        beautifully designed, expertly crafted components and templates, making it the
                                        perfect starting point for your next project. With over 200+ professionally
                                        designed, fully responsive, expertly crafted component examples at your
                                        disposal, you can seamlessly integrate them into your Tailwind projects and
                                        customize them according to your preferences.
                                    </p>
                                </div> <!-- vertical-tab-with-border-1 end -->

                                <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel"
                                    aria-labelledby="vertical-tab-with-border-item-2">
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Tailwind Elements simplifies the process of adding a dark mode to your project.
                                        By utilizing Tailwind's classes and a dark variant, you can effortlessly
                                        integrate a dual-themed website. Our components come equipped with the dark
                                        theme variant as a default feature. Furthermore, like any Tailwind project, the
                                        default theme can be personalized by modifying the project's color palette, type
                                        scale, fonts, breakpoints, border radius values, and other attributes through
                                        the tailwind.config.js configuration file.
                                    </p>
                                </div> <!-- vertical-tab-with-border-2 end -->

                                <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel"
                                    aria-labelledby="vertical-tab-with-border-item-3">
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Tailwind CSS offers a seamless way to build modern websites without having to
                                        leave your HTML. The framework functions by scanning all of your HTML files,
                                        JavaScript components, and templates for class names, automatically generating
                                        corresponding styles, and writing them to a static CSS file. This approach is
                                        fast, flexible, and reliable, requiring zero runtime. Whether you need to create
                                        form layouts, tables, or modal dialogs, Tailwind CSS provides everything
                                        necessary to design beautiful, responsive web applications. Additionally, the
                                        framework includes checkout forms, shopping carts, and product views, making it
                                        the ideal choice for developing your next e-commerce front-end.
                                    </p>
                                </div> <!-- vertical-tab-with-border-3 end -->
                            </div>

                        </div> <!-- tab-end -->
                    </div>
                </div>

            </div>
        </div> <!-- card-end -->

    </div> <!-- grid-end -->
@endsection
