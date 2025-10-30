@extends('layouts.vertical', ['title' => 'File Upload', 'subTitle' => 'Forms', 'pageTitle' => 'File Upload'])

@section('css')
@vite(['node_modules/dropzone/dist/min/dropzone.min.css'])
@endsection

@section('content')

<div class="card">
    <div class="p-6">

        <div class="flex justify-between items-center">
            <h4 class="card-title mb-1">Dropzone</h4>
        </div>

        <div class="pt-5">
            <form action="#" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple="multiple">
                </div>
                <div class="dz-message needsclick w-full">
                    <div class="mb-3">
                        <i class="ri-upload-cloud-line text-4xl text-gray-300 dark:text-gray-200"></i>
                    </div>

                    <h5 class="text-xl text-gray-600 dark:text-gray-200">Drop files here or click to upload.</h5>
                </div>
            </form> <!-- end form -->

            <div class="text-center mt-4">
                <button type="button" class="btn bg-violet-500 border-violet-500 text-white">Send Files</button>
            </div> <!-- end button -->

        </div>

    </div>
</div> <!-- end card -->

@endsection

@section('script')
@vite(['node_modules/dropzone/dist/min/dropzone.min.js'])
@endsection