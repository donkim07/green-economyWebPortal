<!DOCTYPE html>
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
    <div class="branding">
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
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Green Circular Economy. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
