@extends('layouts.app', ['title' => 'Advanced', 'subTitle' => 'Forms', 'pageTitle' => 'Advanced'])

@section('css')
    @vite(['node_modules/@simonwep/pickr/dist/themes/monolith.min.css', 'node_modules/@simonwep/pickr/dist/themes/classic.min.css', 'node_modules/@simonwep/pickr/dist/themes/nano.min.css', 'node_modules/choices.js/public/assets/styles/choices.min.css', 'node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
    <div class="grid grid-cols-1 gap-6 mt-6">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Choices Select</h4>
            </div>

            <div class="p-6">
                <div class="section">

                    <div class="mb-6">
                        <h2 class="mb-4 text-base">Text inputs</h2>

                        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                            <div>
                                <label class="mb-2" for="choices-text-remove-button">Limited to 5 values with remove
                                    button</label>
                                <input class="form-input" id="choices-text-remove-button" type="text"
                                    value="Preset-1,Preset-2,Preset-3" placeholder="Enter something" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-unique-values">Unique values only, no
                                    pasting</label>
                                <input class="form-input" id="choices-text-unique-values" type="text"
                                    value="preset-1, preset-2" placeholder="This is a placeholder" class="custom class" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-email-filter">Email addresses only</label>
                                <input class="form-input" id="choices-text-email-filter" type="text"
                                    placeholder="This is a placeholder" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-disabled">Disabled</label>
                                <input class="form-input" id="choices-text-disabled" type="text"
                                    value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk"
                                    placeholder="This is a placeholder" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-prepend-append-value">Prepends and appends a value
                                    to each items return value</label>
                                <input class="form-input" id="choices-text-prepend-append-value" type="text"
                                    value="preset-1, preset-2" placeholder="This is a placeholder" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-preset-values">Preset values passed through
                                    options</label>
                                <input class="form-input" id="choices-text-preset-values" type="text"
                                    value="Michael Smith" placeholder="This is a placeholder" />
                            </div>

                            <div>
                                <label class="mb-2" for="choices-text-i18n">I18N labels</label>
                                <input class="form-input" id="choices-text-i18n" type="text" />
                            </div>

                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="mb-4 text-base">Multiple select input</h2>

                        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                            <div>
                                <label class="mb-2" for="choices-multiple-default">Default</label>
                                <select class="form-input" data-trigger name="choices-multiple-default"
                                    id="choices-multiple-default" placeholder="This is a placeholder" multiple>
                                    <option value="Choice 1" selected>Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                    <option value="Choice 4" disabled>Choice 4</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-multiple-remove-button">With remove button</label>
                                <select class="form-input" name="choices-multiple-remove-button"
                                    id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                    <option value="Choice 1" selected>Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                    <option value="Choice 4">Choice 4</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-multiple-groups">Option groups</label>
                                <select class="form-input" name="choices-multiple-groups" id="choices-multiple-groups"
                                    placeholder="This is a placeholder" multiple>
                                    <option value="">Choose a city</option>
                                    <optgroup label="UK">
                                        <option value="London">London</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Liverpool">Liverpool</option>
                                    </optgroup>
                                    <optgroup label="FR">
                                        <option value="Paris">Paris</option>
                                        <option value="Lyon">Lyon</option>
                                        <option value="Marseille">Marseille</option>
                                    </optgroup>
                                    <optgroup label="DE" disabled>
                                        <option value="Hamburg">Hamburg</option>
                                        <option value="Munich">Munich</option>
                                        <option value="Berlin">Berlin</option>
                                    </optgroup>
                                    <optgroup label="US">
                                        <option value="New York">New York</option>
                                        <option value="Washington" disabled>Washington</option>
                                        <option value="Michigan">Michigan</option>
                                    </optgroup>
                                    <optgroup label="SP">
                                        <option value="Madrid">Madrid</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Malaga">Malaga</option>
                                    </optgroup>
                                    <optgroup label="CA">
                                        <option value="Montreal">Montreal</option>
                                        <option value="Toronto">Toronto</option>
                                        <option value="Vancouver">Vancouver</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-multiple-remote-fetch">Options from remote source
                                    (Fetch API) &amp; limited to 5</label>
                                <select class="form-input" name="choices-multiple-remote-fetch"
                                    id="choices-multiple-remote-fetch" multiple></select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-multiple-labels">Use label in event
                                    (add/remove)</label>
                                <p id="message"></p>
                                <select id="choices-multiple-labels" multiple></select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="mb-4 text-base">Single select input</h2>

                        <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                            <div>
                                <label class="mb-2" id="choices-single-default-label"
                                    for="choices-single-default">Default</label>
                                <select class="form-input" data-trigger name="choices-single-default"
                                    id="choices-single-default" placeholder="This is a search placeholder">
                                    <option value="">This is a placeholder</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-remote-fetch">Options from remote source (Fetch
                                    API)</label>
                                <select class="form-input" name="choices-single-remote-fetch"
                                    id="choices-single-remote-fetch">
                                    <option value="">Pick an Arctic Monkeys' record</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-remove-xhr">Options from remote source (Fetch
                                    API) &amp; remove button</label>
                                <select class="form-input" name="choices-single-remove-xhr"
                                    id="choices-single-remove-xhr">
                                    <option value="">Pick a Smiths' record</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-groups">Option groups</label>
                                <select class="form-input" data-trigger name="choices-single-groups"
                                    id="choices-single-groups">
                                    <option value="">Choose a city</option>
                                    <optgroup label="UK">
                                        <option value="London">London</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Liverpool">Liverpool</option>
                                    </optgroup>
                                    <optgroup label="FR">
                                        <option value="Paris">Paris</option>
                                        <option value="Lyon">Lyon</option>
                                        <option value="Marseille">Marseille</option>
                                    </optgroup>
                                    <optgroup label="DE" disabled>
                                        <option value="Hamburg">Hamburg</option>
                                        <option value="Munich">Munich</option>
                                        <option value="Berlin">Berlin</option>
                                    </optgroup>
                                    <optgroup label="US">
                                        <option value="New York">New York</option>
                                        <option value="Washington" disabled>Washington</option>
                                        <option value="Michigan">Michigan</option>
                                    </optgroup>
                                    <optgroup label="SP">
                                        <option value="Madrid">Madrid</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Malaga">Malaga</option>
                                    </optgroup>
                                    <optgroup label="CA">
                                        <option value="Montreal">Montreal</option>
                                        <option value="Toronto">Toronto</option>
                                        <option value="Vancouver">Vancouver</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-no-search">Options added via config with no
                                    search</label>
                                <select class="form-input" name="choices-single-no-search" id="choices-single-no-search">
                                    <option value="0">Zero</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-preset-options">Option and option groups added
                                    via config</label>
                                <select class="form-input" name="choices-single-preset-options"
                                    id="choices-single-preset-options"></select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-selected-option">Option selected via config with
                                    custom properties</label>
                                <select class="form-input" name="choices-single-selected-option"
                                    id="choices-single-selected-option"></select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-with-custom-props-via-html">Option searchable by custom
                                    properties via Attribute</label>
                                <select class="form-input" id="choices-with-custom-props-via-html">
                                    <option value="Dropdown item 1">Label One</option>
                                    <option value="Dropdown item 2" selected disabled>Label Two</option>
                                    <option value="Dropdown item 3" data-custom-properties="This option is fantastic">
                                        Label Three</option>
                                    <option value="Dropdown item 4" data-custom-properties="{ 'description': 'foo' }">
                                        Label Four</option>
                                </select>
                            </div>

                            <div>
                                <label id="choices-single-no-sorting-label" for="choices-single-no-sorting">Options
                                    without sorting</label>
                                <select class="form-input" name="choices-single-no-sorting"
                                    id="choices-single-no-sorting">
                                    <option value="Madrid">Madrid</option>
                                    <option value="Toronto">Toronto</option>
                                    <option value="Vancouver">Vancouver</option>
                                    <option value="London">London</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Malaga">Malaga</option>
                                    <option value="Washington" disabled>Washington</option>
                                    <option value="Lyon">Lyon</option>
                                    <option value="Marseille">Marseille</option>
                                    <option value="Hamburg">Hamburg</option>
                                    <option value="Munich">Munich</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Montreal">Montreal</option>
                                    <option value="New York">New York</option>
                                    <option value="Michigan">Michigan</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="choices-single-custom-templates">Custom templates</label>
                                <select class="form-input" name="choices-single-custom-templates"
                                    id="choices-single-custom-templates">
                                    <option value="React">React</option>
                                    <option value="Angular">Angular</option>
                                    <option value="Ember">Ember</option>
                                    <option value="Vue">Vue</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="cities">Cities</label>
                                <select class="form-input" name="cities" id="cities">
                                    <option value="">Choose a city</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="London">London</option>
                                    <option value="Sheffield">Sheffield</option>
                                    <option value="Newcastle">Newcastle</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="tube-stations">Tube stations</label>
                                <select class="form-input" name="tube-stations" id="tube-stations">
                                    <option value="">Choose a tube station</option>
                                    <option value="Moorgate">Moorgate</option>
                                    <option value="St Pauls">St Pauls</option>
                                    <option value="Old Street">Old Street</option>
                                    <option value="Liverpool Street">Liverpool Street</option>
                                    <option value="Kings Cross St. Pancras">Kings Cross St. Pancras</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-4 text-base">Form interaction</h2>
                        <p>Change the values and press reset to restore to initial state.</p>
                        <form class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="mb-2" for="reset-simple">Change me!</label>
                                <select class="form-input" name="reset-simple" id="reset-simple">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2" selected>Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                    <option value="Option 5">Option 5</option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2" for="reset-multiple">And me!</label>
                                <select class="form-input" name="reset-multiple" id="reset-multiple" multiple>
                                    <option value="Choice 1" selected>Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                    <option value="Choice 4" disabled>Choice 4</option>
                                </select>
                            </div>

                            <div>
                                <button type="reset" class="btn bg-primary text-white">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-2">Flatpickr - Date picker</h4>
                <p class="mb-4">A lightweight and powerful datetimepicker</p>

                <div class="grid lg:grid-cols-2 gap-6">
                    <div>
                        <div class="mb-3">
                            <label class="mb-2">Basic</label>
                            <input type="text" id="basic-datepicker" class="form-input"
                                placeholder="Basic datepicker">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Date & Time</label>
                            <input type="text" id="datetime-datepicker" class="form-input"
                                placeholder="Date and Time">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Human-friendly Dates</label>
                            <input type="text" id="humanfd-datepicker" class="form-input"
                                placeholder="October 9, 2018">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">MinDate and MaxDate</label>
                            <input type="text" id="minmax-datepicker" class="form-input"
                                placeholder="mindate - maxdate">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Disabling dates</label>
                            <input type="text" id="disable-datepicker" class="form-input"
                                placeholder="Disabling dates">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Selecting multiple dates</label>
                            <input type="text" id="multiple-datepicker" class="form-input"
                                placeholder="Multiple dates">
                        </div>

                    </div>

                    <div>
                        <div class="mb-3">
                            <label class="mb-2">Selecting multiple dates - Conjunction</label>
                            <input type="text" id="conjunction-datepicker" class="form-input"
                                placeholder="2018-10-10 :: 2018-10-11">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2">Range Calendar</label>
                            <input type="text" id="range-datepicker" class="form-input"
                                placeholder="2018-10-03 to 2018-10-10">
                        </div>

                        <div>
                            <label class="mb-2">Inline Calendar</label>
                            <input type="text" id="inline-datepicker" class="form-input"
                                placeholder="Inline calendar">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-2">Flatpickr - Time Picker </h4>
                <p class="mb-4">A lightweight and powerful datetimepicker</p>

                <div class="grid lg:grid-cols-2 gap-6">
                    <div>
                        <div class="mb-3">
                            <label class="mb-2">Default Time Picker</label>
                            <div class="flex items-center ">
                                <input type="text" class="form-input border-r-0 rounded-r-none" id="basic-timepicker"
                                    aria-describedby="inputGroupPrepend2">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-s-none dark:border-gray-600 dark:bg-gray-600"><i
                                        class="ri-time-line"></i></span>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="mb-2">24-hour Time Picker</label>
                            <div class="flex items-center ">
                                <input type="text" class="form-input border-r-0 rounded-r-none"
                                    id="fullhours-timepicker" aria-describedby="inputGroupPrepend2">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-s-none dark:border-gray-600 dark:bg-gray-600"><i
                                        class="ri-time-line"></i></span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-3">
                            <label class="mb-2">Time Picker w/ Limits</label>
                            <div class="flex items-center ">
                                <input type="text" class="form-input border-r-0 rounded-r-none" id="minmax-timepicker"
                                    aria-describedby="inputGroupPrepend2">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-s-none dark:border-gray-600 dark:bg-gray-600"><i
                                        class="ri-time-line"></i></span>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label class="mb-2">Preloading Time</label>
                            <div class="flex items-center ">
                                <input type="text" class="form-input border-r-0 rounded-r-none"
                                    id="preloading-timepicker" aria-describedby="inputGroupPrepend2">
                                <span
                                    class="btn bg-light border border-gray-200 rounded-s-none dark:border-gray-600 dark:bg-gray-600"><i
                                        class="ri-time-line"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->


        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Input Masks</h4>
                <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">A Java-Script Plugin to make masks on form
                    fields and HTML elements.</p>
                <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                    <div>
                        <form action="#">
                            <div class="mb-3">
                                <label class="mb-2">Date</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="00/00/0000" placeholder="DD/MM/YYYY">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="00/00/0000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Hour</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="00:00:00" placeholder="HH:MM:SS">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="00:00:00"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Date & Hour</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="00/00/0000 00:00:00" placeholder="DD/MM/YYYY HH:MM:SS">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="00/00/0000 00:00:00"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">ZIP Code</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="00000-000" placeholder="xxxxx-xxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="00000-000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Crazy Zip Code</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="0-00-00-00" placeholder="x-xx-xx-xx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="0-00-00-00"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Money</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="000.000.000.000.000,00" data-reverse="true"
                                    placeholder="Your money">
                                <p class="text-xs mt-1">Add attribute <code
                                        class="text-primary">data-mask-format="000.000.000.000.000,00"
                                        data-reverse="true"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Money 2</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="#.##0,00" data-reverse="true" placeholder="#.##0,00">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="#.##0,00" data-reverse="true"</code></p>
                            </div>

                        </form>
                    </div>

                    <div>
                        <form action="#">
                            <div class="mb-3">
                                <label class="mb-2">Telephone</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="0000-0000" placeholder="xxxx-xxxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="0000-0000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">Telephone with Code Area</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="(00) 0000-0000" placeholder="(xx) xxxx-xxxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="(00) 0000-0000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">US Telephone</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="(000) 000-0000" placeholder="(xxx) xxx-xxxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="(000) 000-0000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">São Paulo Celphones</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="(00) 00000-0000" placeholder="(xx) xxxxx-xxxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="(00) 00000-0000"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">CPF</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="000.000.000-00" data-reverse="true" placeholder="xxx.xxx.xxxx-xx">
                                <p class="text-xs mt-1">Add attribute <code
                                        class="text-primary">data-mask-format="000.000.000-00" data-reverse="true"</code>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">CNPJ</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="00.000.000/0000-00" data-reverse="true"
                                    placeholder="xx.xxx.xxx/xxxx-xx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="00.000.000/0000-00" data-reverse="true"</code></p>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2">IP Address</label>
                                <input type="text" class="form-input" data-toggle="input-mask"
                                    data-mask-format="099.099.099.099" data-reverse="true" placeholder="xxx.xxx.xxx.xxx">
                                <p class="text-xs mt-1">Add attribute <code class="text-primary">data-toggle="input-mask"
                                        data-mask-format="099.099.099.099" data-reverse="true"</code></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Colorpicker</h4>
                <div>
                    <h5 class="text-base mb-3">Themes</h5>
                    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0 dark:text-gray-300">Classic Demo</h5>
                            <p class="text-gray-400 grow">Use <code>classic-colorpicker</code> class to
                                set
                                classic colorpicker.</p>
                            <div class="classic-colorpicker"></div>
                        </div>
                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0 dark:text-gray-300">Monolith Demo</h5>
                            <p class="text-gray-400 grow">Use <code>monolith-colorpicker</code> class to
                                set
                                monolith colorpicker.</p>
                            <div class="monolith-colorpicker"></div>
                        </div>
                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0 dark:text-gray-300">Nano Demo</h5>
                            <p class="text-gray-400 grow">Use <code>nano-colorpicker</code> class to set
                                nano
                                colorpicker.</p>
                            <div class="nano-colorpicker"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h5 class="text-base mb-2">Options</h5>

                    <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-6">
                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0">Demo</h5>
                            <p class="text-gray-400 grow">Use <code>colorpicker-demo</code> class to set
                                demo
                                option colorpicker.</p>
                            <div class="colorpicker-demo"></div>
                        </div>

                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0">Picker with Opacity & Hue
                            </h5>
                            <p class="text-gray-400 grow">Use <code>colorpicker-opacity-hue</code> class
                                to set
                                colorpicker with opacity & hue.</p>
                            <div class="colorpicker-opacity-hue"></div>
                        </div>

                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0">Switches</h5>
                            <p class="text-gray-400 grow">Use <code>colorpicker-switch</code> class to
                                set switch
                                colorpicker.</p>
                            <div class="colorpicker-switch"></div>
                        </div>

                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0">Picker with Input</h5>
                            <p class="text-gray-400 grow">Use <code>colorpicker-input</code> class to
                                set
                                colorpicker with input.</p>
                            <div class="colorpicker-input"></div>
                        </div>

                        <div class="bg-light dark:bg-gray-700 p-4 rounded-md flex flex-col">
                            <h5 class="text-base text-gray-400 mb-2 shrink-0">Color Format</h5>
                            <p class="text-gray-400 grow">Use <code>colorpicker-format</code> class to
                                set
                                colorpicker with format option.</p>
                            <div class="colorpicker-format"></div>
                        </div>
                    </div>
                </div>
                <!-- end preview -->
            </div><!-- end p-6 -->
        </div><!-- end card -->
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/form-color-pickr.js', 'resources/js/pages/form-inputmask.js', 'resources/js/pages/form-flatpickr.js', 'resources/js/pages/form-choises.js'])
@endsection
