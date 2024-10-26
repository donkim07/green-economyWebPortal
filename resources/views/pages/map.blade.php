@extends('layouts.app')

@section('title', 'Map Layout')

@section('content')
    <div class="map-container" id="map" style="height: 500px; width: 100%;"></div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.369028, 34.888822], 6); // Tanzania's latitude and longitude
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Add data points (replace with actual data from the database)
        var greenIcon = L.icon({ iconUrl: 'path/to/green-icon.png', iconSize: [25, 25] });
        var redIcon = L.icon({ iconUrl: 'path/to/red-icon.png', iconSize: [25, 25] });
        var yellowIcon = L.icon({ iconUrl: 'path/to/yellow-icon.png', iconSize: [25, 25] });

        L.marker([-6.8, 39.3], {icon: greenIcon}).addTo(map).bindPopup('Legal Collection Point');
        L.marker([-6.3, 38.9], {icon: redIcon}).addTo(map).bindPopup('Illegal Collection Point');
        L.marker([-6.2, 39.2], {icon: yellowIcon}).addTo(map).bindPopup('Illegal Dumping Site');
    </script>
@endpush
