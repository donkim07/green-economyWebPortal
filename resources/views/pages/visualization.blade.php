{{-- @extends('layouts.app')

@section('title', 'Visualization')

@section('content')
    <div class="container">
        <h2 class="text-center">Waste Management Data Visualization</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <canvas id="wasteCollectionCoverageChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="wasteGenerationChart"></canvas>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <canvas id="transportationTypesChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="collectionPointsCapacityChart"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample data for charts (replace with dynamic data)
        var ctx1 = document.getElementById('wasteCollectionCoverageChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Residential', 'Industrial', 'Commercial', 'Institutional'],
                datasets: [{
                    label: 'Coverage (%)',
                    data: [75, 50, 60, 80],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)'
                }]
            },
            options: { responsive: true }
        });

        var ctx2 = document.getElementById('wasteGenerationChart').getContext('2d');
        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Plastic', 'Metal', 'Paper', 'Hazardous', 'Others'],
                datasets: [{
                    data: [40, 20, 15, 10, 15],
                    backgroundColor: ['#4CAF50', '#FF9800', '#F44336', '#9C27B0', '#2196F3']
                }]
            },
            options: { responsive: true }
        });

        // Similar configuration for other charts...
    </script>
@endpush --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green and Circular Economy Information Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">




    <style>
        :root {
            --primary-green: #30ad4d;
            --light-green: #e8f5e9;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: var(--light-green);
            min-height: 100vh;
        }

        .main-content {
            flex: 1 0 auto;
        }

        .navbar {
            background-color: var(--primary-green);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
            transition: opacity 0.3s;
        }

        .navbar-nav .nav-link:hover {
            opacity: 0.8;
        }

        .top-branding {
            background-color: #a5c4a8f1;
            padding: 1rem 0;
            border-bottom: 1px solid #dee2e6;
        }

        .logo-container img {
            max-height: 80px;
            width: auto;
            transition: transform 0.3s;
        }

        .logo-container img:hover {
            transform: scale(1.05);
        }

        .secondary-logos img {
            max-height: 50px;
            width: auto;
            margin: 0.5rem;
        }

        .national-flag {
            max-height: 100px !important;
        }

        footer {
            background-color: var(--primary-green);
            color: white;
            padding: 1rem 0;
            margin-top: auto;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .logo-container img {
                max-height: 60px;
            }
            
            .secondary-logos img {
                max-height: 40px;
            }
            
            .national-flag {
                max-height: 80px !important;
            }
        }


        .chart-container {
        position: relative;
        height: 300px;
        margin-bottom: 20px;
    }

    .stats-card {
        border-radius: 8px;
        border: 1px solid rgba(0,0,0,.125);
        transition: transform 0.2s;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 6px rgba(0,0,0,.1);
    }

    .location-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }

    .transport-item {
        border-left: 4px solid #007bff;
        margin-bottom: 10px;
        padding: 10px;
        background: #f8f9fa;
        transition: all 0.3s;
    }

    .transport-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }


</style>


</head>
<body>
    <header>
        <!-- Top Branding Section -->
        <div class="top-branding">
            <div class="container">
                <!-- Primary Logos -->
                <div class="row align-items-center justify-content-between mb-3">
                    <div class="col-md-3 text-center text-md-start logo-container">
                        <img src="{{ asset('images/tanzania_logo.png') }}" alt="United Republic of Tanzania logo" class="img-fluid">
                    </div>
                    <div class="col-md-3 text-center logo-container">
                        <img src="{{ asset('images/national_flag.png') }}" alt="National Flag" class="img-fluid national-flag">
                    </div>
                    <div class="col-md-3 text-center text-md-end logo-container">
                        <img src="{{ asset('images/district_logo.png') }}" alt="District councils' logo" class="img-fluid">
                    </div>
                </div>
                
                <!-- Secondary Logos -->
                <div class="row secondary-logos justify-content-center align-items-center">
                    <div class="col-auto">
                        <img src="{{ asset('images/sasa_program_logo.png') }}" alt="SASA program logo" class="img-fluid">
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('images/enabel_logo.png') }}" alt="Enablel logo" class="img-fluid">
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('images/thedi_logo.png') }}" alt="THEDI logo" class="img-fluid">
                    </div>
                    <div class="col-auto">
                        <img src="{{ asset('images/sks_pharma_logo.png') }}" alt="SKS Pharma Ltd logo" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link px-3" href="/map">Map</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/visualization">Visualization</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/stakeholders">Stakeholders</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/information">Information</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/reports">Reports</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
{{-- @extends('layouts.app') --}}

{{-- @section('styles') --}}


{{-- @endsection --}}

{{-- @section('content') --}}
<div class="container-fluid py-4">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3">Waste Management Analytics Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visualizations</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Key Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card bg-white p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1">Total Collection Points</h6>
                        <h3 class="mb-0">123</h3>
                        <small class="text-success">↑ 12% from last month</small>
                    </div>
                    <div class="location-icon bg-primary-subtle">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card bg-white p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1">Average Distance</h6>
                        <h3 class="mb-0">5.4 km</h3>
                        <small class="text-danger">↓ 3% from last month</small>
                    </div>
                    <div class="location-icon bg-success-subtle">
                        <i class="fas fa-route text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card bg-white p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1">Total Capacity</h6>
                        <h3 class="mb-0">450 tons</h3>
                        <small class="text-success">↑ 8% from last month</small>
                    </div>
                    <div class="location-icon bg-warning-subtle">
                        <i class="fas fa-weight-hanging text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card bg-white p-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1">Active Vehicles</h6>
                        <h3 class="mb-0">41</h3>
                        <small class="text-success">↑ 5% from last month</small>
                    </div>
                    <div class="location-icon bg-info-subtle">
                        <i class="fas fa-truck text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row 1 -->
    <div class="row mb-4">
        <!-- Distance Analysis Chart -->
        <div class="col-xl-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Distance Analysis</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="distanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


                <!-- Coverage Analysis -->
                <div class="col-xl-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Coverage Analysis</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="coverageChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

    <!-- Charts Row 2 -->
    <div class="row mb-4">
        <!-- Waste Type Distribution -->
        <div class="col-xl-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Waste Type Distribution</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="wasteTypeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transportation Fleet -->
        <div class="col-xl-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Transportation Fleet</h5>
                </div>
                <div class="card-body">
                    <div class="transport-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Toyo</h6>
                                <small class="text-muted">Capacity: 2-3 tons</small>
                            </div>
                            <span class="badge bg-primary">12 units</span>
                        </div>
                    </div>
                    <div class="transport-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Tractor</h6>
                                <small class="text-muted">Capacity: 5-7 tons</small>
                            </div>
                            <span class="badge bg-primary">8 units</span>
                        </div>
                    </div>
                    <div class="transport-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Truck</h6>
                                <small class="text-muted">Capacity: 10-12 tons</small>
                            </div>
                            <span class="badge bg-primary">15 units</span>
                        </div>
                    </div>
                    <div class="transport-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0">Compacting Truck</h6>
                                <small class="text-muted">Capacity: 15-20 tons</small>
                            </div>
                            <span class="badge bg-primary">6 units</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Types -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Collection Points by Location Type</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <div class="location-icon bg-primary-subtle">
                                        <i class="fas fa-home text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Residential</h6>
                                        <h4 class="mb-0">45</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <div class="location-icon bg-success-subtle">
                                        <i class="fas fa-industry text-success"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Industrial</h6>
                                        <h4 class="mb-0">15</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <div class="location-icon bg-warning-subtle">
                                        <i class="fas fa-store text-warning"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Commercial</h6>
                                        <h4 class="mb-0">30</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="p-3 bg-light rounded">
                                <div class="d-flex align-items-center">
                                    <div class="location-icon bg-info-subtle">
                                        <i class="fas fa-graduation-cap text-info"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Institutional</h6>
                                        <h4 class="mb-0">10</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}





{{-- 
<main class="main-content container mt-4">
    @yield('content')
</main> --}}

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2024 Green Circular Economy. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
{{-- @section('scripts') --}}
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Distance Analysis Chart
    new Chart(document.getElementById('distanceChart'), {
        type: 'line',
        data: {
            labels: ['CP-001', 'CP-002', 'CP-003', 'CP-004', 'CP-005'],
            datasets: [{
                label: 'Distance (km)',
                data: [5.2, 3.8, 7.1, 4.5, 6.3],
                borderColor: '#007bff',
                tension: 0.1
            }, {
                label: 'Time (min)',
                data: [25, 18, 35, 22, 30],
                borderColor: '#28a745',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // // Waste Type Distribution Chart
    // new Chart(document.getElementById('wasteTypeChart'), {
    //     type: 'pie',
    //     data: {
    //         labels: ['Plastic', 'Metal', 'Paper', 'Hazardous', 'Others'],
    //         datasets: [{
    //             data: [35, 25, 20, 10, 10],
    //             backgroundColor: [
    //                 '#007bff',
    //                 '#28a745',
    //                 '#ffc107',
    //                 '#dc3545',
    //                 '#6c757d'
    //             ]
    //         }]
    //     },
    //     options: {
    //         responsive: true,
    //         maintainAspectRatio: false
    //     }
    // });



    new Chart(document.getElementById('wasteTypeChart'), {
    type: 'doughnut',
    data: {
        labels: ['Plastic', 'Metal', 'Paper', 'Hazardous', 'Others'],
        datasets: [{
            data: [40, 20, 15, 10, 15],
            backgroundColor: ['#4CAF50', '#FF9800', '#F44336', '#9C27B0', '#2196F3'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let percentage = ((context.raw / 100) * 100).toFixed(2);
                        return `${context.label}: ${context.raw} (${percentage}%)`;
                    }
                }
            }
        }
    }
});



    // Coverage Analysis Chart
    new Chart(document.getElementById('coverageChart'), {
        type: 'bar',
        data: {
            labels: ['Zone A', 'Zone B', 'Zone C', 'Zone D', 'Zone E'],
            datasets: [{
                label: 'Coverage %',
                data: [85, 72, 93, 64, 88],
                backgroundColor: '#007bff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
});
</script>
{{-- @endsection --}}