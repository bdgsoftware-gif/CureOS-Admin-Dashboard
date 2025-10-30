@extends('layouts.vertical', [
    'title' => 'Dashboard',
    'subTitle' => 'Menu',
    'pageTitle' => 'Dashboard',
])

@section('css')
    @vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
    <style>
        /* Chart container fixes */
        #enrollmentChart, 
        #radialMultipleBar, 
        #paymentStatusChart, 
        #statisticsDonutChart {
            width: 100%;
        }
        
        /* Ensure chart containers are visible */
        .apexcharts-canvas {
            width: 100% !important;
        }
        
        /* Fix for loading states */
        .chart-loading {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
@endsection

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
                    'chartId' => 'mini-customers-chart'
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
                    'chartId' => 'mini-orders-chart'
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
                    'chartId' => 'mini-revenue-chart'
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
            <div class="group relative">
                <!-- Background glow effect on hover -->
                <div class="absolute inset-0 bg-gradient-to-br {{ $card['color'] }} rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-300"></div>

                <div class="relative bg-gradient-to-br {{ $card['color'] }} text-white rounded-2xl overflow-hidden">
                    <!-- Animated background pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-white rounded-full"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-white rounded-full"></div>
                    </div>

                    <div class="relative p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30">
                                    <i class="{{ $card['icon'] }} text-lg"></i>
                                </div>
                                <span class="text-white/80 text-sm font-medium">{{ $card['title'] }}</span>
                            </div>

                            <!-- Trend indicator -->
                            <div class="flex items-center space-x-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm">
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

                        <div class="flex items-center justify-between">
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
                                    <div class="bg-white h-1.5 rounded-full" style="width: {{ min($progress, 100) }}%"></div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Hover effect line -->
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-white/50 group-hover:w-full transition-all duration-500"></div>
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
                        <div class="card-header">
                            <div class="flex items-center gap-2 justify-between">
                                <h6 class="mb-0 font-bold text-lg">Earning Statistic</h6>
                                <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                    <option>This Month</option>
                                    <option>This Week</option>
                                    <option>This Year</option>
                                </select>
                            </div>
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
                                        <span class="text-gray-900 font-bold"> 500</span>
                                    </span>
                                </li>
                            </ul>
                            <div id="enrollmentChart" style="min-height: 350px;">
                                <div class="chart-loading">Loading enrollment chart...</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Visited by Department -->
                <div class="col-span-12 lg:col-span-6">
                    <div class="card border-0 h-full">
                        <div class="card-header">
                            <div class="flex items-center gap-2 justify-between">
                                <h6 class="mb-0 font-bold text-lg">Patient Visited by Department</h6>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col lg:flex-row items-center gap-4">
                            <div id="radialMultipleBar" style="min-height: 250px; width: 100%;">
                                <div class="chart-loading">Loading department chart...</div>
                            </div>
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
                    <div class="card border-0 h-full">
                        <div class="card-header">
                            <div class="flex items-center gap-2 justify-between">
                                <h6 class="mb-0 font-bold text-lg">Patient Visit By Gender</h6>
                                <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                    <option>This Month</option>
                                    <option>This Week</option>
                                    <option>This Year</option>
                                </select>
                            </div>
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
                                        <span class="text-gray-900 font-bold"> 450</span>
                                    </span>
                                </li>
                            </ul>
                            <div id="paymentStatusChart" style="min-height: 300px;">
                                <div class="chart-loading">Loading gender chart...</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctors List -->
                <div class="col-span-12 2xl:col-span-4">
                    <div class="card border-0">
                        <div class="card-header border-bottom">
                            <div class="flex items-center gap-2 justify-between">
                                <h6 class="mb-0 font-bold text-lg">Doctors List</h6>
                                <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                                    View All
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-col gap-4">
                                @php
                                    $doctors = [
                                        ['img' => 'doctor-img1.png', 'name' => 'Dr. Davis', 'specialty' => 'Cardiology', 'status' => 'available'],
                                        ['img' => 'doctor-img2.png', 'name' => 'Dr. Riead', 'specialty' => 'Orthopedics', 'status' => 'available'],
                                        ['img' => 'doctor-img3.png', 'name' => 'Albert Flores', 'specialty' => 'Ophthalmology', 'status' => 'not-available'],
                                        ['img' => 'doctor-img4.png', 'name' => 'Dr. Smith', 'specialty' => 'Cardiology', 'status' => 'available'],
                                        ['img' => 'doctor-img6.png', 'name' => 'Dr. Johnson', 'specialty' => 'Cardiology', 'status' => 'not-available'],
                                        ['img' => 'doctor-img5.png', 'name' => 'Dr. Martinez', 'specialty' => 'Cardiology', 'status' => 'available'],
                                    ];
                                @endphp
                                
                                @foreach($doctors as $doctor)
                                <div class="flex items-center justify-between gap-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0 me-3 overflow-hidden">
                                            <i class="ri-user-line text-gray-400 text-xl"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-base mb-0 font-semibold">{{ $doctor['name'] }}</h6>
                                            <span class="text-sm text-gray-600">{{ $doctor['specialty'] }}</span>
                                        </div>
                                    </div>
                                    <span class="px-3 py-1 rounded-full text-sm font-medium {{ $doctor['status'] == 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
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
                            <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                                View All
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @php
                                            $appointments = [
                                                ['name' => 'General Checkup', 'id' => '#63254', 'date' => '27 Mar 2025', 'status' => 'completed'],
                                                ['name' => 'Blood test results', 'id' => '#63255', 'date' => '26 Mar 2025', 'status' => 'canceled'],
                                                ['name' => 'Heart Checkup', 'id' => '#63256', 'date' => '25 Mar 2025', 'status' => 'completed'],
                                                ['name' => 'Vaccination', 'id' => '#63257', 'date' => '24 Mar 2025', 'status' => 'canceled'],
                                                ['name' => 'Dental Cleanup', 'id' => '#63258', 'date' => '23 Mar 2025', 'status' => 'completed'],
                                            ];
                                        @endphp
                                        
                                        @foreach($appointments as $appointment)
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $appointment['name'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $appointment['id'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $appointment['date'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $appointment['status'] == 'completed' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ ucfirst($appointment['status']) }}
                                                </span>
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
            <div class="grid grid-cols-1 gap-6">
                <!-- Total Income -->
                <div class="card border-0 h-full rounded-lg">
                    <div class="card-header border-bottom flex items-center justify-between">
                        <h6 class="mb-0 font-bold text-lg">Total Income</h6>
                        <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800">
                            <option>This Month</option>
                            <option>This Week</option>
                            <option>This Year</option>
                        </select>
                    </div>
                    <div class="p-6">
                        <div class="relative">
                            <div id="statisticsDonutChart" style="min-height: 250px;">
                                <div class="chart-loading">Loading income chart...</div>
                            </div>
                            <div class="text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <span class="text-gray-600 text-sm">Income</span>
                                <h6 class="text-xl font-bold">$28,500</h6>
                            </div>
                        </div>
                        <ul class="grid grid-cols-2 gap-4 mt-4">
                            <li class="flex flex-col items-center p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="w-3 h-2 rounded-full bg-warning-600"></span>
                                    <span class="text-gray-600 text-sm">Net Income</span>
                                </div>
                                <h6 class="text-gray-900 font-bold">$50,000</h6>
                            </li>
                            <li class="flex flex-col items-center p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="w-3 h-2 rounded-full bg-success-600"></span>
                                    <span class="text-gray-600 text-sm">Commission</span>
                                </div>
                                <h6 class="text-gray-900 font-bold">$20,000</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Available Treatments -->
                <div class="card border-0">
                    <div class="card-header">
                        <div class="flex items-center justify-between">
                            <h6 class="mb-0 font-bold text-lg">Available Treatments</h6>
                            <a href="javascript:void(0)" class="text-primary-600 hover:text-primary-700 flex items-center gap-1 transition-colors">
                                View All
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        @php
                            $treatments = [
                                ['icon' => 'treatment-icon1.png', 'name' => 'Psychiatry', 'doctors' => '57 Doctors', 'color' => 'bg-blue-100'],
                                ['icon' => 'treatment-icon2.png', 'name' => 'Orthopedic', 'doctors' => '85 Doctors', 'color' => 'bg-green-100'],
                                ['icon' => 'treatment-icon3.png', 'name' => 'Cardiology', 'doctors' => '60 Doctors', 'color' => 'bg-purple-100'],
                                ['icon' => 'treatment-icon4.png', 'name' => 'Pediatrics', 'doctors' => '120 Doctors', 'color' => 'bg-yellow-100'],
                                ['icon' => 'treatment-icon5.png', 'name' => 'Neurology', 'doctors' => '25 Doctors', 'color' => 'bg-red-100'],
                                ['icon' => 'treatment-icon6.png', 'name' => 'Gastroenterology', 'doctors' => '95 Doctors', 'color' => 'bg-indigo-100'],
                            ];
                        @endphp
                        
                        @foreach($treatments as $treatment)
                        <div class="flex items-center justify-between gap-3 mb-4 last:mb-0 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full {{ $treatment['color'] }} flex justify-center items-center flex-shrink-0">
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