import './bootstrap';
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