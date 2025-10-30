/**
 * Theme: CureOS - Responsive Tailwind CSS 3 Admin Dashboard
 * Author: End Brackets
 * Module/App: Dashboard
 */

// Global flag to prevent multiple initializations
window.dashboardChartsInitialized = false;

// Chart instances storage
window.dashboardChartInstances = {};

// Check if ApexCharts is available globally or import it
let ApexCharts;

// Try to use globally available ApexCharts first
if (typeof window.ApexCharts !== 'undefined') {
    ApexCharts = window.ApexCharts;
    initializeDashboard();
} else {
    // Fallback: try to import dynamically
    import('apexcharts').then(module => {
        ApexCharts = module.default;
        window.ApexCharts = ApexCharts; // Make it globally available
        initializeDashboard();
    }).catch(error => {
        console.error('Failed to load ApexCharts:', error);
        showChartErrors();
    });
}

// Global Apex configuration
if (typeof window.Apex === 'undefined') {
    window.Apex = {
        chart: {
            parentHeightOffset: 0,
            toolbar: { show: false },
            animations: { enabled: true, easing: 'easeinout', speed: 800 }
        },
        grid: { padding: { left: 0, right: 0 } },
        colors: ["#3e60d5", "#47ad77", "#fa5c7c", "#ffbc00"]
    };
}

function initializeDashboard() {
    // Use a single DOMContentLoaded listener
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDashboardOnce);
    } else {
        // DOM already loaded
        setTimeout(initDashboardOnce, 100);
    }
}

function initDashboardOnce() {
    // Prevent multiple initializations
    if (window.dashboardChartsInitialized) {
        console.log('⚠️ Dashboard charts already initialized, skipping...');
        return;
    }
    
    console.log('🚀 Initializing CureOS Dashboard Charts...');
    window.dashboardChartsInitialized = true;
    
    // Remove loading messages
    removeLoadingMessages();
    
    try {
        initMainCharts();
        initMiniCharts();
        console.log('✅ All charts initialized successfully');
    } catch (error) {
        console.error('❌ Error initializing charts:', error);
        showChartErrors();
    }
}

function removeLoadingMessages() {
    const loadingElements = document.querySelectorAll('.chart-loading');
    loadingElements.forEach(element => {
        if (element.parentNode) {
            element.remove();
        }
    });
}

function showChartErrors() {
    const chartContainers = [
        '#enrollmentChart',
        '#radialMultipleBar', 
        '#paymentStatusChart',
        '#statisticsDonutChart'
    ];
    
    chartContainers.forEach(containerId => {
        const container = document.querySelector(containerId);
        if (container && !container.querySelector('.chart-error')) {
            container.innerHTML = '<div class="chart-error" style="color: #dc2626; text-align: center; padding: 20px;">Chart Loading Error</div>';
        }
    });
}

function destroyExistingCharts() {
    // Destroy any existing chart instances
    Object.values(window.dashboardChartInstances).forEach(chart => {
        if (chart && typeof chart.destroy === 'function') {
            try {
                chart.destroy();
            } catch (e) {
                console.warn('Error destroying chart:', e);
            }
        }
    });
    window.dashboardChartInstances = {};
}

function initMainCharts() {
    // Destroy any existing charts first
    destroyExistingCharts();
    
    // 1. Enrollment Chart (Earning Statistic)
    initEnrollmentChart();
    
    // 2. Radial Bar Chart (Patient Visited by Department)
    initRadialBarChart();
    
    // 3. Payment Status Chart (Patient Visit By Gender)
    initPaymentStatusChart();
    
    // 4. Donut Chart (Total Income)
    initDonutChart();
}

function initEnrollmentChart() {
    const element = document.getElementById("enrollmentChart");
    if (!element) {
        console.warn('Enrollment chart element not found');
        return;
    }

    // Clear existing content but keep structure
    if (element.querySelector('.apexcharts-canvas')) {
        element.innerHTML = '';
    }

    const options = {
        series: [
            {
                name: "New Patients",
                data: [31, 40, 28, 51, 42, 109, 100, 70, 85, 60, 45, 80]
            },
            {
                name: "Old Patients", 
                data: [11, 32, 45, 32, 34, 52, 41, 55, 48, 35, 28, 42]
            }
        ],
        chart: {
            type: "area",
            height: 350,
            toolbar: { show: false },
            zoom: { enabled: false },
            id: 'enrollment'
        },
        dataLabels: { enabled: false },
        stroke: {
            curve: "smooth",
            width: 2
        },
        colors: ["#3e60d5", "#47ad77"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        },
        tooltip: {
            x: { format: "MMM" }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        },
        grid: {
            borderColor: "#e5e7eb",
            strokeDashArray: 4
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        }
    };

    try {
        const chart = new ApexCharts(element, options);
        chart.render();
        window.dashboardChartInstances.enrollment = chart;
        console.log('✅ Enrollment chart rendered');
    } catch (error) {
        console.error('❌ Enrollment chart error:', error);
    }
}

function initRadialBarChart() {
    const element = document.getElementById("radialMultipleBar");
    if (!element) {
        console.warn('Radial bar chart element not found');
        return;
    }

    // Clear existing content
    if (element.querySelector('.apexcharts-canvas')) {
        element.innerHTML = '';
    }

    const options = {
        series: [80, 40, 10],
        chart: {
            height: 280,
            type: "radialBar",
            id: 'radial'
        },
        plotOptions: {
            radialBar: {
                hollow: { size: "30%" },
                dataLabels: {
                    name: { fontSize: "14px", color: "#6b7280" },
                    value: { fontSize: "20px", color: "#374151", fontWeight: "bold" },
                    total: {
                        show: true,
                        label: "Total Patients",
                        color: "#6b7280",
                        formatter: function (w) {
                            return "130%";
                        }
                    }
                }
            }
        },
        labels: ["Cardiology", "Psychiatry", "Pediatrics"],
        colors: ["#3e60d5", "#ffbc00", "#47ad77"],
        stroke: {
            lineCap: "round"
        }
    };

    try {
        const chart = new ApexCharts(element, options);
        chart.render();
        window.dashboardChartInstances.radial = chart;
        console.log('✅ Radial bar chart rendered');
    } catch (error) {
        console.error('❌ Radial bar chart error:', error);
    }
}

function initPaymentStatusChart() {
    const element = document.getElementById("paymentStatusChart");
    if (!element) {
        console.warn('Payment status chart element not found');
        return;
    }

    // Clear existing content
    if (element.querySelector('.apexcharts-canvas')) {
        element.innerHTML = '';
    }

    const options = {
        series: [
            {
                name: "Male",
                data: [200, 220, 180, 240, 210, 190, 230, 250, 200, 220, 240, 260]
            },
            {
                name: "Female",
                data: [450, 430, 470, 420, 460, 480, 440, 420, 460, 480, 470, 490]
            }
        ],
        chart: {
            type: "line",
            height: 300,
            toolbar: { show: false },
            id: 'payment'
        },
        stroke: {
            width: [3, 3],
            curve: "smooth"
        },
        colors: ["#ffbc00", "#47ad77"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            min: 0,
            labels: {
                formatter: function (val) {
                    return val.toFixed(0);
                }
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        },
        grid: {
            borderColor: "#e5e7eb",
            strokeDashArray: 4
        },
        markers: {
            size: 4,
            hover: { size: 6 }
        }
    };

    try {
        const chart = new ApexCharts(element, options);
        chart.render();
        window.dashboardChartInstances.payment = chart;
        console.log('✅ Payment status chart rendered');
    } catch (error) {
        console.error('❌ Payment status chart error:', error);
    }
}

function initDonutChart() {
    const element = document.getElementById("statisticsDonutChart");
    if (!element) {
        console.warn('Donut chart element not found');
        return;
    }

    // Clear existing content
    if (element.querySelector('.apexcharts-canvas')) {
        element.innerHTML = '';
    }

    const options = {
        series: [28500, 21500],
        chart: {
            type: "donut",
            height: 250,
            id: 'donut'
        },
        colors: ["#ffbc00", "#47ad77"],
        labels: ["Current Income", "Remaining"],
        plotOptions: {
            pie: {
                donut: {
                    size: "70%",
                    labels: {
                        show: true,
                        name: { show: true, fontSize: "14px", color: "#6b7280" },
                        value: { 
                            show: true, 
                            fontSize: "20px", 
                            color: "#374151",
                            fontWeight: "bold",
                            formatter: function (val) {
                                return "$" + parseInt(val).toLocaleString();
                            }
                        },
                        total: {
                            show: true,
                            label: "Total Target",
                            color: "#6b7280",
                            fontSize: "14px",
                            formatter: function (w) {
                                return "$50,000";
                            }
                        }
                    }
                }
            }
        },
        dataLabels: { enabled: false },
        legend: { show: false }
    };

    try {
        const chart = new ApexCharts(element, options);
        chart.render();
        window.dashboardChartInstances.donut = chart;
        console.log('✅ Donut chart rendered');
    } catch (error) {
        console.error('❌ Donut chart error:', error);
    }
}

function initMiniCharts() {
    initMiniChart("mini-customers-chart", [30, 45, 35, 50, 40, 60, 50]);
    initMiniChart("mini-orders-chart", [50, 40, 45, 35, 30, 40, 35]);
    initMiniChart("mini-revenue-chart", [40, 35, 45, 30, 25, 35, 30]);
}

function initMiniChart(elementId, data) {
    const element = document.getElementById(elementId);
    if (!element) {
        console.warn(`Mini chart ${elementId} not found`);
        return;
    }

    // Clear existing mini chart
    if (element.querySelector('.apexcharts-canvas')) {
        element.innerHTML = '';
    }

    const options = {
        series: [{ data: data }],
        chart: {
            type: "line",
            width: 80,
            height: 30,
            sparkline: { enabled: true }
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        colors: ["#ffffff"],
        tooltip: {
            fixed: { enabled: false },
            x: { show: false },
            y: {
                title: { formatter: () => "" }
            },
            marker: { show: false }
        }
    };

    try {
        const chart = new ApexCharts(element, options);
        chart.render();
        window.dashboardChartInstances[elementId] = chart;
    } catch (error) {
        console.error(`Mini chart ${elementId} error:`, error);
    }
}

// Cleanup on page unload (important for SPAs)
window.addEventListener('beforeunload', function() {
    destroyExistingCharts();
    window.dashboardChartsInitialized = false;
});

// Export for module usage if needed
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { 
        initDashboardOnce,
        destroyExistingCharts 
    };
}