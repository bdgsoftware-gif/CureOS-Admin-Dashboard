@extends('layouts.auth', ['title' => 'Lock Screen'])

@section('content')

<div class="bg-white lg:max-w-[480px] z-10 p-12 relative w-full h-full border-t-[3px] border-primary dark:bg-gray-800">
    <div class="flex flex-col h-full gap-4">
        <div class="mb-8 text-center lg:text-start">
            <a href="{{route('any', 'index')}}" class="flex justify-center lg:justify-start">
                <img src="/images/logo.png" alt="logo" class="h-6 hidden dark:block">
                <img src="/images/logo-dark.png" alt="logo" class="h-6 block dark:hidden">
            </a>
        </div>
        <div class="my-auto">
            <!-- title-->
            <div class="">
                <img src="/images/users/avatar-1.jpg" alt="" class="rounded-full shadow h-16 mx-auto">
                <h4 class="text-dark/70 text-center text-lg font-bold dark:text-light/80 mb-2 mt-6"> Hi ! Tosha </h4>
                <p class="text-gray-500 text-center mb-9">Enter your password to access the admin.</p>
            </div>

            <!-- form -->
            <form action="#">
                <div class="mb-6 space-y-2">
                    <label for="password" class="font-semibold text-gray-500">Password</label>
                    <div class="flex items-center">
                        <input type="password" id="password" class="form-input rounded-e-none" placeholder="Enter your password">
                        <span class="px-3 py-1 border rounded-e-md -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                    </div>
                </div>
                <div class=" text-center">
                    <button class="btn bg-primary text-white w-full" type="submit"><i class="ri-login-box-line me-1"></i> Log In </button>
                </div>
                <!-- social-->
                <div class="text-center mt-9">
                    <p class="text-gray-400 text-base mb-6">Authentication in with</p>
                    <ul class="inline-flex gap-2">
                        <li class="">
                            <a href="javascript: void(0);" class="rounded-full border-2 border-primary text-primary w-8 h-8 inline-flex items-center justify-center"><i class="ri-facebook-circle-fill"></i></a>
                        </li>
                        <li class="">
                            <a href="javascript: void(0);" class="rounded-full border-2 border-danger text-danger w-8 h-8 inline-flex items-center justify-center"><i class="ri-google-fill"></i></a>
                        </li>
                        <li class="">
                            <a href="javascript: void(0);" class="rounded-full border-2 border-info text-info w-8 h-8 inline-flex items-center justify-center"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="">
                            <a href="javascript: void(0);" class="rounded-full border-2 border-secondary text-secondary w-8 h-8 inline-flex items-center justify-center"><i class="ri-github-fill"></i></a>
                        </li>
                    </ul>
                </div>
            </form>
            <!-- end form-->
        </div>

        <footer class="text-center justify-center h-14 -mb-12">
            <p class="text-gray-400">Not you? return <a href="{{ route('second', ['auth', 'register-2'])}}" class="text-gray-500 ms-1"><b>Sign In</b></a></p>
        </footer>
    </div>
</div>

@endsection