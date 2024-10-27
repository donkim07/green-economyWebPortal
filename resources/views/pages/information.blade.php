{{-- @extends('layouts.app')

@section('title', 'Information Center')

@section('content')
    <div class="container">
        <h2 class="text-center">Information Center</h2>
        <div class="mt-4">
            <h4>Public Advertisements</h4>
            <ul class="list-group">
                <li class="list-group-item">Tender for Waste Management Equipment - Deadline: 30th Nov 2024</li>
                <li class="list-group-item">Job Opportunity: Environmental Officer - Apply by 15th Dec 2024</li>
            </ul>
            <h4 class="mt-4">Best Waste Management Practices</h4>
            <p>Segregate waste into plastic, organic, and hazardous categories for effective disposal.</p>
            <h4 class="mt-4">Support for Informal Sectors</h4>
            <p>Resources and training programs are available for waste collectors and recyclers.</p>
        </div>
    </div>


    <div class="container">
        <h2 class="text-center">Information Center</h2>
        <div class="mt-4">
            <h4>Public Advertisements</h4>
            <ul class="list-group">
                <li class="list-group-item">Tender for Waste Management Equipment - Deadline: 30th Nov 2024</li>
                <li class="list-group-item">Job Opportunity: Environmental Officer - Apply by 15th Dec 2024</li>
            </ul>
            <h4 class="mt-4">Best Waste Management Practices</h4>
            <p>Segregate waste into plastic, organic, and hazardous categories for effective disposal.</p>
            <h4 class="mt-4">Support for Informal Sectors</h4>
            <p>Resources and training programs are available for waste collectors and recyclers.</p>
        </div>
    </div>    <div class="container">
        <h2 class="text-center">Information Center</h2>
        <div class="mt-4">
            <h4>Public Advertisements</h4>
            <ul class="list-group">
                <li class="list-group-item">Tender for Waste Management Equipment - Deadline: 30th Nov 2024</li>
                <li class="list-group-item">Job Opportunity: Environmental Officer - Apply by 15th Dec 2024</li>
            </ul>
            <h4 class="mt-4">Best Waste Management Practices</h4>
            <p>Segregate waste into plastic, organic, and hazardous categories for effective disposal.</p>
            <h4 class="mt-4">Support for Informal Sectors</h4>
            <p>Resources and training programs are available for waste collectors and recyclers.</p>
        </div>
    </div>
@endsection --}}


@extends('layouts.app')

@section('content')
<!-- Hero Section with Parallax -->
{{-- <section class="hero-parallax position-relative overflow-hidden" style="height: 400px;">
    <div class="parallax-bg position-absolute w-100 h-100">
        <img src="{{ asset('images/circular.png') }}"class="w-100 h-100 object-fit-cover" alt="Information Center Background">
    </div>
    <div class="overlay position-absolute w-100 h-100 bg-dark opacity-60"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Information Center</h1>
                <p class="lead animate__animated animate__fadeInUp">Your Gateway to Waste Management Resources & Opportunities</p>
            </div>
        </div>
    </div>
</section> --}}

<!-- Quick Links Navigation -->
{{-- <section class="bg-light py-4 sticky-top shadow-sm">
    <div class="container">
        <div class="row g-2 justify-content-center">
            <div class="col-auto">
                <a href="#opportunities" class="btn btn-primary rounded-pill px-4">Opportunities</a>
            </div>
            <div class="col-auto">
                <a href="#public-issues" class="btn btn-primary rounded-pill px-4">Public Issues</a>
            </div>
            <div class="col-auto">
                <a href="#regulations" class="btn btn-primary rounded-pill px-4">Regulations</a>
            </div>
            <div class="col-auto">
                <a href="#best-practices" class="btn btn-primary rounded-pill px-4">Best Practices</a>
            </div>
            <div class="col-auto">
                <a href="#informal-sector" class="btn btn-primary rounded-pill px-4">Informal Sector</a>
            </div>
        </div>
    </div>
</section> --}}

<!-- Opportunities Section -->
{{-- <section id="opportunities" class="py-5"> --}}
    <div class="container">
        <h2 class="section-title text-center mb-5">Current Opportunities</h2>
        <div class="row g-4">
            <!-- Tenders Tab -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h3 class="h5 mb-0">Active Tenders</h3>
                    </div>
                    <div class="card-body">
                        <div class="tender-list">
                            <div class="tender-item mb-4 animate__animated animate__fadeInLeft">
                                <span class="badge bg-success mb-2">New</span>
                                <h4 class="h6">Supply of Waste Collection Vehicles</h4>
                                <p class="mb-2">Tender for supply of 10 modern waste collection vehicles for municipal waste management.</p>
                                <div class="tender-details">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar-event me-2"></i>Deadline: October 30, 2024
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        <i class="bi bi-file-earmark-text me-2"></i>Ref: TEN/2024/WM/001
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm mt-3">View Details</a>
                            </div>
                            
                            <div class="tender-item mb-4 animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
                                <h4 class="h6">Waste Processing Plant Construction</h4>
                                <p class="mb-2">Construction tender for new waste processing facility in Dar es Salaam.</p>
                                <div class="tender-details">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar-event me-2"></i>Deadline: November 15, 2024
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        <i class="bi bi-file-earmark-text me-2"></i>Ref: TEN/2024/WM/002
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm mt-3">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jobs Tab -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h3 class="h5 mb-0">Job Opportunities</h3>
                    </div>
                    <div class="card-body">
                        <div class="job-list">
                            <div class="job-item mb-4 animate__animated animate__fadeInRight">
                                <span class="badge bg-warning mb-2">Urgent</span>
                                <h4 class="h6">Environmental Engineer</h4>
                                <p class="mb-2">Seeking experienced Environmental Engineer for waste treatment facility operations.</p>
                                <div class="job-details">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-2"></i>Location: Dar es Salaam
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-2"></i>Type: Full-time
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm mt-3">Apply Now</a>
                            </div>

                            <div class="job-item mb-4 animate__animated animate__fadeInRight" style="animation-delay: 0.2s;">
                                <h4 class="h6">Waste Management Specialist</h4>
                                <p class="mb-2">Looking for specialists to oversee municipal waste collection programs.</p>
                                <div class="job-details">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-2"></i>Location: Arusha
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-2"></i>Type: Contract
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm mt-3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Public Issues Section -->
<section id="public-issues" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Ongoing Key Public Issues</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-card animate__animated animate__fadeInUp">
                    <img src="/api/placeholder/400/250" class="card-img-top" alt="Public Consultation">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Public Consultation: New Recycling Centers</h3>
                        <p>Ongoing consultation for proposed recycling centers in residential areas. Share your feedback and concerns.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-info">Open for Comments</span>
                            <small class="text-muted">Ends: Nov 15, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <img src="/api/placeholder/400/250" class="card-img-top" alt="Waste Collection">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Updated Collection Schedule</h3>
                        <p>New waste collection schedules implemented across districts. Check your area's updated timeline.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-success">New Schedule</span>
                            <small class="text-muted">Effective: Oct 1, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <img src="/api/placeholder/400/250" class="card-img-top" alt="Community Meeting">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Community Awareness Program</h3>
                        <p>Join our community awareness sessions on waste reduction and recycling practices.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-warning">Upcoming Events</span>
                            <small class="text-muted">Next Session: Oct 5, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regulations Section -->
<section id="regulations" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Waste Management Regulations</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="regulationsAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#regulation1">
                                Municipal Waste Management Bylaws 2024
                            </button>
                        </h3>
                        <div id="regulation1" class="accordion-collapse collapse show" data-bs-parent="#regulationsAccordion">
                            <div class="accordion-body">
                                <p>Key regulations for municipal waste management including:</p>
                                <ul>
                                    <li>Mandatory waste segregation at source</li>
                                    <li>Scheduled collection times and zones</li>
                                    <li>Penalties for illegal dumping</li>
                                    <li>Commercial waste handling requirements</li>
                                </ul>
                                <a href="#" class="btn btn-sm btn-primary mt-3">Download Full Document</a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#regulation2">
                                Industrial Waste Guidelines 2024
                            </button>
                        </h3>
                        <div id="regulation2" class="accordion-collapse collapse" data-bs-parent="#regulationsAccordion">
                            <div class="accordion-body">
                                <p>Guidelines for industrial waste management:</p>
                                <ul>
                                    <li>Hazardous waste handling procedures</li>
                                    <li>Treatment requirements</li>
                                    <li>Documentation and reporting</li>
                                    <li>Emergency response protocols</li>
                                </ul>
                                <a href="#" class="btn btn-sm btn-primary mt-3">Download Full Document</a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#regulation3">
                                Recycling Standards 2024
                            </button>
                        </h3>
                        <div id="regulation3" class="accordion-collapse collapse" data-bs-parent="#regulationsAccordion">
                            <div class="accordion-body">
                                <p>Standards for recycling operations:</p>
                                <ul>
                                    <li>Material sorting specifications</li>
                                    <li>Quality control requirements</li>
                                    <li>Storage and handling guidelines</li>
                                    <li>Transportation regulations</li>
                                </ul>
                                <a href="#" class="btn btn-sm btn-primary mt-3">Download Full Document</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Practices Section -->
<section id="best-practices" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Best Waste Management Practices</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="practice-card card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="practice-icon mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle" alt="Segregation">
                        </div>
                        <h3 class="h5 mb-3">Waste Segregation</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Separate organic and inorganic waste</li>
                            <li class="mb-2">✓ Use different colored bins</li>
                            <li class="mb-2">✓ Keep hazardous waste separate</li>
                            <li class="mb-2">✓ Label containers clearly</li>
                        </ul>
                        <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#segregationModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="practice-card card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="practice-icon mb-4">
                            <img src="/api/placeholder/80/80" class="rounded-circle" alt="Sorting">
                        </div>
                        <h3 class="h5 mb-3">Waste Sorting</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Sort by material type</li>
            <li class="mb-2">✓ Remove contamination</li>
            <li class="mb-2">✓ Follow local guidelines</li>
        </ul>
        <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#sortingModal">
            Learn More
        </button>
    </div>
</div>
</div>

<div class="col-md-6 col-lg-4">
    <div class="practice-card card border-0 shadow-sm h-100">
        <div class="card-body">
            <div class="practice-icon mb-4">
                <img src="/api/placeholder/80/80" class="rounded-circle" alt="Treatment">
            </div>
            <h3 class="h5 mb-3">Waste Treatment</h3>
            <ul class="list-unstyled">
                <li class="mb-2">✓ Composting organic waste</li>
                <li class="mb-2">✓ Recycling procedures</li>
                <li class="mb-2">✓ Safe disposal methods</li>
                <li class="mb-2">✓ Treatment documentation</li>
            </ul>
            <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#treatmentModal">
                Learn More
            </button>
        </div>
    </div>
</div>
</div>

<!-- Interactive Process Flow -->
<div class="row mt-5">
    <div class="col-12">
        <div class="process-flow bg-white rounded shadow-sm p-4">
            <h3 class="h4 text-center mb-4">Waste Management Process Flow</h3>
            <div class="process-steps d-flex justify-content-between position-relative">
                <div class="process-line"></div>
                <div class="process-step active">
                    <div class="step-icon">1</div>
                    <div class="step-text">Generation</div>
                </div>
                <div class="process-step">
                    <div class="step-icon">2</div>
                    <div class="step-text">Collection</div>
                </div>
                <div class="process-step">
                    <div class="step-icon">3</div>
                    <div class="step-text">Sorting</div>
                </div>
                <div class="process-step">
                    <div class="step-icon">4</div>
                    <div class="step-text">Treatment</div>
                </div>
                <div class="process-step">
                    <div class="step-icon">5</div>
                    <div class="step-text">Disposal</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<!-- Informal Sector Support Section -->
<section id="informal-sector" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Informal Sector Support</h2>
        
        <!-- Support Programs -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 program-card">
                    <div class="card-body">
                        <h3 class="h4 mb-4">Training Programs</h3>
                        <div class="upcoming-training mb-4">
                            <div class="training-item d-flex align-items-start mb-3">
                                <div class="calendar-icon me-3">
                                    <div class="date">15</div>
                                    <div class="month">OCT</div>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Safety in Waste Collection</h4>
                                    <p class="mb-1">Learn proper safety procedures and use of protective equipment.</p>
                                    <small class="text-muted">Location: Dar es Salaam Training Center</small>
                                </div>
                            </div>
                            <div class="training-item d-flex align-items-start">
                                <div class="calendar-icon me-3">
                                    <div class="date">22</div>
                                    <div class="month">OCT</div>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Recycling Techniques Workshop</h4>
                                    <p class="mb-1">Hands-on training in waste sorting and recycling methods.</p>
                                    <small class="text-muted">Location: Arusha Community Center</small>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">Register for Training</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 program-card">
                    <div class="card-body">
                        <h3 class="h4 mb-4">Financial Support</h3>
                        <div class="support-programs">
                            <div class="program-item mb-4">
                                <h4 class="h6">Equipment Financing</h4>
                                <p>Low-interest loans for purchasing waste collection equipment and vehicles.</p>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                                </div>
                                <small class="text-muted">75% of fund still available</small>
                            </div>
                            <div class="program-item mb-4">
                                <h4 class="h6">Business Development Grants</h4>
                                <p>Support for waste collectors looking to formalize their operations.</p>
                                <div class="progress mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                                </div>
                                <small class="text-muted">45% of fund still available</small>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">Apply for Support</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Stories -->
        <h3 class="h4 text-center mb-4">Success Stories</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm story-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Success Story 1">
                    <div class="card-body">
                        <h4 class="h5 mb-3">From Waste Picker to Business Owner</h4>
                        <p>Maria's journey from informal waste collection to running a successful recycling business.</p>
                        <a href="#" class="btn btn-link p-0">Read Full Story →</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm story-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Success Story 2">
                    <div class="card-body">
                        <h4 class="h5 mb-3">Community Recycling Initiative</h4>
                        <p>How a group of informal collectors transformed their neighborhood's waste management.</p>
                        <a href="#" class="btn btn-link p-0">Read Full Story →</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm story-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Success Story 3">
                    <div class="card-body">
                        <h4 class="h5 mb-3">Innovation in Waste Collection</h4>
                        <p>John's story of implementing mobile technology in informal waste collection.</p>
                        <a href="#" class="btn btn-link p-0">Read Full Story →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Information Modals -->
<div class="modal fade" id="segregationModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Waste Segregation Guide</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- Detailed content about waste segregation -->
            </div>
        </div>
    </div>
</div>

<style>
/* Parallax Effect */
.hero-parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Process Flow Styling */
.process-line {
    position: absolute;
    top: 25px;
    left: 50px;
    right: 50px;
    height: 2px;
    background: #e9ecef;
    z-index: 1;
}

.process-step {
    position: relative;
    z-index: 2;
    text-align: center;
}

.step-icon {
    width: 50px;
    height: 50px;
    background: #fff;
    border: 2px solid #0d6efd;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: bold;
    color: #0d6efd;
}

.process-step.active .step-icon {
    background: #0d6efd;
    color: #fff;
}

/* Calendar Icon Styling */
.calendar-icon {
    width: 60px;
    height: 60px;
    background: #f8f9fa;
    border-radius: 8px;
    text-align: center;
    padding: 8px;
}

.calendar-icon .date {
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1;
    color: #0d6efd;
}

.calendar-icon .month {
    font-size: 0.875rem;
    color: #6c757d;
}

/* Card Hover Effects */
.program-card, .story-card {
    transition: transform 0.3s ease;
}

.program-card:hover, .story-card:hover {
    transform: translateY(-5px);
}

/* Animation Classes */
.animate-fade-up {
    animation: fadeUp 0.5s ease-out;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Process Flow Animation
    const steps = document.querySelectorAll('.process-step');
    let currentStep = 0;

    function activateNextStep() {
        steps[currentStep].classList.remove('active');
        currentStep = (currentStep + 1) % steps.length;
        steps[currentStep].classList.add('active');
    }

    setInterval(activateNextStep, 2000);

    // Scroll Animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
            }
        });
    });

    document.querySelectorAll('.card').forEach(card => {
        observer.observe(card);
    });

    // Smooth Scroll for Navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
</script>
@endsection