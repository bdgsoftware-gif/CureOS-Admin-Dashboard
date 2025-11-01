@extends('layouts.app', [
    'title' => 'Dashboard',
    'subTitle' => 'Menu',
    'pageTitle' => 'Dashboard',
])

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @php
            $cards = [
                [
                    'title' => 'Customers',
                    'value' => '54,214',
                    'change' => '+2,541',
                    'trend' => 'up',
                    'period' => 'Since last month',
                    'color' => 'from-rose-500 to-pink-600',
                    'icon' => 'ri-user-line',
                    'chart' => true,
                    'chartId' => 'mini-customers-chart',
                ],
                [
                    'title' => 'Orders',
                    'value' => '7,543',
                    'change' => '-1.08%',
                    'trend' => 'down',
                    'period' => 'Since last week',
                    'color' => 'from-emerald-500 to-green-600',
                    'icon' => 'ri-shopping-bag-line',
                    'chart' => true,
                    'chartId' => 'mini-orders-chart',
                ],
                [
                    'title' => 'Revenue',
                    'value' => '$9,254',
                    'change' => '-7.00%',
                    'trend' => 'down',
                    'period' => 'Since last month',
                    'color' => 'from-sky-500 to-blue-600',
                    'icon' => 'ri-bank-card-line',
                    'chart' => true,
                    'chartId' => 'mini-revenue-chart',
                ],
                [
                    'title' => 'Growth',
                    'value' => '24.5%',
                    'change' => '+4.2%',
                    'trend' => 'up',
                    'period' => 'Since last quarter',
                    'color' => 'from-purple-500 to-indigo-600',
                    'icon' => 'ri-bar-chart-line',
                    'chart' => false,
                ],
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="group relative h-full min-h-[180px]">
                <!-- Background glow effect on hover -->
                <div
                    class="absolute inset-0 bg-gradient-to-br {{ $card['color'] }} rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-300">
                </div>

                <div
                    class="relative bg-gradient-to-br {{ $card['color'] }} text-white rounded-2xl overflow-hidden h-full flex flex-col">
                    <!-- Animated background pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-white rounded-full"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-white rounded-full"></div>
                    </div>

                    <div class="relative p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <div
                                        class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30">
                                        <i class="{{ $card['icon'] }} text-lg"></i>
                                    </div>
                                    <span class="text-white/80 text-sm font-medium">{{ $card['title'] }}</span>
                                </div>

                                <!-- Trend indicator -->
                                <div
                                    class="flex items-center space-x-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm">
                                    @if ($card['trend'] === 'up')
                                        <i class="ri-arrow-up-s-line text-emerald-300 text-sm"></i>
                                        <span class="text-xs text-emerald-300 font-semibold">{{ $card['change'] }}</span>
                                    @else
                                        <i class="ri-arrow-down-s-line text-rose-300 text-sm"></i>
                                        <span class="text-xs text-rose-300 font-semibold">{{ $card['change'] }}</span>
                                    @endif
                                </div>
                            </div>

                            <h2 class="text-3xl font-bold mb-2">{{ $card['value'] }}</h2>
                        </div>

                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-white/60 text-xs">{{ $card['period'] }}</span>

                            <!-- Mini chart or progress indicator -->
                            @if ($card['chart'])
                                <div class="w-20 h-8 flex items-center justify-center">
                                    <div id="{{ $card['chartId'] }}"></div>
                                </div>
                            @else
                                <div class="w-16 bg-white/20 rounded-full h-1.5">
                                    @php
                                        $progress = (float) str_replace(['%', '$', ','], '', $card['value']);
                                    @endphp
                                    <div class="bg-white h-1.5 rounded-full" style="width: {{ min($progress, 100) }}%">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Hover effect line -->
                    <div
                        class="absolute bottom-0 left-0 w-0 h-1 bg-white/50 group-hover:w-full transition-all duration-500">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Main Dashboard Content --}}
    <div class="grid grid-cols-1 3xl:grid-cols-12 gap-6">
        <div class="col-span-12 3xl:col-span-9">
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">

                <!-- Earning Statistic -->
                <div class="col-span-12 2xl:col-span-12">
                    <div class="card border-0 h-full">
                        <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                            <h6 class="text-lg font-semibold mb-0">Earning Statistic</h6>
                            <select
                                class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                <option>This Month</option>
                                <option>This Week</option>
                                <option>This Year</option>
                            </select>
                        </div>
                        <div class="p-6">
                            <ul class="flex flex-wrap items-center justify-center my-3 gap-3">
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-2 rounded-[50rem] bg-primary-600"></span>
                                    <span class="text-gray-600 text-sm font-semibold">
                                        New Patient:
                                        <span class="text-gray-900 font-bold">50</span>
                                    </span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-2 rounded-[50rem] bg-warning-600"></span>
                                    <span class="text-gray-600 text-sm font-semibold">
                                        Old Patient:
                                        <span class="text-gray-900 font-bold">500</span>
                                    </span>
                                </li>
                            </ul>
                            <div id="enrollmentChart" class="min-h-[350px]"></div>
                        </div>
                    </div>
                </div>

                <!-- Patient Visited by Department -->
                <div class="col-span-12 lg:col-span-6">
                    <div class="card border-0 h-full">
                        <div class="card-header border-bottom bg-gray-50 py-4 px-6 ">
                            <h6 class="text-lg font-semibold mb-0">Patient Visited by Department</h6>
                        </div>
                        <div class="p-6 flex flex-col lg:flex-row items-center gap-4">
                            <div id="radialMultipleBar" class="min-h-[250px] w-full"></div>
                            <ul class="flex flex-col gap-3 w-full lg:w-1/2">
                                <li class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                    <span class="text-gray-700">Cardiology:</span>
                                    <span class="text-primary-600 font-semibold">80%</span>
                                </li>
                                <li class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                    <span class="text-gray-700">Psychiatry:</span>
                                    <span class="text-warning-600 font-semibold">40%</span>
                                </li>
                                <li class="flex items-center justify-between p-2 bg-gray-50 rounded-lg">
                                    <span class="text-gray-700">Pediatrics:</span>
                                    <span class="text-success-600 font-semibold">10%</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Patient Visit By Gender -->
                <div class="col-span-12 lg:col-span-6">
                    <div class="card border-0">
                        <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                            <h6 class="text-lg font-semibold mb-0">Patient Visit By Gender</h6>
                            <select
                                class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                <option>This Month</option>
                                <option>This Week</option>
                                <option>This Year</option>
                            </select>
                        </div>
                        <div class="p-6">
                            <ul class="flex flex-wrap items-center justify-center my-3 gap-3">
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-2 rounded-[50rem] bg-warning-600"></span>
                                    <span class="text-gray-600 text-sm font-semibold">
                                        Male:
                                        <span class="text-gray-900 font-bold">200</span>
                                    </span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-2 rounded-[50rem] bg-success-600"></span>
                                    <span class="text-gray-600 text-sm font-semibold">
                                        Female:
                                        <span class="text-gray-900 font-bold">450</span>
                                    </span>
                                </li>
                            </ul>
                            <div id="paymentStatusChart" class="min-h-[300px]"></div>
                        </div>
                    </div>
                </div>

                <!-- Doctors List -->
                <div class="col-span-12 2xl:col-span-4">
                    <div class="card border-0">
                        <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                            <h6 class="text-lg font-semibold mb-0">Doctors List</h6>
                            <a href="javascript:void(0)"
                                class="flex-shrink-0 text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                                View All
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                @php
                                    $doctors = [
                                        ['name' => 'Dr. Davis', 'specialty' => 'Cardiology', 'status' => 'available'],
                                        ['name' => 'Dr. Riead', 'specialty' => 'Orthopedics', 'status' => 'available'],
                                        [
                                            'name' => 'Albert Flores',
                                            'specialty' => 'Ophthalmology',
                                            'status' => 'not-available',
                                        ],
                                        ['name' => 'Dr. Smith', 'specialty' => 'Cardiology', 'status' => 'available'],
                                        [
                                            'name' => 'Dr. Johnson',
                                            'specialty' => 'Cardiology',
                                            'status' => 'not-available',
                                        ],
                                        [
                                            'name' => 'Dr. Martinez',
                                            'specialty' => 'Cardiology',
                                            'status' => 'available',
                                        ],
                                    ];
                                @endphp

                                @foreach ($doctors as $doctor)
                                    <div
                                        class="flex items-center justify-between gap-2 p-2 hover:bg-gray-50 rounded-lg transition-colors">
                                        <div class="flex items-center min-w-0 flex-1">
                                            <div
                                                class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0 me-2 overflow-hidden">
                                                <i class="ri-user-line text-gray-400 text-lg"></i>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <h6 class="text-sm font-semibold text-gray-900 truncate">
                                                    {{ $doctor['name'] }}</h6>
                                                <span
                                                    class="text-xs text-gray-600 truncate block">{{ $doctor['specialty'] }}</span>
                                            </div>
                                        </div>
                                        <span
                                            class="px-2 py-1 rounded-full text-xs font-medium whitespace-nowrap flex-shrink-0 {{ $doctor['status'] == 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $doctor['status'] == 'available' ? 'Available' : 'Not Available' }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Appointments -->
                <div class="col-span-12 2xl:col-span-8">
                    <div class="card border-0 h-full">
                        <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                            <h6 class="text-lg font-semibold mb-0">Latest Appointments</h6>
                            <a href="javascript:void(0)"
                                class="flex-shrink-0 text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                                View All
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date</th>
                                            <th
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @php
                                            $appointments = [
                                                [
                                                    'name' => 'General Checkup',
                                                    'id' => '#63254',
                                                    'date' => '27 Mar 2025',
                                                    'status' => 'completed',
                                                ],
                                                [
                                                    'name' => 'Blood test results',
                                                    'id' => '#63255',
                                                    'date' => '26 Mar 2025',
                                                    'status' => 'canceled',
                                                ],
                                                [
                                                    'name' => 'Heart Checkup',
                                                    'id' => '#63256',
                                                    'date' => '25 Mar 2025',
                                                    'status' => 'completed',
                                                ],
                                                [
                                                    'name' => 'Vaccination',
                                                    'id' => '#63257',
                                                    'date' => '24 Mar 2025',
                                                    'status' => 'canceled',
                                                ],
                                                [
                                                    'name' => 'Dental Cleanup',
                                                    'id' => '#63258',
                                                    'date' => '23 Mar 2025',
                                                    'status' => 'completed',
                                                ],
                                            ];
                                        @endphp

                                        @foreach ($appointments as $appointment)
                                            <tr class="hover:bg-gray-50 transition-colors">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $appointment['name'] }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $appointment['id'] }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $appointment['date'] }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                                    <span
                                                        class="px-3 py-1 rounded-full text-sm font-medium {{ $appointment['status'] == 'completed' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                        {{ ucfirst($appointment['status']) }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)"
                                                        class="bg-emerald-500 py-1 px-2 text-xs text-white rounded-3xl hover:text-sm transform duration-300">view</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-span-12 3xl:col-span-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Total Income -->
                <div
                    class="card border-0 h-full rounded-xl bg-white dark:bg-gray-800 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                        <h6 class="text-lg font-semibold mb-0">Total Income</h6>
                        <select
                            class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                            <option>This Month</option>
                            <option>This Week</option>
                            <option>This Year</option>
                        </select>
                    </div>

                    <div class="p-6">
                        <!-- Clean Chart Container - No Loading Content -->
                        <div class="relative mb-6">
                            <div id="statisticsDonutChart" class="min-h-[200px]"></div>
                        </div>

                        <!-- Income Breakdown -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-warning-500"></div>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">Net Income</span>
                                </div>
                                <span class="text-gray-900 dark:text-white font-bold">$50,000</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-success-500"></div>
                                    <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">Commission</span>
                                </div>
                                <span class="text-gray-900 dark:text-white font-bold">$20,000</span>
                            </div>
                        </div>

                        <!-- Progress Indicator -->
                        <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700">
                            <div class="flex items-center justify-between text-sm mb-2">
                                <span class="text-gray-600 dark:text-gray-400">Monthly Progress</span>
                                <span class="text-gray-900 dark:text-white font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                                <div class="bg-gradient-to-r from-emerald-500 to-teal-600 h-2 rounded-full transition-all duration-500"
                                    style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Available Treatments -->
                <div class="card border-0">
                    <div class="card-header border-bottom bg-gray-50 py-4 px-6 flex items-center justify-between">
                        <h6 class="text-lg font-semibold mb-0">Available Treatments</h6>
                        <a href="javascript:void(0)"
                            class="flex-shrink-0 text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                            View All
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="p-6">
                        @php
                            $treatments = [
                                ['name' => 'Psychiatry', 'doctors' => '57 Doctors', 'color' => 'bg-blue-100'],
                                ['name' => 'Orthopedic', 'doctors' => '85 Doctors', 'color' => 'bg-green-100'],
                                ['name' => 'Cardiology', 'doctors' => '60 Doctors', 'color' => 'bg-purple-100'],
                                ['name' => 'Pediatrics', 'doctors' => '120 Doctors', 'color' => 'bg-yellow-100'],
                                ['name' => 'Neurology', 'doctors' => '25 Doctors', 'color' => 'bg-red-100'],
                                ['name' => 'Gastroenterology', 'doctors' => '95 Doctors', 'color' => 'bg-indigo-100'],
                            ];
                        @endphp

                        @foreach ($treatments as $treatment)
                            <div
                                class="flex items-center justify-between gap-3 mb-4 last:mb-0 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 rounded-full {{ $treatment['color'] }} flex justify-center items-center flex-shrink-0">
                                        <i class="ri-heart-pulse-line text-gray-600"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-base mb-0 font-semibold">{{ $treatment['name'] }}</h6>
                                        <span class="text-sm text-gray-600">{{ $treatment['doctors'] }}</span>
                                    </div>
                                </div>
                                <span class="text-gray-500 text-sm">08:45 AM</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-bottom')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
