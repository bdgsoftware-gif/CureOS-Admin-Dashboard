@extends('layouts.vertical', ['title' => 'Accordions', 'subTitle' => 'Components', 'pageTitle' => 'Accordions'])

@section("content")

<div class="grid 2xl:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Default Accordion</h4>

            <div class="pt-5">
                <div class="border divide-y rounded-md dark:border-gray-700 dark:divide-gray-700" data-fc-type="accordion">

                    <!-- Accordion item one -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #1</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                    <!-- Accordion item two -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #2</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                    <!-- Accordion item three -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #3</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                </div> <!-- accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Flush Accordions</h4>

            <div class="pt-5">
                <div class="divide-y dark:divide-gray-700" data-fc-type="accordion">

                    <!-- Accordion item one -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #1</span>
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                    <!-- Accordion item two -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #2</span>
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                    <!-- Accordion item three -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #3</span>
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    </button> <!-- button end -->

                    <div class="w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                </div> <!-- accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Simple Card Accordion</h4>

            <div class="pt-5">
                <div data-fc-type="accordion" class="space-y-3">

                    <!-- Accordion item one -->
                    <div class="card">
                        <button data-fc-type="collapse" class="py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                            Collapsible Group Item #1
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="w-full overflow-hidden transition-[height] duration-300">
                            <div class="py-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
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
                            </div>
                        </div>
                    </div> <!-- card end -->

                    <!-- Accordion item Two -->
                    <div class="card">
                        <button data-fc-type="collapse" class="py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                            Collapsible Group Item #2
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="py-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
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
                            </div>
                        </div>
                    </div> <!-- card end -->

                    <!-- Accordion item Three -->
                    <div class="card">
                        <button data-fc-type="collapse" class="py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                            Collapsible Group Item #3
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="py-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
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
                            </div>
                        </div>
                    </div> <!-- card end -->

                </div> <!-- accordion end -->
            </div>
        </div> <!-- card end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Always Open Accordions</h4>

            <div class="pt-5">
                <div class="border divide-y rounded-md dark:border-gray-700 dark:divide-gray-700">

                    <!-- Accordion item one -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #1</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>


                    <!-- Accordion item two -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #2</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                    <!-- Accordion item three -->
                    <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                        <span>Accordion Item #3</span>
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
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
                        </div>
                    </div>

                </div> <!-- accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">With Icon</h4>

            <div class="pt-5">
                <div data-fc-type="accordion" class="space-y-3">

                    <!-- Accordion item one -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #1</span>
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                    <!-- Accordion item two -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #2</span>
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                    <!-- Accordion item three -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #3</span>
                            <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                </div> <!-- accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">No arrow</h4>

            <div class="pt-5">
                <div data-fc-type="accordion" class="space-y-3">

                    <!-- Accordion item one -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-3 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #1</span>
                        </button> <!-- button end -->

                        <div class="w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                    <!-- Accordion item two -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-3 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #2</span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                    <!-- Accordion item three -->
                    <div class="rounded-md border border-gray-200 dark:border-gray-700">
                        <button data-fc-type="collapse" class="fc-collapse-open:text-primary py-3 px-5 inline-flex items-center justify-between gap-x-3 w-full text-left font-medium transition text-gray-500 dark:text-gray-200">
                            <span>Accordion Item #3</span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="border-t py-4 px-5 border-gray-200 dark:border-gray-700">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Tailwind CSS offers a seamless way to build modern websites without
                                    having to leave your HTML. The framework functions by scanning all of
                                    your HTML files, JavaScript components, and templates for class names,
                                    automatically generating corresponding styles, and writing them to a
                                    static CSS file. This approach is fast, flexible, and reliable,
                                    requiring zero runtime. Whether you need to create form layouts, tables,
                                    or modal dialogs, Tailwind CSS provides everything necessary to design
                                    beautiful, responsive web applications. Additionally, the framework
                                    includes checkout forms, shopping carts, and product views, making it
                                    the ideal choice for developing your next e-commerce front-end.
                                </p>
                            </div>
                        </div>
                    </div> <!-- border end -->

                </div> <!-- accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Nested</h4>

            <div class="pt-5">
                <div data-fc-type="accordion" id="parent-accordion">

                    <!-- Accordion item one -->
                    <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                        Accordion Item #1
                    </button> <!-- button end -->

                    <div class="w-full overflow-hidden transition-[height] duration-300">
                        <div data-fc-type="accordion" class="ps-6" id="child-accordion">

                            <!-- Accordion sub item one -->
                            <button data-fc-type="collapse" data-fc-parent="child-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                                <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                                <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                                Sub accordion Item #1
                            </button> <!-- button end -->

                            <div class="w-full overflow-hidden transition-[height] duration-300">
                                <div class="py-4 px-5">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        Tailwind CSS offers a seamless way to build modern websites without
                                        having to leave your HTML. The framework functions by scanning all of
                                        your HTML files, JavaScript components, and templates for class names,
                                        automatically generating corresponding styles, and writing them to a
                                        static CSS file. This approach is fast, flexible, and reliable,
                                        requiring zero runtime. Whether you need to create form layouts, tables,
                                        or modal dialogs, Tailwind CSS provides everything necessary to design
                                        beautiful, responsive web applications. Additionally, the framework
                                        includes checkout forms, shopping carts, and product views, making it
                                        the ideal choice for developing your next e-commerce front-end.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion sub item two -->
                            <button data-fc-type="collapse" data-fc-parent="child-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                                <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                                <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                                Sub accordion Item #2
                            </button> <!-- button end -->

                            <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="py-4 px-5">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        <em>This is the second item's accordion body.</em> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion sub item three -->
                            <button data-fc-type="collapse" data-fc-parent="child-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                                <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                                <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                                Sub accordion Item #3
                            </button> <!-- button end -->

                            <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <div class="py-4 px-5">
                                    <p class="text-gray-800 dark:text-gray-200">
                                        <em>This is the first item's accordion body.</em> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions.
                                    </p>
                                </div>
                            </div>

                        </div> <!-- Accordion end -->
                    </div>

                    <!-- Accordion item two -->
                    <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                        Accordion Item #2
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
                                <em>This is the second item's accordion body.</em> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>

                    <!-- Accordion item three -->
                    <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                        <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                        <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                        Accordion Item #3
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
                                <em>This is the first item's accordion body.</em> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>

                </div> <!-- Accordion end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

</div> <!-- grid end -->

@endsection