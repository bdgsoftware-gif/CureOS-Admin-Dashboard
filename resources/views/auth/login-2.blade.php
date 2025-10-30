@extends('layouts.auth', ['title' => 'Login-2'])

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
            <h4 class="text-dark/70 text-lg font-semibold dark:text-light/80 mb-2">Sign In</h4>
            <p class="text-gray-400 mb-9">Enter your email address and password to access account.</p>

            <!-- form -->
            <form action="#">
                <div class="mb-6 space-y-2">
                    <label for="emailaddress" class="font-semibold text-gray-500">Email address</label>
                    <input class="form-input" type="email" id="emailaddress" required="" placeholder="Enter your email">
                </div>
                <div class="mb-6 space-y-2">
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="font-semibold text-gray-500">Password</label>
                        <a href="{{ route('second', ['auth', 'recoverpw-2'])}}" class="text-muted text-xs">Forgot your password?</a>
                    </div>

                    <div class="flex items-center">
                        <input type="password" id="password" class="form-input rounded-e-none" placeholder="Enter your password">
                        <span class="px-3 py-1 border rounded-e-md -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" class="form-checkbox rounded text-primary" id="checkbox-signin">
                        <label class="ms-2 text-sm font-medium" for="checkbox-signin">Remember me</label>
                    </div>
                </div>
                <div class=" text-center">
                    <button class="btn bg-primary text-white w-full" type="submit"><i class="ri-login-box-line me-1"></i> Log In </button>
                </div>
                <!-- social-->
                <div class="text-center mt-9">
                    <p class="text-gray-400 text-base mb-6">Sign in with</p>
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
            <p class="text-gray-400">Don't have an account? <a href="{{ route('second', ['auth', 'register-2'])}}" class="text-gray-500 ms-1"><b>Sign Up</b></a></p>
        </footer>
    </div>
</div>

@endsection
