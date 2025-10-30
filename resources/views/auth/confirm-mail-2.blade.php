@extends('layouts.auth', ['title' => 'Confirm Mail'])

@section('content')
    <div class="bg-white lg:max-w-[480px] z-10 p-12 relative w-full h-full border-t-[3px] border-primary dark:bg-gray-800">
        <div class="flex flex-col h-full gap-4">
            <div class="mb-8 text-center lg:text-start">
                <a href="{{ route('any', 'index') }}" class="flex justify-center lg:justify-start">
                    <img src="/images/logo.png" alt="logo" class="h-6 hidden dark:block">
                    <img src="/images/logo-dark.png" alt="logo" class="h-6 block dark:hidden">
                </a>
            </div>
            <div class="my-auto">
                <div class="text-center">
                    <img src="/images/svg/mail_sent.svg" alt="mail sent image" class="h-16 mx-auto">
                    <h4 class="text-dark/70 text-center text-lg font-bold dark:text-light/80 mb-2 mt-9">Please check your
                        email</h4>
                    <p class="text-gray-400 mb-9">A email has been send to youremail@domain.com. Please check for an email
                        from company and click on the included link to reset your password.</p>
                </div>

                <form action="#">
                    <div class="text-center mb-6">
                        <a href="{{ route('any', 'index') }}" class="btn bg-primary text-white w-full" type="submit"><i
                                class="ri-home-4-line me-1.5"></i> Back To Home </a>
                    </div>
                </form>
            </div>

            <footer class="text-center justify-center h-14 -mb-12">
                <p class="text-muted">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © CureOS - End Brackets
                </p>
            </footer>
        </div>
    </div>
@endsection
