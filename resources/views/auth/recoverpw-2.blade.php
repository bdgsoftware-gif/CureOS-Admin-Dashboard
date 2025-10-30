@extends('layouts.auth', ['title' => 'Recover Password'])

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
            <h4 class="text-dark/70 text-lg font-semibold dark:text-light/80 mb-2">Reset Password</h4>
            <p class="text-gray-400 mb-9">Enter your email address and we'll send you an email with instructions to reset your password.</p>

            <!-- form -->
            <form action="#">
                <div class="mb-6 space-y-2">
                    <label for="emailaddress" class="font-semibold text-gray-500">Email address</label>
                    <input class="form-input" type="email" id="emailaddress" required="" placeholder="Enter your email">
                </div>

                <div class="text-center">
                    <button class="btn bg-primary text-white w-full" type="submit"><i class="ri-login-box-line me-1"></i> Reset Password </button>
                </div>
            </form>
        </div>

        <footer class="text-center justify-center h-14 -mb-12">
            Back to <a href="{{ route('second', ['auth', 'login-2'])}}" class="text-muted ms-1 link-offset-3 underline-offset-4"><b>Log In</b></a>
        </footer>
    </div>
</div>

@endsection