@extends('layouts.app')

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
@endpush
