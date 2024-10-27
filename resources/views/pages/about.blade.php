{{-- @extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="container">
        <h2 class="text-center">About Us</h2>
        <p class="mt-4">This portal is a collaborative project by Enabel, SASA Program, and other stakeholders to promote sustainable waste management practices in Tanzania.</p>
    </div>
@endsection --}}


{{-- @extends('layouts.app')

@section('content')
<style>
    .about-header {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                    url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" width="1920" height="600" viewBox="0 0 1920 600"><rect width="1920" height="600" fill="#2C5F2D"/></svg>');
        height: 60vh;
        background-size: cover;
        background-position: center;
        color: white;
        position: relative;
    }
    
    .animate-fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease-out;
    }
    
    .animate-fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .timeline-item {
        padding: 20px;
        border-left: 3px solid #2C5F2D;
        position: relative;
        margin-bottom: 30px;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 20px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #2C5F2D;
    }
    
    .stats-box {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease;
    }
    
    .stats-box:hover {
        transform: translateY(-10px);
    }
</style>

<div class="about-header d-flex align-items-center justify-content-center">
    <div class="container text-center">
        <h1 class="display-4 mb-4">About Enabel Tanzania</h1>
        <p class="lead">Pioneering Circular Economy Solutions in East Africa</p>
    </div>
</div>

<div class="container py-5">
    <!-- Mission and Vision -->
    <div class="row mb-5 animate-fade-in">
        <div class="col-md-6">
            <h2 class="mb-4">Our Mission</h2>
            <p>Enabel Tanzania is committed to implementing Belgium's governmental cooperation in Tanzania, focusing on sustainable development through circular economy initiatives. We work to create lasting positive impact in waste management, renewable energy, and sustainable agriculture.</p>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Our Vision</h2>
            <p>To establish Tanzania as a leader in circular economy practices in East Africa, creating sustainable jobs while preserving natural resources for future generations.</p>
        </div>
    </div>

    <!-- Key Statistics -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Impact in Numbers</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-box">
                <h3 class="display-4 text-success">15+</h3>
                <p>Years in Tanzania</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-box">
                <h3 class="display-4 text-success">50+</h3>
                <p>Projects Completed</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-box">
                <h3 class="display-4 text-success">100k+</h3>
                <p>Lives Impacted</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-box">
                <h3 class="display-4 text-success">€25M+</h3>
                <p>Invested in Projects</p>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="row mb-5 animate-fade-in">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Journey in Circular Economy</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>2018</h4>
                    <p>Launched first circular economy initiative in Dar es Salaam</p>
                </div>
                <div class="timeline-item">
                    <h4>2020</h4>
                    <p>Established partnership with local waste management authorities</p>
                </div>
                <div class="timeline-item">
                    <h4>2022</h4>
                    <p>Implemented renewable energy projects in rural Tanzania</p>
                </div>
                <div class="timeline-item">
                    <h4>2024</h4>
                    <p>Expanded circular economy programs to Zanzibar</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Current Focus Areas -->
    <div class="row animate-fade-in">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Focus Areas</h2>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">Waste Management</h4>
                    <p class="card-text">Implementing sustainable waste collection and recycling systems in urban areas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">Renewable Energy</h4>
                    <p class="card-text">Promoting solar and biomass energy solutions in rural communities</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">Sustainable Agriculture</h4>
                    <p class="card-text">Supporting circular farming practices and organic waste management</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation for fade-in elements
    const observerOptions = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-fade-in').forEach((element) => {
        observer.observe(element);
    });

    // Counter animation for statistics
    const countElements = document.querySelectorAll('.stats-box .display-4');
    
    countElements.forEach(element => {
        const target = parseInt(element.textContent);
        let current = 0;
        const increment = target / 50;
        const duration = 2000;
        const step = duration / 50;

        const counter = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.textContent.includes('€') ? '€' : '+');
                clearInterval(counter);
            } else {
                element.textContent = Math.floor(current) + (element.textContent.includes('€') ? '€' : '+');
            }
        }, step);
    });
});
</script>
@endpush

@endsection --}}


@extends('layouts.app')

@section('content')
<!-- Hero Section -->
{{-- <section class="hero position-relative overflow-hidden">
    <div class="overlay position-absolute w-100 h-100 bg-dark opacity-50"></div>
    <img src="/api/placeholder/1920/800" class="w-100 object-fit-cover" alt="Tanzanian landscape" style="height: 600px;">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">Enabel in Tanzania</h1>
        <p class="lead mb-0 animate__animated animate__fadeInUp">Building Sustainable Future Through Circular Economy</p>
    </div>
</section> --}}

<!-- History Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center text-center">
            <h2 class="display-4 mb-4">Our Journey in Tanzania</h2>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="lead mb-0 animate__animated animate__fadeInUp">Building Sustainable Future Through Circular Economy</p>
                <img src="{{ asset('images/enabel_tz.png') }}" class="img-fluid rounded shadow" alt="Historical photo">
            </div>
            <div class="col-lg-6">
                <p class="lead text-muted">Since 1994, Enabel has been working hand in hand with Tanzania to promote sustainable development and circular economy initiatives.</p>
                <div class="timeline mt-4">
                    <div class="event">
                        <h5>1994</h5>
                        <p>Establishment of first operations in Tanzania</p>
                    </div>
                    <div class="event">
                        <h5>2005</h5>
                        <p>Launch of first sustainable agriculture program</p>
                    </div>
                    <div class="event">
                        <h5>2015</h5>
                        <p>Implementation of circular economy initiatives</p>
                    </div>
                    <div class="event">
                        <h5>2020</h5>
                        <p>Expansion of renewable energy projects</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Numbers -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="counter" data-target="500000">0</div>
                <p>Lives Impacted</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="counter" data-target="150">0</div>
                <p>Projects Completed</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="counter" data-target="25">0</div>
                <p>Districts Covered</p>
            </div>
            <div class="col-md-3">
                <div class="counter" data-target="1000">0</div>
                <p>Local Partners</p>
            </div>
        </div>
    </div>
</section>

<!-- Circular Economy Focus -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Circular Economy Initiatives</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Waste Management">
                    <div class="card-body">
                        <h5 class="card-title">Waste Management</h5>
                        <p class="card-text">Implementing innovative waste reduction and recycling programs across Tanzania.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Renewable Energy">
                    <div class="card-body">
                        <h5 class="card-title">Renewable Energy</h5>
                        <p class="card-text">Promoting solar and wind power solutions for sustainable energy access.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="/api/placeholder/400/300" class="card-img-top" alt="Sustainable Agriculture">
                    <div class="card-body">
                        <h5 class="card-title">Sustainable Agriculture</h5>
                        <p class="card-text">Supporting farmers in adopting eco-friendly farming practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Key Achievements</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="achievement-card p-4 bg-white rounded shadow-sm">
                    <h4 class="text-primary">Environmental Impact</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">✓ Reduced CO2 emissions by 50,000 tons annually</li>
                        <li class="mb-2">✓ Implemented 20 community recycling centers</li>
                        <li class="mb-2">✓ Planted 100,000 trees across Tanzania</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="achievement-card p-4 bg-white rounded shadow-sm">
                    <h4 class="text-primary">Social Impact</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">✓ Created 5,000 green jobs</li>
                        <li class="mb-2">✓ Trained 10,000 farmers in sustainable practices</li>
                        <li class="mb-2">✓ Improved access to clean water for 200,000 people</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.timeline .event {
    position: relative;
    padding-left: 30px;
    margin-bottom: 20px;
}

.timeline .event:before {
    content: "";
    position: absolute;
    left: 0;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #0d6efd;
}

.timeline .event:after {
    content: "";
    position: absolute;
    left: 5px;
    top: 20px;
    width: 2px;
    height: calc(100% - 20px);
    background: #dee2e6;
}

.timeline .event:last-child:after {
    display: none;
}

.counter {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.hover-card {
    transition: transform 0.3s ease;
}

.hover-card:hover {
    transform: translateY(-5px);
}

.achievement-card {
    transition: transform 0.3s ease;
}

.achievement-card:hover {
    transform: translateY(-5px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute('data-target');
            const data = +counter.innerText;
            const time = value / speed;

            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
            } else {
                counter.innerText = value;
            }
        }
        animate();
    });

    // Add animate.css classes for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', entry.target.dataset.animation);
            }
        });
    });

    document.querySelectorAll('[data-animation]').forEach((element) => {
        observer.observe(element);
    });
});
</script>
@endsection