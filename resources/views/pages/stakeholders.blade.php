{{-- @extends('layouts.app')

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
@endpush --}}



@extends('layouts.app')
@section('title', 'Stakeholders Directory')

@section('content')
<div class="container py-4">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h1 class="display-4 text-success mb-2">Stakeholders Directory</h1>
        <p class="lead text-muted">Comprehensive directory of waste management stakeholders in Tanzania</p>
    </div>

    <!-- Search and Filter Section -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <div class="input-group">
                <input type="text" class="form-control" id="searchStakeholders" placeholder="Search stakeholders...">
                <button class="btn btn-success" type="button">
                    <i class="fas fa-search"></i> Search
                </button>
            </div>
        </div>
    </div>

    <!-- Regulatory Authorities Section -->
    <section class="mb-5">
        <div class="d-flex align-items-center mb-4">
            <h2 class="h3 mb-0">Regulatory Authorities</h2>
            <div class="border-bottom flex-grow-1 ms-3"></div>
        </div>

        <div class="row g-4">
            <!-- NEMC Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm hover-elevate">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/64/64" alt="NEMC Logo" class="rounded-circle me-3">
                            <div>
                                <h3 class="h5 mb-1">National Environment Management Council (NEMC)</h3>
                                <span class="badge bg-success">Regulatory Authority</span>
                            </div>
                        </div>
                        <p class="card-text">Responsible for environmental compliance monitoring, assessment of environmental impact statements, and enforcement of environmental standards in waste management.</p>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +255 22 277 4889</li>
                            <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> dg@nemc.or.tz</li>
                            <li class="mb-2"><i class="fas fa-globe text-success me-2"></i> <a href="https://www.nemc.or.tz" target="_blank">www.nemc.or.tz</a></li>
                            <li><i class="fas fa-map-marker-alt text-success me-2"></i> Regent Estate, Dar es Salaam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- OSHA Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm hover-elevate">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/64/64" alt="OSHA Logo" class="rounded-circle me-3">
                            <div>
                                <h3 class="h5 mb-1">Occupational Safety and Health Authority (OSHA)</h3>
                                <span class="badge bg-success">Regulatory Authority</span>
                            </div>
                        </div>
                        <p class="card-text">Oversees workplace safety standards and regulations in waste management operations, ensuring proper handling procedures and worker protection.</p>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +255 22 276 7163</li>
                            <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> info@osha.go.tz</li>
                            <li class="mb-2"><i class="fas fa-globe text-success me-2"></i> <a href="https://www.osha.go.tz" target="_blank">www.osha.go.tz</a></li>
                            <li><i class="fas fa-map-marker-alt text-success me-2"></i> Kawe, Dar es Salaam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- VETA Card -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm hover-elevate">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="/api/placeholder/64/64" alt="VETA Logo" class="rounded-circle me-3">
                            <div>
                                <h3 class="h5 mb-1">Vocational Education and Training Authority (VETA)</h3>
                                <span class="badge bg-success">Training Institution</span>
                            </div>
                        </div>
                        <p class="card-text">Provides vocational training programs in waste management and recycling technologies to develop skilled workforce in the sector.</p>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +255 22 282 0013</li>
                            <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> info@veta.go.tz</li>
                            <li class="mb-2"><i class="fas fa-globe text-success me-2"></i> <a href="https://www.veta.go.tz" target="_blank">www.veta.go.tz</a></li>
                            <li><i class="fas fa-map-marker-alt text-success me-2"></i> Chang'ombe, Dar es Salaam</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Waste Management Practitioners Section -->
    <section class="mb-5">
        <div class="d-flex align-items-center mb-4">
            <h2 class="h3 mb-0">Waste Management Practitioners</h2>
            <div class="border-bottom flex-grow-1 ms-3"></div>
        </div>

        <!-- Filter Tabs -->
        <ul class="nav nav-pills mb-4" id="practitionersTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dealers">Waste Dealers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#aggregators">Waste Aggregators</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cbo">Community Organizations</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contractors">Council Contractors</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Waste Dealers Tab -->
            <div class="tab-pane fade show active" id="dealers">
                <div class="row g-4">
                    <!-- Example Waste Dealer Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm hover-elevate">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="/api/placeholder/64/64" alt="Company Logo" class="rounded-circle me-3">
                                    <div>
                                        <h3 class="h5 mb-1">Green Recyclers Ltd</h3>
                                        <span class="badge bg-primary">Plastic & Metal</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-user text-success me-2"></i> John Makamba</li>
                                    <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +255 755 123 456</li>
                                    <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> info@greenrecyclers.co.tz</li>
                                    <li class="mb-2"><i class="fas fa-map-marker-alt text-success me-2"></i> Kinondoni, Dar es Salaam</li>
                                    <li><i class="fas fa-trash text-success me-2"></i> Plastics, Metals, E-waste</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Organizations Tab -->
            <div class="tab-pane fade" id="cbo">
                <div class="row g-4">
                    <!-- Example CBO Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm hover-elevate">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="/api/placeholder/64/64" alt="Organization Logo" class="rounded-circle me-3">
                                    <div>
                                        <h3 class="h5 mb-1">Mazingira Community Group</h3>
                                        <span class="badge bg-success">Community Organization</span>
                                    </div>
                                </div>
                                <p class="card-text">Community-based organization focusing on local waste management and environmental education.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-user text-success me-2"></i> Sarah Mwajuma</li>
                                    <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +255 789 456 123</li>
                                    <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> info@mazingira.org</li>
                                    <li><i class="fas fa-map-marker-alt text-success me-2"></i> Temeke, Dar es Salaam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('styles')
<style>
    .hover-elevate {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .hover-elevate:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
    }
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }
    .nav-pills .nav-link {
        color: #198754;
        margin-right: 0.5rem;
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
    }
    .nav-pills .nav-link.active {
        background-color: #198754;
    }
    .badge {
        padding: 0.5em 1em;
        border-radius: 20px;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Search functionality
    const searchInput = document.getElementById('searchStakeholders');
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.card');
        
        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            card.closest('.col-md-6').style.display = 
                text.includes(searchTerm) ? 'block' : 'none';
        });
    });
});
</script>
@endpush