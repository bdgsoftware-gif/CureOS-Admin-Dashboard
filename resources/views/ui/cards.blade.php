@extends('layouts.app', ['title' => 'Cards', 'subTitle' => 'Components', 'pageTitle' => 'Cards'])

@section('content')
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">

        <div class="card">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-1.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title">Card title </h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4">Some quick example text to build on the card title and
                    make up the bulk of the card's content. Some quick example text to build on the card title and make up
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Button
                </a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-2.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title"> Card title</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400"> Some quick example text to build on the card..</p>
                <p class="mt-5 py-5 text-xs text-gray-500 dark:text-gray-500">Cras justo odio</p>
                <div class="pt-6 flex gap-5">
                    <a href="javascript: void(0);" class="text-primary">Card link</a><!-- Button End -->
                    <a href="javascript: void(0);" class="text-primary">Another link</a><!-- Button End -->
                </div>
            </div>
        </div><!-- Card End -->

        <div class="card">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-3.jpg" alt="Image Description">
            <div class="p-6">
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4">Some quick example text to build on the card title and
                    make up the bulk of the card's content. Some quick example text to build on the card title and make up.
                </p>
                <a class="btn bg-primary text-white mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h3 class="card-title">Card title</h3><!-- end card title -->
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-500">Support card subtitle</p>
            </div>
            <img class="w-full h-auto" src="/images/small/small-4.jpg" alt="Image Description">
            <div class="p-6"> Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <div class="pt-6 flex gap-5">
                    <a href="javascript: void(0);" class="text-primary">Card link</a><!-- Button End -->
                    <a href="javascript: void(0);" class="text-primary">Another link</a><!-- Button End -->
                </div>
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="grid sm:grid-cols-2 gap-6 mt-4">
        <div class="card">
            <div class="p-6">
                <h3 class="card-title"> Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4">With supporting text below as a natural lead-in to
                    additional content. </p>
                <a class="btn bg-primary text-white mt-2 w-full" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h3 class="card-title">Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4">With supporting text below as a natural lead-in to
                    additional content. </p>
                <a class="btn bg-primary text-white mt-2 w-full" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="grid sm:grid-cols-3 gap-6 mt-6">
        <div class="card">
            <div class="p-6">
                <h3 class="card-titlepb-3">
                    Featured
                </h3><!-- end card title -->
                <h5 class="text-sm font-medium pt-6">Special title treatment</h5>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4">
                    With supporting text below as a natural lead-in to additional content. </p>
                <a class="btn bg-primary text-white mt-2" href="#">
                    Go somewhere
                </a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h3 class="card-titlepb-3">
                    Quote
                </h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-4 pt-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-6">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer>
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="p-6">
                <h3 class="card-titlepb-6">
                    Featured
                </h3><!-- end card title -->
                <a class="btn bg-primary text-white mt-2" href="#">
                    Go somewhere
                </a>
            </div>
            <hr>
            <div class="p-6">
                <p class="text-gray-400">2 days ago</p>
            </div>
        </div><!-- Card End -->
    </div>

    <div class="my-7">
        <h4 class="card-title">Card Colored</h4>
    </div>

    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-6">
        <div class="card bg-secondary">
            <div class="p-6">
                <h3 class="text-base font-bold text-white">Special title treatment</h3><!-- end card title -->
                <p class="mt-2 text-white"> With supporting text below as a natural lead-in to additional content.</p>
                <a class="btn bg-primary text-white mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card bg-primary">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="card bg-success">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="card bg-info">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="card bg-warning">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="card bg-danger">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="my-7">
        <h4 class="card-title">Card Bordered</h4>
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
        <div class="card border border-secondary">
            <div class="p-6">
                <h3 class="text-base font-bold text-secondary dark:text-white mb-2">Special title treatment</h3>
                <!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a class="btn bg-secondary text-white mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card border border-primary">
            <div class="p-6">
                <h3 class="text-base font-bold text-primary dark:text-white mb-2">Special title treatment</h3>
                <!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a class="btn bg-primary text-white mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card border border-success">
            <div class="p-6">
                <h3 class="text-base font-bold text-success dark:text-white mb-2">Special title treatment</h3>
                <!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a class="btn bg-success text-white mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="my-7">
        <h4 class="card-title">Horizontal Card</h4>
    </div>

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="card">
            <div class="grid sm:grid-cols-3">
                <img src="/images/small/small-4.jpg" class="rounded-s-md my-auto" alt="">
                <div class="p-6 sm:col-span-2">
                    <h3 class="card-title mb-4">Card title</h3><!-- end card title -->
                    <p class="mt-1 text-gray-800 dark:text-gray-400">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="mt-5"><small>Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div><!-- Card End -->

        <div class="card">
            <div class="grid sm:grid-cols-3">
                <div class="p-6 sm:col-span-2">
                    <h3 class="card-title mb-4">Card title</h3><!-- end card title -->
                    <p class="mt-1 text-gray-800 dark:text-gray-400">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="mt-5"><small>Last updated 3 mins ago</small></p>
                </div>
                <img src="/images/small/small-1.jpg" class="rounded-e-md my-auto" alt="">
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="my-7">
        <h4 class="card-title">Stretched link</h4>
    </div>

    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <div class="card relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-2.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-3">Card with stretched link</h3><!-- end card title -->
                <a class="btn bg-primary text-white mt-2 after:absolute after:inset-0" href="#">Go
                    somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-3.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-4">
                    <a href="#" class="after:absolute after:inset-0 text-success">Card with stretched link</a>
                </h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400">Some quick example text to build on the card up the bulk
                    of the card's content.</p>
            </div>
        </div><!-- Card End -->

        <div class="card relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-4.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-3">Card with stretched link</h3><!-- end card title -->
                <a class="btn bg-info text-white mt-2 after:absolute after:inset-0" href="#">Go
                    somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="card relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/small-1.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-4">
                    <a href="#" class="after:absolute after:inset-0 text-primary">Card with stretched link</a>
                </h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400">Some quick example text to build on the card up the bulk
                    of the card's content.</p>
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->

    <div class="my-7">
        <h4 class="card-title">Card Group</h4>
    </div>

    <div class="grid sm:grid-cols-3 gap-6 sm:gap-0">
        <div class="card sm:rounded-none sm:rounded-s-md h-full">
            <img class="w-full h-auto sm:rounded-tl-md sm:rounded-none rounded-t-md" src="/images/small/small-1.jpg"
                alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="mt-5 pb-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->

        <div class="card sm:rounded-none h-full">
            <img class="w-full h-auto sm:rounded-none rounded-md" src="/images/small/small-2.jpg"
                alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400">This card has supporting text below as a natural lead-in
                    to additional content.</p>
                <p class="mt-5 pb-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->

        <div class="card sm:rounded-none sm:rounded-e-md h-full">
            <img class="w-full h-auto sm:rounded-tr-md sm:rounded-none rounded-t-md" src="/images/small/small-3.jpg"
                alt="Image Description">
            <div class="p-6">
                <h3 class="card-title mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-gray-800 dark:text-gray-400">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This card has even longer content than the first to show that
                    equal height action.</p>
                <p class="mt-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->
    </div><!-- Grid End -->
@endsection
