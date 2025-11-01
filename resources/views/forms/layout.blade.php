@extends('layouts.app', ['title' => 'Form Layout', 'subTitle' => 'Form', 'pageTitle' => 'Form Layout'])

@section('content')
    <div class="grid lg:grid-cols-2 gap-6">

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Basic Example</h4>
                </div>

                <div class="pt-5">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="mb-2">Email address</label>
                            <input type="email" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-sm text-slate-700 dark:text-slate-400">We'll never
                                share your email
                                with anyone else.</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="mb-2">Password</label>
                            <input type="password" class="form-input" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <input type="checkbox" class="form-checkbox rounded border border-gray-200" id="checkmeout0">
                            <label class="text-gray-800 text-sm font-medium inline-block" for="checkmeout0">Check me out
                                !</label>
                        </div>
                        <button type="submit" class="btn bg-primary text-white">Submit</button> <!-- end button -->
                    </form> <!-- end form -->
                </div>

            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title mb-1">Horizontal form</h4>
                </div>

                <div class="pt-5">
                    <form class="flex flex-col gap-3">
                        <div class="grid grid-cols-4 items-center gap-6">
                            <label for="inputEmail3" class="mb-2">Email</label>
                            <div class="md:col-span-3">
                                <input type="email" class="form-input" id="inputEmail3" placeholder="Email">
                            </div>
                        </div> <!-- end grid -->

                        <div class="grid grid-cols-4 items-center gap-6">
                            <label for="inputPassword3" class="mb-2">Password</label>
                            <div class="md:col-span-3">
                                <input type="password" class="form-input" id="inputPassword3" placeholder="Password">
                            </div>
                        </div> <!-- end grid -->

                        <div class="grid grid-cols-4 items-center gap-6">
                            <label for="inputPassword5" class="mb-2">Re Password</label>
                            <div class="md:col-span-3">
                                <input type="password" class="form-input" id="inputPassword5" placeholder="Retype Password">
                            </div>
                        </div> <!-- end grid -->

                        <div class="grid grid-cols-4 items-center gap-6">
                            <div class="md:col-start-2">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="form-checkbox rounded border border-gray-200"
                                        id="checkmeout">
                                    <label class="text-gray-800 text-sm font-medium inline-block" for="checkmeout">Check me
                                        out !</label>
                                </div>
                            </div>
                        </div> <!-- end grid -->

                        <div class="grid grid-cols-4 items-center gap-6">
                            <div class="md:col-start-2">
                                <button type="submit" class="btn bg-info text-white">Sign in</button>
                            </div> <!-- end button -->
                        </div> <!-- end grid -->
                    </form> <!-- end form -->
                </div>

            </div>
        </div> <!-- end card -->

        <div class="lg:col-span-2">
            <div class="card">
                <div class="p-6">

                    <div class="flex justify-between items-center">
                        <h4 class="card-title mb-1">Sizing</h4>
                    </div>

                    <div class="pt-5">
                        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">
                            As shown in the previous examples, our grid system allows you to place any number of a <code
                                class="text-primary">.grid-cols-*</code> and <code class="text-primary">.flex</code>
                        </p>

                        <form class="grid grid-cols-4 gap-4 mb-6">
                            <div>
                                <label for="staticEmail2" class="sr-only">Email</label>
                                <input type="text" readonly class="form-input" id="staticEmail2"
                                    value="email@example.com">
                            </div>
                            <div>
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="password" class="form-input" id="inputPassword2" placeholder="Password">
                            </div>
                            <div>
                                <button type="submit" class="btn bg-primary text-white">Confirm identity</button>
                            </div>
                        </form> <!-- end form -->

                        <form>
                            <div class="flex flex-wrap items-center gap-4">
                                <div>
                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                    <input type="text" class="form-input" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                                <div>
                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                    <div class="flex">
                                        <span
                                            class="px-4 inline-flex items-center min-w-fit rounded-l border border-r-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400">@</span>
                                        <input type="text" class="form-input rounded-l-none" placeholder="Username">
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn bg-primary text-white">Submit</button>
                                    <!-- end button -->
                                </div>
                            </div>
                        </form> <!-- end form -->
                    </div>

                </div>
            </div> <!-- end card -->
        </div>

        <div class="lg:col-span-2">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between items-center">
                        <h4 class="card-title mb-1">Grid</h4>
                    </div>

                    <div class="pt-5">
                        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">More complex layouts can also be created
                            with the grid system.</p>

                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                                <div>
                                    <label for="inputEmail4" class="mb-2">Email</label>
                                    <input type="email" class="form-input" id="inputEmail4" placeholder="Email">
                                </div>
                                <div>
                                    <label for="inputPassword4" class="mb-2">Password</label>
                                    <input type="password" class="form-input" id="inputPassword4"
                                        placeholder="Password">
                                </div>

                                <div class="lg:col-span-2">
                                    <label for="inputAddress" class="mb-2">Address</label>
                                    <input type="text" class="form-input" id="inputAddress"
                                        placeholder="1234 Main St">
                                </div>

                                <div>
                                    <label for="inputAddress2" class="mb-2">Address 2</label>
                                    <input type="text" class="form-input" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                </div>

                                <div>
                                    <label for="inputCity" class="mb-2">City</label>
                                    <input type="text" class="form-input" id="inputCity">
                                </div>
                                <div>
                                    <label for="inputState" class="mb-2">State</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="inputZip" class="mb-2">Zip</label>
                                    <input type="text" class="form-input" id="inputZip">
                                </div>
                            </div> <!-- end grid -->

                            <div class="flex items-center gap-2 my-3">
                                <input type="checkbox" class="form-checkbox rounded border border-gray-200"
                                    id="customCheck11">
                                <label class="text-gray-800 text-sm font-medium inline-block" for="customCheck11">Check
                                    this custom checkbox !</label>
                            </div> <!-- end flex -->

                            <button type="submit" class="btn bg-primary text-white">Sign in</button> <!-- end button -->
                        </form> <!-- end form -->

                    </div>

                </div>
            </div> <!-- end card -->
        </div>

    </div> <!-- end grid -->
@endsection
