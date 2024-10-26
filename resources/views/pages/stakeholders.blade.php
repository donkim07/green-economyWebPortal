@extends('layouts.app')

@section('title', 'Stakeholders Directory')

@section('content')
    <div class="container">
        <h2 class="text-center">Stakeholders Directory</h2>
        <input type="text" class="form-control mt-4" placeholder="Search stakeholders..." id="stakeholderSearch">
        <div class="mt-4">
            <h4>Regulatory Authorities</h4>
            <ul class="list-group" id="regulatoryAuthorities">
                <li class="list-group-item">Ministry of Environment <span class="badge badge-info">+255 123 456 789</span></li>
                <li class="list-group-item">National Environmental Management Council (NEMC) <span class="badge badge-info">+255 987 654 321</span></li>
            </ul>
            <h4 class="mt-4">Waste Dealers</h4>
            <ul class="list-group" id="wasteDealers">
                <li class="list-group-item">Green Waste Ltd <span class="badge badge-info">+255 456 789 123</span></li>
                <li class="list-group-item">Eco Recyclers <span class="badge badge-info">+255 321 654 987</span></li>
            </ul>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Basic search functionality (replace with dynamic data)
        document.getElementById('stakeholderSearch').addEventListener('keyup', function() {
            var query = this.value.toLowerCase();
            document.querySelectorAll('.list-group-item').forEach(function(item) {
                item.style.display = item.textContent.toLowerCase().includes(query) ? '' : 'none';
            });
        });
    </script>
@endpush
