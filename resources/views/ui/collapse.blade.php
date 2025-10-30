@extends('layouts.vertical', ['title' => 'Collapse', 'subTitle' => 'Components', 'pageTitle' => 'Collapse'])

@section('content')

<div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Collapse with Target</h4>

            <button data-fc-type="collapse" data-fc-target="collapseWithTarget" type="button" class="btn bg-primary text-white">
                Collapse <i class="ri-arrow-down-s-line fc-collapse-open:rotate-180 ms-2 transition-all text-xl"></i>
            </button>

            <div id="collapseWithTarget" class="hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="pt-5 text-gray-800 dark:text-gray-200">
                    Tailwind CSS offers a seamless way to build modern websites without having to leave your HTML. The framework functions by scanning all of your HTML files, JavaScript components, and templates for class names, automatically generating corresponding styles, and writing them to a static CSS file. This approach is fast, flexible, and reliable, requiring zero runtime. Whether you need to create form layouts, tables, or modal dialogs, Tailwind CSS provides everything necessary to design beautiful, responsive web applications. Additionally, the framework includes checkout forms, shopping carts, and product views, making it the ideal choice for developing your next e-commerce front-end.
                </p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Auto Target Collapse</h4>

            <button data-fc-type="collapse" type="button" class="btn bg-primary text-white">
                Collapse
                <i class="ri-arrow-down-s-line fc-collapse-open:rotate-180 ms-2 transition-all text-xl"></i>
            </button>

            <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="pt-5 text-gray-800 dark:text-gray-200">
                    Tailwind CSS offers a seamless way to build modern websites without having to leave your HTML. The framework functions by scanning all of your HTML files, JavaScript components, and templates for class names, automatically generating corresponding styles, and writing them to a static CSS file. This approach is fast, flexible, and reliable, requiring zero runtime. Whether you need to create form layouts, tables, or modal dialogs, Tailwind CSS provides everything necessary to design beautiful, responsive web applications. Additionally, the framework includes checkout forms, shopping carts, and product views, making it the ideal choice for developing your next e-commerce front-end.
                </p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Read More Collapse</h4>

            <a href="#" data-fc-type="collapse" type="button" class="flex items-center text-primary">
                Read&nbsp;
                <span class="fc-collapse-open:hidden">more</span>
                <span class="fc-collapse-open:block hidden">less</span>
                <i class="ri-arrow-down-s-line fc-collapse-open:rotate-180 ms-2 transition-all text-xl"></i>
            </a>

            <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="pt-5 text-gray-800 dark:text-gray-200">
                    Tailwind CSS offers a seamless way to build modern websites without having to leave your HTML. The framework functions by scanning all of your HTML files, JavaScript components, and templates for class names, automatically generating corresponding styles, and writing them to a static CSS file. This approach is fast, flexible, and reliable, requiring zero runtime. Whether you need to create form layouts, tables, or modal dialogs, Tailwind CSS provides everything necessary to design beautiful, responsive web applications. Additionally, the framework includes checkout forms, shopping carts, and product views, making it the ideal choice for developing your next e-commerce front-end.
                </p>
            </div>
        </div>
    </div>

</div>

@endsection