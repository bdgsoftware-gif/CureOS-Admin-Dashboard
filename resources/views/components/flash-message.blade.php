@props(['message', 'type', 'icon' => null])

@php
    $typeConfig = [
        'success' => [
            'classes' =>
                'bg-emerald-50 border-emerald-200 dark:bg-emerald-900/20 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300',
            'progress' => 'bg-emerald-500',
            'icon' => 'ri-checkbox-circle-fill',
            'duration' => 5000,
        ],
        'error' => [
            'classes' =>
                'bg-red-50 border-red-200 dark:bg-red-900/20 dark:border-red-800 text-red-700 dark:text-red-300',
            'progress' => 'bg-red-500',
            'icon' => 'ri-close-circle-fill',
            'duration' => 8000,
        ],
        'warning' => [
            'classes' =>
                'bg-amber-50 border-amber-200 dark:bg-amber-900/20 dark:border-amber-800 text-amber-700 dark:text-amber-300',
            'progress' => 'bg-amber-500',
            'icon' => 'ri-error-warning-fill',
            'duration' => 7000,
        ],
        'info' => [
            'classes' =>
                'bg-blue-50 border-blue-200 dark:bg-blue-900/20 dark:border-blue-800 text-blue-700 dark:text-blue-300',
            'progress' => 'bg-blue-500',
            'icon' => 'ri-information-fill',
            'duration' => 5000,
        ],
        'critical' => [
            'classes' =>
                'bg-red-50 border-red-200 dark:bg-red-900/20 dark:border-red-800 text-red-700 dark:text-red-300',
            'progress' => 'bg-red-600',
            'icon' => 'ri-alarm-warning-fill',
            'duration' => 10000,
        ],
    ];

    $config = $typeConfig[$type] ?? $typeConfig['info'];
    $displayIcon = $icon ?? $config['icon'];
@endphp

<div x-data="{
    show: true,
    progress: 100,
    duration: {{ $config['duration'] }},
    timer: null,
    startTimer() {
        this.timer = setInterval(() => {
            if (this.progress > 0) {
                this.progress -= (100 / (this.duration / 50));
            } else {
                this.show = false;
                clearInterval(this.timer);
            }
        }, 50);
    },
    pauseTimer() {
        clearInterval(this.timer);
    },
    resumeTimer() {
        this.startTimer();
    },
    init() {
        this.startTimer();
    }
}" x-show="show" @mouseenter="pauseTimer()" @mouseleave="resumeTimer()"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-full scale-95"
    x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-x-0 scale-100"
    x-transition:leave-end="opacity-0 transform translate-x-full scale-95"
    class="fixed top-20 right-6 z-[9999] max-w-sm w-full cursor-pointer group">

    <div
        class="{{ $config['classes'] }} border rounded-xl p-4 shadow-2xl backdrop-blur-sm transform transition-all duration-200 group-hover:scale-[1.02] group-hover:shadow-xl">
        <!-- Progress Bar -->
        <div class="absolute top-0 left-0 w-full h-1 rounded-t-xl overflow-hidden">
            <div class="h-full {{ $config['progress'] }} transition-all duration-300 ease-linear"
                :style="'width: ' + progress + '%'"></div>
        </div>

        <div class="flex items-start gap-3 pt-1">
            <!-- Animated Icon -->
            <div class="flex-shrink-0">
                <i class="{{ $displayIcon }} text-lg mt-0.5 
                    @if ($type === 'critical') animate-pulse 
                    @else 
                    animate-bounce @endif"
                    :class="{
                        'animate-pulse': '{{ $type }}'
                        === 'critical'
                    }"></i>
            </div>

            <!-- Message -->
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium leading-relaxed break-words">{{ $message }}</p>
            </div>

            <!-- Close Button -->
            <button @click="show = false; clearInterval(timer)"
                class="flex-shrink-0 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-all duration-200 transform hover:scale-110 hover:rotate-90">
                <i class="ri-close-line text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Glow Effect -->
    <div
        class="absolute inset-0 -z-10 bg-gradient-to-r {{ $config['progress'] }} opacity-10 blur-xl rounded-xl transform scale-105 group-hover:opacity-20 transition-opacity duration-300">
    </div>
</div>
