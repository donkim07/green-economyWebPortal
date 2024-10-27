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
            --light-green: #e0f5e2;
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

        .top-branding {
            background-color: #a5c4a8f1;
            padding: 1.5rem 0;
            position: relative;
            overflow: hidden;
            min-height: 120px;
        }
    
        /* Flag background styling */
        .flag-background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .flag-background img {
            height: 140%;
            object-fit: cover;
            opacity: 0.4;
            mask-image: linear-gradient(to right, 
                transparent 0%,
                black 20%,
                black 80%,
                transparent 100%
            );
            -webkit-mask-image: linear-gradient(to right, 
                transparent 0%,
                black 20%,
                black 80%,
                transparent 100%
            );
        }
    
        .branding-content {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }
    
        /* Main logos */
        .main-logo {
            max-height: 80px;
            width: auto;
            transition: transform 0.3s ease;
        }
    
        .main-logo:hover {
            transform: scale(1.05);
        }
    
        /* Partner logos */
        .partner-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3rem;
            padding: 0 2rem;
        }
    
        .partner-logo {
            max-height: 45px;
            width: auto;
            transition: opacity 0.3s ease;
        }
    
        .partner-logo:hover {
            opacity: 0.8;
        }
    
        /* Navbar styling */
        .navbar {
            background-color: var(--primary-green);
            padding: 0.75rem 0;
        }
    
        .navbar-brand img {
            max-height: 40px;
            width: auto;
        }
    
        .navbar-nav .nav-link {
            color: white !important;
            padding: 0.5rem 1.2rem !important;
            transition: all 0.3s ease;
        }
    
        .navbar-nav .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 4px;
        }
    
        /* Responsive design */
        @media (max-width: 992px) {
            .partner-logos {
                display: none;
            }
    
            .main-logo {
                max-height: 60px;
            }
    
            .district-logo {
                display: none;
            }
    
            .navbar-brand {
                order: 2;
                margin-left: auto;
            }
    
            .navbar-toggler {
                order: 1;
            }
            .top-branding {
            display: none;
        }
        }
    </style>




    <style>
        /* :root {
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
        } */


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




</head>
<body>
    <header>
        <!-- Top Branding Section -->
        {{-- <div class="top-branding">
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


        </div> --}}



        <header>
            <div class="top-branding">
                <div class="flag-background">
                    <img src="{{ asset('images/national_flag.png') }}" alt="National Flag Background">
                </div>
                
                <div class="container">
                    <div class="branding-content">
                        <!-- Tanzania Logo -->
                        <img src="{{ asset('images/tanzania_logo.png') }}" alt="United Republic of Tanzania logo" class="main-logo">
                        
                        <!-- Partner Logos -->
                        <div class="partner-logos">
                            <img src="{{ asset('images/sasa_program_logo.png') }}" alt="SASA program logo" class="partner-logo">
                            <img src="{{ asset('images/enabel_logo.png') }}" alt="Enabel logo" class="partner-logo">
                            <img src="{{ asset('images/thedi_logo.png') }}" alt="THEDI logo" class="partner-logo">
                            <img src="{{ asset('images/sks_pharma_logo.png') }}" alt="SKS Pharma Ltd logo" class="partner-logo">
                        </div>
                        
                        <!-- District Logo -->
                        <img src="{{ asset('images/district_logo.png') }}" alt="District councils' logo" class="main-logo district-logo">
                    </div>
                </div>
            </div>



{{-- 
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
        </nav> --}}



    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand d-lg-none" href="/">
                <img src="{{ asset('images/tanzania_logo.png') }}" alt="Tanzania Logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/map">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="/visualization">Visualization</a></li>
                    <li class="nav-item"><a class="nav-link" href="/stakeholders">Stakeholders</a></li>
                    <li class="nav-item"><a class="nav-link" href="/information">Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="/reports">Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    </header>







    <main class="main-content container mt-4">
        @yield('content')
    </main>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2024 Green Circular Economy. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>