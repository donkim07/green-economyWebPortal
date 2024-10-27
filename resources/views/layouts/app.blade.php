{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green and Circular Economy Information Portal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background-color: #d4edda; /* Light green background */
        }
        .navbar {
            background-color: #28a745;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }
        .branding {
            text-align: center;
            padding: 20px 0;
        }
        .branding img {
            height: 80px;
        }
    </style>
</head>
<body>


    <header class="border-bottom">
        <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
                <img src="{{ asset('images/tanzania_logo.png') }}" alt="Tanzania Logo" style="height: 80px;">
                <img src="{{ asset('images/national_flag.png') }}" alt="National Flag" style="height: 80px;">
                <img src="{{ asset('images/district_logo.png') }}" alt="District Logo" style="height: 70px;">
        </div>
        <div class="container-fluid py-2 d-flex justify-content-between align-items-center">
            <img src="{{ asset('images/sasa_program_logo.png') }}" alt="SASA Program Logo" style="height: 50px;">
            <img src="{{ asset('images/enabel_logo.png') }}" alt="Enabel Logo" style="height: 50px;">
            <img src="{{ asset('images/thedi_logo.png') }}" alt="THEDI Logo" style="height: 50px;">
            <img src="{{ asset('images/sks_pharma_logo.png') }}" alt="SKS Pharma Logo" style="height: 50px;">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
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
    
    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Green Circular Economy. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
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




</style>





<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>



<style>



        
/* map css */
        #map {
        height: calc(100vh - 100px);
        width: 100%;
        min-height: 500px;
        z-index: 1;
    }
    
    /* .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        padding-top: 60px;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    } */

    .marker-popup img {
        max-width: 200px;
        height: auto;
    }

    /* main {
        padding-top: 60px;
    } */
    /* .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    } */


    /* Make map container responsive */
    /* /* @media (max-width: 768px) {
        .sidebar {
            position: static;
            height: auto;
            padding-top: 0;
        }
        #map {
            height: 500px;
        }
    }  */
    </style>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>


 <script>
 document.addEventListener('DOMContentLoaded', function() {
    // Initialize the map
    const map = L.map('map', {
        center: [-6.3690, 34.8888], // Tanzania center
        zoom: 7,
        zoomControl: true,
        maxBounds: [
            [-11.7457, 29.3399], // Southwest coordinates
            [-1.0023, 40.4477]  // Northeast coordinates
        ]
    });

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        maxZoom: 19,
        minZoom: 6
    }).addTo(map);

    // Initialize layer groups
    const layers = {
        legalPoints: L.layerGroup().addTo(map),
        illegalPoints: L.layerGroup().addTo(map),
        dumpingSites: L.layerGroup().addTo(map),
        wasteDealers: L.layerGroup().addTo(map),
        recyclingCenters: L.layerGroup().addTo(map),
        stakeholders: L.layerGroup().addTo(map)
    };

    // Define marker icons
    const icons = {
        legalPoint: L.divIcon({
            className: 'custom-div-icon',
            html: `<div style="background-color: #198754; width: 25px; height: 25px; border-radius: 50%; border: 2px solid #fff;"></div>`,
            iconSize: [15, 15]
        }),
        illegalPoint: L.divIcon({
            className: 'custom-div-icon',
            html: `<div style="background-color: #dc3545; width: 25px; height: 25px; border-radius: 50%; border: 2px solid #fff;"></div>`,
            iconSize: [-25, 25]
        }),
        dumpingSite: L.divIcon({
            className: 'custom-div-icon',
            html: `<div style="background-color: #ffc107; width: 25px; height: 25px; border-radius: 50%; border: 2px solid #fff;"></div>`,
            iconSize: [35, 35]
        })
    };

    // Sample data - Replace with actual data from your database
    const sampleData = {
        legalPoints: [
            { lat: -6.8235, lng: 39.2695, name: "Dar es Salaam Collection Point", ward: "Kariakoo", street: "Mkunguni Street" },
            { lat: -6.1731, lng: 35.7516, name: "Dodoma Collection Point", ward: "Central", street: "Main Street" }
        ],
        illegalPoints: [
            { lat: -6.8135, lng: 39.2805, name: "Illegal Site A", ward: "Kivukoni", street: "Harbor Street" }
        ],
        dumpingSites: [
            { lat: -6.8335, lng: 39.2505, name: "Dumping Area 1", ward: "Kisutu", street: "Market Street" }
        ]
    };

    // Function to create popup content
    function createPopupContent(item) {
        return `
            <div class="marker-popup">
                <h5>${item.name}</h5>
                <p><strong>Ward:</strong> ${item.ward}<br>
                <strong>Street:</strong> ${item.street}</p>
                ${item.image ? `<img src="${item.image}" alt="${item.name}">` : ''}
            </div>
        `;
    }

    // Add markers to the map
    function addMarkers() {
        // Add legal points
        sampleData.legalPoints.forEach(point => {
            L.marker([point.lat, point.lng], {icon: icons.legalPoint})
                .bindPopup(createPopupContent(point))
                .addTo(layers.legalPoints);
        });

        // Add illegal points
        sampleData.illegalPoints.forEach(point => {
            L.marker([point.lat, point.lng], {icon: icons.illegalPoint})
                .bindPopup(createPopupContent(point))
                .addTo(layers.illegalPoints);
        });

        // Add dumping sites
        sampleData.dumpingSites.forEach(point => {
            L.marker([point.lat, point.lng], {icon: icons.dumpingSite})
                .bindPopup(createPopupContent(point))
                .addTo(layers.dumpingSites);
        });
    }

    // Initialize markers
    addMarkers();

    // Handle layer toggling
    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const layerName = this.id;
            if (layers[layerName]) {
                if (this.checked) {
                    map.addLayer(layers[layerName]);
                } else {
                    map.removeLayer(layers[layerName]);
                }
            }
        });
    });

    // Error handling for map load
    map.on('error', function(e) {
        console.error('Map Error:', e.error);
        alert('There was an error loading the map. Please refresh the page.');
    });
});
</script>





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


    {{-- <div class="branding">
        <div class="d-flex justify-content-between align-items-center">
            <img src="{{ asset('images/tanzania_logo.png') }}" alt="Tanzania Logo" class="mr-auto">
            <img src="{{ asset('images/national_flag.png') }}" alt="National Flag">
            <img src="{{ asset('images/district_logo.png') }}" alt="District Council Logo" class="ml-auto">
        </div>
        <img src="{{ asset('images/sasa_program_logo.png') }}" alt="SASA Program Logo">
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('home') }}">Green Circular Economy</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('map.index') }}">Map</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('visualization.index') }}">Visualization</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('stakeholders.index') }}">Stakeholders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('information.index') }}">Information</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('reports.index') }}">Reports</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav> --}}


                    {{-- <a class="navbar-brand" href="{{ route('home') }}">Circular Economy Portal</a> --}}
