@extends('layouts.app', ['title' => 'Nestable', 'subTitle' => 'Extended', 'pageTitle' => 'Nestable'])

@section('content')
    <div class="flex flex-col gap-6">

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Simple Drag and Drop Example (Grid)</h4>

                <div class="grid md:grid-cols-3 gap-6" id="gridDemo">
                    <div class="bg-primary text-white rounded-md">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->

                    <div class="card bg-secondary text-white">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->

                    <div class="bg-success text-white rounded-md">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->

                    <div class="bg-info text-white rounded-md">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->

                    <div class="bg-warning text-white rounded-md">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->

                    <div class="bg-danger text-white rounded-md">
                        <div class="p-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                            </footer>
                        </div>
                    </div> <!-- end card-->
                </div>
                <!-- end row-->

            </div>
        </div> <!-- end card-->


        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Move stuff between containers (Shared lists)</h4>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-light p-4 rounded-md dark:bg-gray-700">
                        <h5 class="mb-3">Part 1</h5>

                        <div id="move-left" class="space-y-3 h-full">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-1.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">Louis K. Bond</h5>
                                            <p class="mb-2"> Founder & CEO </p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-2.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">Dennis N. Cloutier</h5>
                                            <p class="mb-2"> Software Engineer </p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-3.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">Susan J. Sander</h5>
                                            <p class="mb-2"> Web Designer </p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="bg-light p-4 rounded-md dark:bg-gray-700">
                        <h5 class="mb-3">Part 2</h5>

                        <div id="move-right" class="space-y-3 h-full">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-4.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">James M. Short</h5>
                                            <p class="mb-2"> Web Developer </p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-5.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">Gabriel J. Snyder</h5>
                                            <p class="mb-2"> Business Analyst </p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-6.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="mb-1 mt-0">Louie C. Mason</h5>
                                            <p class="mb-2">Human Resources</p>
                                            <p>
                                                <span class="italic"><b>"</b>Disrupt pork belly poutine, asymmetrical
                                                    tousled succulents selfies. You probably haven't heard of them tattooed
                                                    master cleanse live-edge keffiyeh </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Move stuff between containers using handle</h4>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-light p-4 rounded-md dark:bg-gray-700">
                        <h5 class="mb-3">Part 1</h5>
                        <div id="moveHandle-left" class="space-y-3 h-full">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-7.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">Louis K. Bond</h5>
                                            <p> Founder & CEO </p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-8.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">Dennis N. Cloutier</h5>
                                            <p> Software Engineer </p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-9.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">Susan J. Sander</h5>
                                            <p> Web Designer </p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="bg-light p-4 rounded-md dark:bg-gray-700">
                        <h5 class="mb-3">Part 2</h5>
                        <div id="moveHandle-right" class="space-y-3 h-full">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-10.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">James M. Short</h5>
                                            <p> Web Developer </p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-5.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">Gabriel J. Snyder</h5>
                                            <p> Business Analyst </p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex items-start">
                                        <img src="/images/users/avatar-3.jpg" alt="image"
                                            class="me-3 h-12 w-12 rounded-full">
                                        <div class="flex-grow overflow-hidden">
                                            <h5 class="my-1">Louie C. Mason</h5>
                                            <p>Human Resources</p>
                                        </div>
                                        <span class="ri-drag-move-2-fill text-lg handle cursor-grab"></span>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Simple list example</h4>

                <div id="example1" class="flex flex-col gap-3">
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 1</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 2</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 3</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 4</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 5</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 6</div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Cloning</h4>

                <div class="grid md:grid-cols-2 gap-5">
                    <div id="example2-left" class="flex flex-col gap-3">
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 1</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 2</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 3</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 4</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 5</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 6</div>
                    </div>

                    <div id="example2-right" class="flex flex-col gap-3">
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            1</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            2</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            3</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            4</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            5</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            6</div>
                    </div>
                </div>

            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Disabling Sorting</h4>

                <div class="grid md:grid-cols-2 gap-5">
                    <div id="example3-left" class="flex flex-col gap-3">
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 1</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 2</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 3</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 4</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 5</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 6</div>
                    </div>

                    <div id="example3-right" class="flex flex-col gap-3">
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            1</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            2</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            3</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            4</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            5</div>
                        <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600 tinted">Item
                            6</div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Filter</h4>

                <div id="example4" class="flex flex-col gap-3">
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 1</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 2</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 3</div>
                    <div
                        class="filtered rounded border px-6 py-3 bg-danger text-white border-gray-200 dark:border-gray-600">
                        Filtered</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 4</div>
                    <div class="rounded cursor-grab px-6 py-3 border border-gray-200 dark:border-gray-600">Item 5</div>
                </div>
            </div>
        </div> <!-- end card -->

    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/extended-sortable.js'])
@endsection
