@extends('layouts.app')

@section('title', 'Reports & Presentations')

@section('content')
    <div class="container">
        <h2 class="text-center">Reports & Presentations</h2>
        <div class="mt-4">
            <h4>Reports</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/downloads/solid_waste_management_report.pdf" download>Solid Waste Management Report 2024</a>
                </li>
                <li class="list-group-item">
                    <a href="/downloads/circular_economy_insights.pdf" download>Circular Economy Insights 2024</a>
                </li>
            </ul>
            <h4 class="mt-4">Event Galleries</h4>
            <p>No events available at this time.</p>
        </div>
    </div>
@endsection
