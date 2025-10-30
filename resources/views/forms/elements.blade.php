@extends('layouts.vertical', ['title' => 'Form Elements', 'subTitle' => 'Forms', 'pageTitle' => 'Elements'])

@section('content')

<div class="card mb-6">
    <div class="p-6">
        <h4 class="card-title mb-4">Input Types</h4>

        <div class="grid lg:grid-cols-2 gap-6">
            <div>
                <form>
                    <div class="mb-3">
                        <label class="mb-2" for="simpleinput">Text</label>
                        <input type="text" id="simpleinput" class="form-input">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-email">Email</label>
                        <input type="email" id="example-email" name="example-email" class="form-input" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-password">Password</label>
                        <input type="password" id="example-password" class="form-input" value="password">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-palaceholder">Placeholder</label>
                        <input type="text" id="example-palaceholder" class="form-input" placeholder="placeholder">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-textarea">Text area</label>
                        <textarea class="form-input" id="example-textarea" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-readonly">Readonly</label>
                        <input type="text" id="example-readonly" class="form-input" readonly="" value="Readonly value">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-disable">Disabled</label>
                        <input type="text" class="form-input" id="example-disable" disabled="" value="Disabled value">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-helping">Helping text</label>
                        <input type="text" id="example-helping" class="form-input" placeholder="Helping text">
                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-select">Input Select</label>
                        <select class="form-select" id="example-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </form><!-- From End -->
            </div>

            <div>
                <form>


                    <div class="mb-3">
                        <label class="mb-2" for="example-multiselect">Multiple Select</label>
                        <select id="example-multiselect" multiple class="form-input">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-fileinput">Default file input</label>
                        <input type="file" id="example-fileinput" class="form-input border">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-date">Date</label>
                        <input class="form-input" id="example-date" type="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-month">Month</label>
                        <input class="form-input" id="example-month" type="month" name="month">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-time">Time</label>
                        <input class="form-input" id="example-time" type="time" name="time">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-week">Week</label>
                        <input class="form-input" id="example-week" type="week" name="week">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-number">Number</label>
                        <input class="form-input" id="example-number" type="number" name="number">
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="example-color">Color</label>
                        <input class="form-input h-12" id="example-color" type="color" name="color" value="#727cf5">
                    </div>

                    <div class="mt-5">
                        <label class="mb-2" for="example-range">Range</label>
                        <input class="form-range mt-2" id="example-range" type="range" name="range" min="0" max="100%">
                    </div>
                </form>
            </div>

        </div><!-- end Grid -->

    </div>
</div> <!-- end card -->

<div class="grid lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Select</h4>

            <select class="form-select mb-3">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <select class="form-select form-select-lg mb-3">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <select class="form-select form-select-sm mb-3">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="flex items-center mb-3">
                <label class="btn border border-gray-200 dark:border-gray-600 rounded-e-none" for="inputGroupSelect01">Options</label>
                <select class="form-select border-s-0 rounded-s-none" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="flex">
                <select class="form-select border-e-0 rounded-e-none" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn border border-gray-200 dark:border-gray-600 rounded-s-none" type="button">Button</button>
            </div>
        </div> <!-- end p-6-->
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Input Sizes</h4>

            <form>
                <div class="mb-3">
                    <label for="example-input-small" class="mb-2">Small</label>
                    <input type="text" id="example-input-small" name="example-input-small" class="form-input form-input-sm" placeholder=".form-input-sm">
                </div>

                <div class="mb-3">
                    <label for="example-input-normal" class="mb-2">Normal (Default)</label>
                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-input" placeholder="Normal">
                </div>

                <div class="mb-3">
                    <label for="example-input-large" class="mb-2">Large</label>
                    <input type="text" id="example-input-large" name="example-input-large" class="form-input form-input-lg" placeholder=".form-input-sm">
                </div>

            </form> <!-- end From -->
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Checkboxes</h4>

            <div>
                <div class="mt-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck1" checked>
                            <label class="ms-1.5" for="customCheck1">Check this checkbox</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck2">
                            <label class="ms-1.5" for="customCheck2">Check this checkbox</label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h6 class="text-sm mb-2">Inline</h6>
                    <div class="flex gap-5">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="InlineCheckbox1" checked>
                            <label class="ms-1.5" for="InlineCheckbox1">Check this checkbox</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="InlineCheckbox2">
                            <label class="ms-1.5" for="InlineCheckbox2">Check this checkbox</label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h6 class="text-sm mb-2">Disabled</h6>

                    <div class="flex gap-2">
                        <div class="flex items-center opacity-75">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck5" checked disabled>
                            <label class="ms-1.5" for="customCheck5">Check this checkbox</label>
                        </div>
                        <div class="flex items-center opacity-75">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="customCheck6" disabled>
                            <label class="ms-1.5" for="customCheck6">Check this checkbox</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 mt-5">
                    <h6>Colors</h6>
                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-primary" type="checkbox" id="customckeck1" checked>
                        <label class="ms-1.5" for="customckeck1">Default Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-success" type="checkbox" id="customckeck2" checked>
                        <label class="ms-1.5" for="customckeck2">Success Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-info" type="checkbox" id="customckeck3" checked>
                        <label class="ms-1.5" for="customckeck3">Info Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-secondary" type="checkbox" id="customckeck4" checked>
                        <label class="ms-1.5" for="customckeck4">Secondary Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-warning" type="checkbox" id="checkBox5" checked>
                        <label class="ms-1.5" for="checkBox5">Warning Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-danger" type="checkbox" id="checkBox7" checked>
                        <label class="ms-1.5" for="checkBox7">Danger Checkbox</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-checkbox rounded text-dark" type="checkbox" id="checkBox8" checked>
                        <label class="ms-1.5" for="checkBox8">Dark Checkbox</label>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Radios</h4>
            <div>
                <div class="mt-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio01" checked>
                            <label class="ms-1.5" for="formRadio01">Toggle this custom radio</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" class="form-radio text-primary" name="formRadio" id="formRadio02">
                            <label class="ms-1.5" for="formRadio02">Or toggle this other custom radio</label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h6 class="text-sm mb-2">Inline</h6>
                    <div class="flex gap-5">
                        <div class="flex items-center">
                            <input type="radio" class="form-radio text-primary" name="InlineRadio" id="InlineRadio01" checked>
                            <label class="ms-1.5" for="InlineRadio01">Toggle this custom radio</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" class="form-radio text-primary" name="InlineRadio" id="InlineRadio02">
                            <label class="ms-1.5" for="InlineRadio02">Or toggle this other custom radio</label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h6 class="text-sm mb-2">Disabled</h6>

                    <div class="flex gap-5">
                        <div class="opacity-75">
                            <input type="radio" class="form-radio text-primary" id="formRadio04" checked disabled>
                            <label class="ms-1.5" for="formRadio04">Toggle this custom radio</label>
                        </div>

                        <div class="opacity-75">
                            <input type="radio" class="form-radio text-primary" id="formRadio05" disabled>
                            <label class="ms-1.5" for="formRadio05">Or toggle this other custom radio</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 mt-5">
                    <h4>Colors</h4>
                    <div class="flex items-center">
                        <input class="form-radio text-primary" type="radio" id="formRadio10" checked>
                        <label class="ms-1.5" for="formRadio10">Default Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-success" type="radio" id="formRadio11" checked>
                        <label class="ms-1.5" for="formRadio11">Success Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-info" type="radio" id="formRadio12" checked>
                        <label class="ms-1.5" for="formRadio12">Info Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-secondary" type="radio" id="formRadio13" checked>
                        <label class="ms-1.5" for="formRadio13">Secondary Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-warning" type="radio" id="formRadio14" checked>
                        <label class="ms-1.5" for="formRadio14">Warning Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-danger" type="radio" id="formRadio15" checked>
                        <label class="ms-1.5" for="formRadio15">Danger Radio</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-radio text-dark" type="radio" id="formRadio16" checked>
                        <label class="ms-1.5" for="formRadio16">Dark Radio</label>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title">Switch</h4>

            <div>
                <div class="mt-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="formSwitch1" checked>
                            <label class="ms-1.5" for="formSwitch1">Check this Switch</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-checkbox rounded text-primary" id="formSwitch2">
                            <label class="ms-1.5" for="formSwitch2">Check this Switch</label>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="text-sm mb-2">Inline</h6>
                    <div class="flex gap-5">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-switch text-primary" id="formInlineSwitch1" checked>
                            <label class="ms-1.5" for="formInlineSwitch1">Check this Switch</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-switch text-primary" id="formInlineSwitch2">
                            <label class="ms-1.5" for="formInlineSwitch2">Check this Switch</label>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="text-sm mb-2">Size</h6>
                    <div class="flex gap-5">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-switch form-switch-sm text-primary" id="formSwitchSmall" checked>
                            <label class="ms-1.5" for="formSwitchSmall">Small Switch</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="form-switch form-switch-lg text-primary" id="formSwitchlarge">
                            <label class="ms-1.5" for="formSwitchlarge">Large Switch</label>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="text-sm mb-2">Disabled</h6>

                    <div class="flex gap-2">
                        <div class="flex items-center opacity-75">
                            <input type="checkbox" class="form-switch text-primary" id="formSwitch5" checked disabled>
                            <label class="ms-1.5" for="formSwitch5">Check this Switch</label>
                        </div>
                        <div class="flex items-center opacity-75">
                            <input type="checkbox" class="form-switch text-primary" id="formSwitch6" disabled>
                            <label class="ms-1.5" for="formSwitch6">Check this Switch</label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-5">
                    <div class="flex flex-col gap-3">
                        <h6>Colors</h6>
                        <div class="flex items-center">
                            <input class="form-switch text-primary" type="checkbox" id="formSwitchColor1" checked>
                            <label class="ms-1.5" for="formSwitchColor1">Default Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-success" type="checkbox" id="formSwitchColor2" checked>
                            <label class="ms-1.5" for="formSwitchColor2">Success Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-info" type="checkbox" id="formSwitchColor3" checked>
                            <label class="ms-1.5" for="formSwitchColor3">Info Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-secondary" type="checkbox" id="formSwitchColor4" checked>
                            <label class="ms-1.5" for="formSwitchColor4">Secondary Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-warning" type="checkbox" id="formSwitchColor5" checked>
                            <label class="ms-1.5" for="formSwitchColor5">Warning Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-danger" type="checkbox" id="formSwitchColor7" checked>
                            <label class="ms-1.5" for="formSwitchColor7">Danger Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch text-dark" type="checkbox" id="formSwitchColor8" checked>
                            <label class="ms-1.5" for="formSwitchColor8">Dark Switch</label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h6>Square Switch</h6>
                        <div class="flex items-center">
                            <input class="form-switch square text-primary" type="checkbox" id="formSwitchSquare1" checked>
                            <label class="ms-1.5" for="formSwitchSquare1">Default Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-success" type="checkbox" id="formSwitchSquare2" checked>
                            <label class="ms-1.5" for="formSwitchSquare2">Success Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-info" type="checkbox" id="formSwitchSquare3" checked>
                            <label class="ms-1.5" for="formSwitchSquare3">Info Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-secondary" type="checkbox" id="formSwitchSquare4" checked>
                            <label class="ms-1.5" for="formSwitchSquare4">Secondary Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-warning" type="checkbox" id="formSwitchSquare5" checked>
                            <label class="ms-1.5" for="formSwitchSquare5">Warning Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-danger" type="checkbox" id="formSwitchSquare7" checked>
                            <label class="ms-1.5" for="formSwitchSquare7">Danger Switch</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch square text-dark" type="checkbox" id="formSwitchSquare8" checked>
                            <label class="ms-1.5" for="formSwitchSquare8">Dark Switch</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Custom Switch</h4>

            <div class="flex flex-wrap items-center gap-2">
                <!-- without label-->
                <input type="checkbox" id="switch0" data-switch="none">
                <label for="switch0" data-on-label="" data-off-label=""></label>

                <!-- Bool Switch-->
                <input type="checkbox" id="switch1" checked="" data-switch="bool">
                <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                <!-- Primary Switch-->
                <input type="checkbox" id="switch2" checked="" data-switch="primary">
                <label for="switch2" data-on-label="On" data-off-label="Off"></label>

                <!-- Success Switch-->
                <input type="checkbox" id="switch3" checked="" data-switch="success">
                <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                <!-- Info Switch-->
                <input type="checkbox" id="switch4" checked="" data-switch="info">
                <label for="switch4" data-on-label="On" data-off-label="Off"></label>

                <!-- Warning Switch-->
                <input type="checkbox" id="switch5" checked="" data-switch="warning">
                <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                <!-- Danger Switch-->
                <input type="checkbox" id="switch6" checked="" data-switch="danger">
                <label for="switch6" data-on-label="On" data-off-label="Off"></label>

                <!-- Dark Switch-->
                <input type="checkbox" id="switch7" checked="" data-switch="secondary">
                <label for="switch7" data-on-label="Yes" data-off-label="No"></label>

                <!-- Disbled Switch-->
                <input type="checkbox" id="switchdis" data-switch="primary" checked="" disabled="">
                <label for="switchdis" data-on-label="On" data-off-label="Off"></label>
            </div>

        </div>
    </div> <!-- end card -->

</div>

@endsection