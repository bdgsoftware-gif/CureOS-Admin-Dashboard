@extends('layouts.vertical', ['title' => 'Alerts', 'subTitle' => 'Components', 'pageTitle' => 'Alerts'])

@section('content')

<div class="grid 2xl:grid-cols-2 gap-6">

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Default Alert</h4>

            <div class="pt-5">
                <div class="space-y-4">

                    <div class="bg-primary/10 text-primary border border-primary/20 text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Primary</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-secondary/10 text-secondary border border-secondary/20 text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Secondary</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-success/10 text-success   border border-success/20 text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Success</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-danger/10 text-danger border border-danger/20 text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Error</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-warning border-warning text-white text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Warning</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-info border-info text-white  text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Info</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-light border-light text-slate-900 text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Light</span> - A simple primary alert—check it out!
                    </div>
                    <div class="bg-dark border-dark text-white text-sm rounded-md py-3 px-5" role="alert">
                        <span class="font-bold">Dark</span> - A simple primary alert—check it out!
                    </div>

                </div> <!-- Default Alert end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Dismissing Alerts</h4>

            <div class="pt-5">
                <div class="space-y-4">

                    <div id="dismiss-example-primary" class="border bg-primary text-white border-primary rounded-md py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Primary</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-primary" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-primary end -->

                    <div id="dismiss-example-secondary" class="border bg-secondary text-white border-secondary rounded-md py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Secondary</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-secondary" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-secondary end -->

                    <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Success</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-success" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-success end -->

                    <div id="dismiss-example-danger" class="border bg-danger text-white border-danger rounded-md py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Danger</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-danger end -->

                    <div id="dismiss-example-warning" class="border bg-warning/10 text-warning border-warning/20 rounded py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Warning</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-warning" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-warning end -->

                    <div id="dismiss-example" class="border bg-info/10 text-info border-info/20 rounded py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Info</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example end -->

                    <div id="dismiss-example-light" class="border bg-light/10 text-light border-light/20 rounded py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Light</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-light" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-light end -->

                    <div id="dismiss-example-dark" class="border bg-dark/10 text-dark border-dark/20 rounded py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Dark</span> - A simple primary alert—check it out!
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-dark" type="button">
                            <i class="ri-close-line text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-dark end -->

                </div> <!-- Dismissing Alerts end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Custom Alerts</h4>

            <div class="pt-5">
                <div class="space-y-4">

                    <div class="text-primary border border-primary/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Primary</span> alert—check it out!
                    </div>
                    <div class="text-secondary border border-secondary/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Secondary</span> alert—check it out!
                    </div>
                    <div class="text-success border border-success/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Success</span> alert—check it out!
                    </div>
                    <div class="text-danger border border-danger/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Danger</span> alert—check it out!
                    </div>
                    <div class="text-warning border border-warning/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Warning</span> alert—check it out!
                    </div>
                    <div class="text-info border border-info/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Info</span> alert—check it out!
                    </div>
                    <div class="text-light border border-light/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Light</span> alert—check it out!
                    </div>
                    <div class="text-dark border border-dark/20 text-sm rounded-md py-3 px-5" role="alert">
                        This is a <span class="font-bold">Dark</span> alert—check it out!
                    </div>

                </div> <!-- Custom Alerts end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Link Color</h4>

            <div class="pt-5">
                <div class="space-y-4">

                    <div class="bg-primary/10 text-primary border border-primary/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-secondary/10 text-secondary border border-secondary/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-success/10 text-success border border-success/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-danger/10 text-danger border border-danger/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-warning/10 text-warning border border-warning/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-info/10 text-info border border-info/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-light/10 text-light border border-light/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>
                    <div class="bg-dark/10 text-dark border border-dark/20 text-sm rounded-md py-3 px-5" role="alert">
                        A simple primary alert with <a href="#" class="alert-link"><span class="font-bold">an example link</span></a>. Give it a click if you like.
                    </div>

                </div> <!-- Link Color end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Icons with Alerts</h4>

            <div class="pt-5">
                <div class="space-y-4">

                    <div class="bg-success/10 text-success border border-success/20 text-sm rounded-md py-3 px-5" role="alert">
                        <div class="flex items-center gap-1.5">
                            <i class="mgc_check_line text-base"></i>
                            <p class="text-sm">
                                This is a <span class="font-bold">Success</span> alert - check it out!
                            </p>
                        </div>
                    </div> <!-- success end -->

                    <div class="bg-danger/10 text-danger border border-danger/20 text-sm rounded-md py-3 px-5" role="alert">
                        <div class="flex items-center gap-1.5">
                            <i class="mgc_close_circle_line text-base"></i>
                            <p class="text-sm">
                                This is a <span class="font-bold">Danger</span> alert - check it out!
                            </p>
                        </div>
                    </div> <!-- danger end -->

                    <div class="bg-warning/10 text-warning border border-warning/20 text-sm rounded-md py-3 px-5" role="alert">
                        <div class="flex items-center gap-1.5">
                            <i class="mgc_alert_line text-base"></i>
                            <p class="text-sm">
                                This is a <span class="font-bold">Warning</span> alert - check it out!
                            </p>
                        </div>
                    </div> <!-- warning end -->

                    <div class="bg-info/10 text-info border border-info/20 text-sm rounded-md py-3 px-5" role="alert">
                        <div class="flex items-center gap-1.5">
                            <i class="mgc_warning_line text-base"></i>
                            <p class="text-sm">
                                This is a <span class="font-bold">Info</span> alert - check it out!
                            </p>
                        </div>
                    </div> <!-- info end -->

                </div> <!-- Icons with Alerts end -->
            </div>

        </div> <!-- card-body end -->
    </div> <!-- card end -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-1">Additional content</h4>

            <div class="pt-5">
                <div class="bg-info/10 border border-info/20 text-info rounded-md p-4" role="alert">
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-info inline-flex items-center justify-center rounded-full h-12 w-12">
                            <i class="ri-check-line text-xl text-white font-bold"></i>
                        </div>

                        <div class="mt-3">
                            <h3 class="font-semibold text-lg mb-2">
                                Well done!
                            </h3>
                            <p class="text-sm">
                                Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr class="my-4 border-info/20">
                            <p class="text-sm">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                    </div> <!-- flex end -->

                </div> <!-- card end -->
            </div>

        </div> <!-- card end -->
    </div> <!-- card end -->

</div> <!-- grid end -->

@endsection