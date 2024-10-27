{{-- @extends('layouts.app')

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
@endsection --}}



@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<section class="hero position-relative overflow-hidden">
    {{-- <div class="parallax-banner" style="height: 400px;">
        <img src="{{ asset('images/circular.png')}}" class="w-100 h-100 object-fit-cover" alt="Reports Banner">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-green opacity-60"></div>
        <div class="container position-relative h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 text-white fw-bold mb-3 animate__animated animate__fadeInDown">
                        Reports & Presentations
                    </h1>
                    <p class="lead text-white mb-4 animate__animated animate__fadeInUp">
                        Discover our impact through comprehensive reports, success stories, and visual documentation
                    </p>
                    <div class="quick-stats d-flex gap-4 text-white">
                        <div class="stat animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                            <h3 class="h2 mb-0">150+</h3>
                            <p class="mb-0">Reports</p>
                        </div>
                        <div class="stat animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                            <h3 class="h2 mb-0">50+</h3>
                            <p class="mb-0">Success Stories</p>
                        </div>
                        <div class="stat animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                            <h3 class="h2 mb-0">200+</h3>
                            <p class="mb-0">Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Quick Navigation -->
<section class="bg-light py-3 sticky-top shadow-sm">
    <div class="container">
        <div class="nav-scroll">
            <ul class="nav nav-pills gap-3 flex-nowrap">
                <li class="nav-item">
                    <a class="nav-link active" href="#waste-management">Waste Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#circular-economy">Circular Economy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#success-stories">Success Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events-gallery">Events & Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Solid Waste Management Section -->
<section id="waste-management" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Solid Waste Management Reports</h2>
        
        <div class="row g-4">
            <!-- Featured Report Card -->
            <div class="col-lg-8">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{ asset('images/circular.png') }}" class="img-fluid h-100 object-fit-cover" alt="Featured Report">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <span class="badge bg-primary mb-2">Featured Report</span>
                                <h3 class="h4">Annual Waste Management Report 2024</h3>
                                <p class="text-muted mb-4">Comprehensive analysis of waste management practices, challenges, and achievements across Tanzania.</p>
                                <div class="report-meta mb-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-calendar-event me-2"></i>
                                        <span>Published: March 15, 2024</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-file-earmark-text me-2"></i>
                                        <span>56 Pages</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-download me-2"></i>
                                        <span>2,145 Downloads</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary">Download Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                        <h3 class="h5 mb-4">Key Statistics 2024</h3>
                        <div class="stat-item mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Waste Collection Rate</span>
                                <span class="h5 mb-0">85%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="stat-item mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Recycling Rate</span>
                                <span class="h5 mb-0">60%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Landfill Diversion</span>
                                <span class="h5 mb-0">45%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Reports Grid -->
            <div class="col-12">
                <h3 class="h4 mb-4">Recent Reports</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm report-card">
                            <div class="card-body">
                                <div class="report-icon mb-3">
                                    <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                                </div>
                                <h4 class="h5 mb-3">Quarterly Performance Report Q1 2024</h4>
                                <p class="text-muted mb-4">Analysis of waste management operations and performance metrics.</p>
                                <div class="report-meta mb-4">
                                    <small class="text-muted d-block mb-2">
                                        <i class="bi bi-calendar-event me-2"></i>March 31, 2024
                                    </small>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-file-earmark-text me-2"></i>32 Pages
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Report</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm report-card">
                            <div class="card-body">
                                <div class="report-icon mb-3">
                                    <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                                </div>
                                <h4 class="h5 mb-3">Infrastructure Assessment 2024</h4>
                                <p class="text-muted mb-4">Evaluation of waste management facilities and equipment.</p>
                                <div class="report-meta mb-4">
                                    <small class="text-muted d-block mb-2">
                                        <i class="bi bi-calendar-event me-2"></i>February 15, 2024
                                    </small>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-file-earmark-text me-2"></i>45 Pages
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Report</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm report-card">
                            <div class="card-body">
                                <div class="report-icon mb-3">
                                    <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                                </div>
                                <h4 class="h5 mb-3">Environmental Impact Study 2024</h4>
                                <p class="text-muted mb-4">Assessment of waste management environmental effects.</p>
                                <div class="report-meta mb-4">
                                    <small class="text-muted d-block mb-2">
                                        <i class="bi bi-calendar-event me-2"></i>January 30, 2024
                                    </small>
                                    <small class="text-muted d-block">
                                        <i class="bi bi-file-earmark-text me-2"></i>68 Pages
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Circular Economy Section -->
<section id="circular-economy" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Circular Economy Reports</h2>
        
        <!-- Interactive Circular Economy Diagram -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="circular-diagram text-center mb-4">
                            <img src="/api/placeholder/800/400" class="img-fluid" alt="Circular Economy Diagram">
                        </div>
                        <h3 class="h5 text-center">Our Circular Economy Model</h3>
                        <p class="text-center text-muted">Click on different elements to explore our circular economy initiatives</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Circular Economy Reports Grid -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="circular-icon mb-3">
                            <i class="bi bi-recycle fs-1 text-success"></i>
                        </div>
                        <h4 class="h5 mb-3">Resource Recovery Report</h4>
                        <p class="text-muted mb-4">Analysis of material recovery and recycling initiatives.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="circular-icon mb-3">
                            <i class="bi bi-gear fs-1 text-primary"></i>
                        </div>
                        <h4 class="h5 mb-3">Process Optimization Study</h4>
                        <p class="text-muted mb-4">Efficiency improvements in circular processes.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="circular-icon mb-3">
                            <i class="bi bi-graph-up fs-1 text-warning"></i>
                        </div>
                        <h4 class="h5 mb-3">Economic Impact Analysis</h4>
                        <p class="text-muted mb-4">Financial benefits of circular economy implementation.</p>
                        <a href="#" class="btn btn-outline-warning btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="circular-icon mb-3">
                            <i class="bi bi-people fs-1 text-info"></i>
                        </div>
                        <h4 class="h5 mb-3">Community Engagement</h4>
                        <p class="text-muted mb-4">Social impact of circular economy initiatives.</p>
                        <a href="#" class="btn btn-outline-info btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section id="success-stories" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Success Stories</h2>

        <!-- Featured Success Story -->
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="/api/placeholder/800/500" class="card-img-top" alt="Featured Success Story">
                    <div class="card-body">
                        <h3 class="h4">Empowering Communities Through Waste-to-Energy Initiatives</h3>
                        <p class="text-muted mb-4">Discover how local communities have been empowered by converting waste into energy, leading to sustainable development and economic growth.</p>
                        <a href="#" class="btn btn-primary">Read Full Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                    <h3 class="h5 mb-4">Success by the Numbers</h3>
                    <div class="d-flex align-items-center mb-4">
                        <span class="display-6 text-primary me-3">95%</span>
                        <p class="mb-0">Community satisfaction rate with waste-to-energy projects</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <span class="display-6 text-success me-3">10,000+</span>
                        <p class="mb-0">Tons of waste diverted from landfills annually</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="display-6 text-warning me-3">250+</span>
                        <p class="mb-0">Jobs created through circular economy initiatives</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Stories Grid -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="story-icon mb-3">
                            <i class="bi bi-award fs-1 text-warning"></i>
                        </div>
                        <h4 class="h5 mb-3">Award-Winning Plastic Recycling Program</h4>
                        <p class="text-muted mb-4">A program recognized for reducing plastic pollution by turning plastic waste into reusable materials.</p>
                        <a href="#" class="btn btn-outline-warning btn-sm">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="story-icon mb-3">
                            <i class="bi bi-tree fs-1 text-success"></i>
                        </div>
                        <h4 class="h5 mb-3">Reforestation with Compost</h4>
                        <p class="text-muted mb-4">Utilizing compost from organic waste to rejuvenate deforested areas, enhancing biodiversity.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="story-icon mb-3">
                            <i class="bi bi-lightning fs-1 text-primary"></i>
                        </div>
                        <h4 class="h5 mb-3">Solar-Powered Recycling Facilities</h4>
                        <p class="text-muted mb-4">Integrating solar energy to power recycling operations, minimizing the carbon footprint.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events and Gallery Section -->
<section id="events-gallery" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Events & Gallery</h2>

        <!-- Upcoming Events -->
        <div class="mb-5">
            <h3 class="h4 text-center mb-4">Upcoming Events</h3>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/api/placeholder/800/400" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">November 10, 2024</span>
                            <h4 class="h5">Green Circular Economy Expo</h4>
                            <p class="text-muted mb-3">An exhibition showcasing innovative solutions in waste management and sustainable practices.</p>
                            <a href="#" class="btn btn-outline-info btn-sm">Register Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/api/placeholder/800/400" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">December 5, 2024</span>
                            <h4 class="h5">Community Cleanup Drive</h4>
                            <p class="text-muted mb-3">Join us in a massive cleanup effort aimed at reducing waste and promoting recycling.</p>
                            <a href="#" class="btn btn-outline-success btn-sm">Join the Event</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/api/placeholder/800/400" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">January 15, 2025</span>
                            <h4 class="h5">Sustainable Waste Management Workshop</h4>
                            <p class="text-muted mb-3">A workshop focused on advanced techniques for waste reduction and circular economy practices.</p>
                            <a href="#" class="btn btn-outline-warning btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="gallery mt-5">
            <h3 class="h4 text-center mb-4">Photo Gallery</h3>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/api/placeholder/1200/800" class="d-block mb-3">
                        <img src="/api/placeholder/400/300" class="img-fluid rounded shadow-sm" alt="Gallery Image">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/api/placeholder/1200/800" class="d-block mb-3">
                        <img src="/api/placeholder/400/300" class="img-fluid rounded shadow-sm" alt="Gallery Image">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/api/placeholder/1200/800" class="d-block mb-3">
                        <img src="/api/placeholder/400/300" class="img-fluid rounded shadow-sm" alt="Gallery Image">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/api/placeholder/1200/800" class="d-block mb-3">
                        <img src="/api/placeholder/400/300" class="img-fluid rounded shadow-sm" alt="Gallery Image">
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">View Full Gallery</a>
            </div>
        </div>
    </div>
</section>
@endsection
