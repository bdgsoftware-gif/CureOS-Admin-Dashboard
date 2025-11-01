@extends('layouts.app', ['title' => 'Alerts', 'subTitle' => 'Components', 'pageTitle' => 'Alerts'])

@section('content')
    <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
        <div class="card p-6">
            <h4 class="card-title">Sizing - Images</h4>
            <div class="flex flex-wrap items-end gap-6">
                <img src="/images/users/avatar-2.jpg" alt="image" class="h-8 w-8 rounded">
                <img src="/images/users/avatar-3.jpg" alt="image" class="h-12 w-12 rounded">
                <img src="/images/users/avatar-4.jpg" alt="image" class="h-16 w-16 rounded">
                <img src="/images/users/avatar-5.jpg" alt="image" class="h-24 w-24 rounded">
                <img src="/images/users/avatar-6.jpg" alt="image" class="h-32 w-32 rounded">
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Rounded Circle</h4>
            <div class="flex flex-wrap items-end gap-6">
                <img src="/images/users/avatar-4.jpg" alt="image" class="h-16 w-16 rounded-full">
                <img src="/images/users/avatar-5.jpg" alt="image" class="h-24 w-24 rounded-full">
                <img src="/images/users/avatar-6.jpg" alt="image" class="h-32 w-32 rounded-full">
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Sizing - Background Color</h4>
            <div class="flex flex-wrap items-end gap-6">
                <div class="w-8 h-8 justify-center items-center flex bg-primary text-white rounded-md"><span
                        class="">CT</span></div>

                <div class="w-12 h-12 justify-center items-center flex bg-success text-white rounded-md"><span
                        class="text-lg">CT</span></div>

                <div class="w-16 h-16 justify-center items-center flex bg-info/20 text-info rounded-md"><span
                        class="text-xl">CT</span></div>

                <div class="w-24 h-24 justify-center items-center flex bg-danger text-white rounded-md"><span
                        class="text-2xl">CT</span></div>

                <div class="w-32 h-32 justify-center items-center flex bg-warning/25 text-warning rounded-md"><span
                        class="text-4xl">CT</span></div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Rounded Circle Background</h4>

            <div class="flex flex-wrap items-end gap-3">
                <div class="w-16 h-16 justify-center items-center flex bg-info/20 text-info rounded-full">
                    <span class="text-xl">CT</span>
                </div>

                <div class="w-24 h-24 justify-center items-center flex bg-danger text-white rounded-full">
                    <span class="text-2xl">CT</span>
                </div>

                <div class="w-32 h-32 justify-center items-center flex bg-warning/25 text-warning rounded-full">
                    <span class="text-4xl">CT</span>
                </div>
            </div>
        </div>

        <div class="xl:col-span-2">
            <div class="card p-6">
                <h4 class="card-title">Rounded Circle Background</h4>
                <div class="flex flex-wrap gap-3">
                    <div class="lg:w-1/6 md:1/3 px-3">
                        <img src="/images/small/small-2.jpg" alt="" class="w-52 rounded">
                        <p class="text-info mt-2"><code>.rounded</code></p>
                    </div>
                    <div class="lg:w-1/6 md:1/3 px-3">
                        <img src="/images/users/avatar-6.jpg" alt="" class="w-32 rounded mx-auto">
                        <p class="text-info mt-2 text-center"><code>.rounded</code></p>
                    </div>
                    <div class="lg:w-1/6 md:1/3 px-3">
                        <img src="/images/users/avatar-7.jpg" alt="" class="w-32 rounded-full mx-auto">
                        <p class="text-info mt-2 text-center"><code>.rounded-full</code></p>
                    </div>
                    <div class="lg:w-1/6 md:1/3 px-3">
                        <img src="/images/small/small-3.jpg" alt=""
                            class="w-52 p-1 border border-gray-200 rounded bg-slate-100">
                        <p class="text-info mt-2"><code>.rounded .border</code></p>
                    </div>
                    <div class="lg:w-1/6 md:1/3 px-3">
                        <img src="/images/users/avatar-8.jpg" alt=""
                            class="w-32 rounded-full p-1 border border-gray-200 bg-slate-100">
                        <p class="text-info mt-2 text-start"><code>.rounded-full .border</code></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Rounded Circle Background Top Status</h4>
            <div class="flex flex-wrap items-end gap-3">
                <div class="relative inline-flex">
                    <div class="w-8 h-8 justify-center items-center flex bg-primary rounded-full">
                        <span class="text-white">CT</span>
                    </div>
                    <div class="absolute end-0 h-2 w-2 rounded-full border border-white bg-success">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-12 h-12 justify-center items-center flex bg-dark rounded-full">
                        <span class="text-white text-lg">CT</span>
                    </div>
                    <div class="absolute end-0 m-0.5 h-2.5 w-2.5 rounded-full border border-white bg-success">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-16 h-16 justify-center items-center flex bg-success/25 rounded-full">
                        <span class="text-success text-xl">CT</span>
                    </div>
                    <div class="absolute end-0 m-1 h-3 w-3 rounded-full border border-white bg-gray-400">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-20 h-20 justify-center items-center flex bg-info rounded-full">
                        <span class="text-white text-2xl">CT</span>
                    </div>
                    <div class="absolute end-0 m-1.5 h-3 w-3 rounded-full border border-white bg-danger">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-24 h-24 justify-center items-center flex bg-danger rounded-full">
                        <span class="text-white text-2xl">CT</span>
                    </div>
                    <div class="absolute end-0 m-2 h-3.5 w-3.5 rounded-full border-2 border-white bg-primary">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-28 h-28 justify-center items-center flex bg-info/25 rounded-full">
                        <span class="text-info text-3xl">CT</span>
                    </div>
                    <div class="absolute end-0 m-2.5 h-4 w-4 rounded-full border-2 border-white bg-primary">
                    </div>
                </div>

                <div class="relative inline-flex">
                    <div class="w-32 h-32 justify-center items-center flex bg-primary/25 rounded-full">
                        <span class="text-primary text-4xl">CT</span>
                    </div>
                    <div class="absolute end-0 m-2.5 h-5 w-5 rounded-full border-4 border-white bg-success">
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Circular avatars with bottom status</h4>
            <div class="flex flex-wrap items-end gap-3">
                <div class="relative inline-block">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-gray-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-2.5 w-2.5 rounded-full ring-2 ring-white bg-red-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <span class="absolute bottom-0 end-0 block h-3 w-3 rounded-full ring-2 ring-white bg-green-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-3.5 w-3.5 rounded-full ring-2 ring-white bg-orange-400"></span>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Rounded avatars with bottom status</h4>
            <div class="flex flex-wrap items-end gap-3">
                <div class="relative inline-block">
                    <img class="inline-block h-8 w-8 rounded-md ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-1.5 w-1.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-gray-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-9 w-9 rounded-md ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-2.5 w-2.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-red-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-12 w-12 rounded-md ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-3 w-3 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-green-400"></span>
                </div>
                <div class="relative inline-block">
                    <img class="inline-block h-16 w-16 rounded-md ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                    <span
                        class="absolute bottom-0 end-0 block h-3.5 w-3.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-orange-400"></span>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Media</h4>
            <div class="flex flex-wrap items-end gap-3">
                <div class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <img class="inline-block flex-shrink-0 h-16 w-16 rounded-full" src="/images/users/avatar-5.jpg"
                            alt="Image Description">
                        <div class="ms-3">
                            <h3 class="font-semibold text-gray-800 dark:text-white">Scote Wanner</h3>
                            <p class="text-sm font-medium text-gray-400">scote@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Stack</h4>
            <div class="flex-col space-y-2">
                <div class="flex">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Grid</h4>
            <div class="flex flex-wrap items-end gap-3">
                <div class="grid grid-cols-3 gap-4">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-5.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-6.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-7.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="/images/users/avatar-8.jpg" alt="Image Description">
                    <div
                        class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-slate-200 border-2 border-white font-medium text-gray-700 shadow-sm align-middle hover:bg-slate-300 focus:outline-none focus:bg-primary/25 focus:text-primary focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-slate-700 dark:hover:bg-slate-600 dark:border-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:bg-primary/25 dark:focus:text-primary dark:focus:ring-offset-gray-800">
                        <span class="font-medium leading-none">9+</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Border color</h4>
            <div class="flex flex-col gap-3">
                <div class="flex">
                    <img class="inline-block h-8 w-8 rounded-full border-2 border-primary"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full border-2 border-primary"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full border-2 border-primary"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-8 w-8 rounded-full border-2 border-primary"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-9 w-9 rounded-full border-2 border-red-300"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full border-2 border-red-300"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full border-2 border-red-300"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-9 w-9 rounded-full border-2 border-red-300"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-teal-500"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-teal-500"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-teal-500"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-teal-500"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
                <div class="flex">
                    <img class="inline-block h-16 w-16 rounded-full border-2 border-purple-400"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full border-2 border-purple-400"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full border-2 border-purple-400"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <img class="inline-block h-16 w-16 rounded-full border-2 border-purple-400"
                        src="/images/users/avatar-4.jpg" alt="Image Description">
                </div>
            </div>
        </div>

        <div class="card p-6">
            <h4 class="card-title">Image - Background Color</h4>
            <div class="flex gap-3">
                <div class="flex -space-x-2">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-white dark:border-gray-800"
                        src="/images/users/avatar-1.jpg" alt="Image Description">
                    <div
                        class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-warning text-white border-2 border-white dark:border-gray-800">
                        <span class="font-medium leading-none">CT</span>
                    </div>
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-white dark:border-gray-800"
                        src="/images/users/avatar-2.jpg" alt="Image Description">
                    <img class="inline-block h-12 w-12 rounded-full border-2 border-white dark:border-gray-800"
                        src="/images/users/avatar-3.jpg" alt="Image Description">
                    <div
                        class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-info text-white border-2 border-white dark:border-gray-800">
                        <span class="font-medium leading-none">CT</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end grid-->
@endsection
