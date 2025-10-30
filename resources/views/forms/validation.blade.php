@extends('layouts.vertical', ['title' => 'Validation', 'subTitle' => 'Forms', 'pageTitle' => 'Validation'])

@section('content')

<div class="card">
    <div class="p-6">

        <div class="flex justify-between items-center">
            <h4 class="card-title mb-1">Browser defaults</h4>
        </div>

        <div class="pt-5">
            <form class="grid lg:grid-cols-3 sm:grid-cols-2 gap-6">
                <div>
                    <label for="validationDefault01" class="mb-2">First name</label>
                    <input type="text" class="form-input" id="validationDefault01" value="Mark" required>
                </div>

                <div>
                    <label for="validationDefault02" class="mb-2">Last name</label>
                    <input type="text" class="form-input" id="validationDefault02" value="Otto" required>
                </div>

                <div>
                    <label for="validationDefaultUsername" class="mb-2">Username</label>
                    <div class="flex items-center ">
                        <span class="btn bg-light border border-gray-200 rounded-e-none dark:border-gray-600 dark:bg-gray-600" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-input border-s-0 rounded-s-none" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>

                <div>
                    <label for="validationDefault03" class="mb-2">City</label>
                    <input type="text" class="form-input" id="validationDefault03" required>
                </div>

                <div>
                    <label for="validationDefault04" class="mb-2">State</label>
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <div>
                    <label for="validationDefault05" class="mb-2">Zip</label>
                    <input type="text" class="form-input" id="validationDefault05" required>
                </div>

                <div class="lg:col-span-3">
                    <div class="flex items-center">
                        <input class="form-checkbox rounded" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="ms-1.5" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <div class="lg:col-span-3">
                    <button class="btn bg-primary text-white" type="submit">Submit form</button>
                </div> <!-- end button -->
            </form> <!-- end form -->
        </div>

    </div>
</div> <!-- end card -->

@endsection