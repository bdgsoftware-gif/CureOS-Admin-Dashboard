@extends('layouts.app', ['title' => 'Form Editor', 'subTitle' => 'Forms', 'pageTitle' => 'Editor'])

@section('css')
    @vite(['node_modules/quill/dist/quill.bubble.css', 'node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <div class="flex flex-col gap-6">

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title">Snow Editor</h4>
                </div>

                <div class="pt-5">
                    <div id="snow-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is a simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>Select a text to reveal the toolbar.</li>
                            <li>Edit rich document on-the-fly, so elastic!</li>
                        </ul>
                        <p><br></p>
                        <p>End of simple area</p>
                    </div> <!-- end snow-editor -->
                </div>

            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">

                <div class="flex justify-between items-center">
                    <h4 class="card-title">Bubble Editor</h4>
                </div>

                <div class="pt-5">
                    <div id="bubble-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is a simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>Select a text to reveal the toolbar.</li>
                            <li>Edit rich document on-the-fly, so elastic!</li>
                        </ul>
                        <p><br></p>
                        <p>End of simple area</p>
                    </div> <!-- end bubble-editor -->
                </div>

            </div>
        </div> <!-- end card -->

    </div> <!-- end flex -->
@endsection

@section('script')
    @vite(['resources/js/pages/form-editor.js'])
@endsection
