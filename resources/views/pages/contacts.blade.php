{{-- @extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <form class="mt-4" action="/contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection --}}

<!-- to be changed -->

<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <p>We're here to help you with any questions or information regarding the Green and Circular Economy Information Portal in Tanzania. Reach out to us using the information below:</p>
            <div class="contact-info mt-4">
                <h5>Address:</h5>
                <p>123 Green Lane, Dar es Salaam, Tanzania</p>
                <h5>Email:</h5>
                <p><a href="mailto:info@greenportal.co.tz">info@greenportal.co.tz</a></p>
                <h5>Phone:</h5>
                <p><a href="tel:+255123456789">+255 123 456 789</a></p>
                <h5>Social Media:</h5>
                <ul class="list-unstyled">
                    <li><a href="https://facebook.com/greenportal" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/greenportal" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://instagram.com/greenportal" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <h2>Send Us a Message</h2>
            <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                </div>
                {{-- <div class="form-group mt-3">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter the subject" required>
                </div> --}}
                <div class="form-group mt-3">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Send Message</button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for form submission feedback -->
<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Your message has been sent! We will get back to you soon.');
        this.submit(); // Proceed with the form submission
    });
</script>
@endsection
