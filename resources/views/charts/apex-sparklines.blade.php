@extends('layouts.vertical', ['title' => 'Sparklines Chart', 'subTitle' => 'Chart', 'pageTitle' => 'Sparklines Chart'])

@section('content')

<div class="card">
    <div class="p-6">

        <div class="grid 2xl:grid-cols-3 grid-cols-2 gap-6">
            <div>
                <div id="spark1" data-colors="#DCE6EC"></div>
            </div>
            <div>
                <div id="spark2" data-colors="#DCE6EC"></div>
            </div>
            <div>
                <div id="spark3" data-colors="#47ad77"></div>
            </div>
        </div> <!-- grid end -->

        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-900/50">
                                    <th scope="col" class="px-6 py-3 text-start font-semibold">Total Value</th>
                                    <th scope="col" class="px-6 py-3 text-start font-semibold">Percentage of Portfolio</th>
                                    <th scope="col" class="px-6 py-3 text-center font-semibold">Last 10 days</th>
                                    <th scope="col" class="px-6 py-3 text-center font-semibold">Volume</th>
                                </tr>
                            </thead><!-- thead end -->

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">$32,554</td>
                                    <td class="px-6 py-4 whitespace-nowrap">15%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart1" data-colors="#3e60d5"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart5" data-colors="#3e60d5"></div>
                                    </td>
                                </tr><!-- tr end -->

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">$23,533</td>
                                    <td class="px-6 py-4 whitespace-nowrap">7%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart2" data-colors="#47ad77"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart6" data-colors="#47ad77"></div>
                                    </td>
                                </tr><!-- tr end -->

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">$54,276</td>
                                    <td class="px-6 py-4 whitespace-nowrap">9%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart3" data-colors="#ffbc00"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart7" data-colors="#ffbc00"></div>
                                    </td>
                                </tr><!-- tr end -->

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">$11,533</td>
                                    <td class="px-6 py-4 whitespace-nowrap">2%</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart4" data-colors="#fa5c7c"></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div id="chart8" data-colors="#fa5c7c"></div>
                                    </td>
                                </tr><!-- tr end -->

                                <tr></tr>
                            </tbody><!-- tbody end -->
                        </table><!-- table end -->
                    </div>
                </div>
            </div>
        </div><!-- flex end -->

    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/pages/apex-sparklines.js'])
@endsection