@extends('frontend.layouts.masterlayout')

    @section('title', 'Contact - StriveX')
    @push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    @section('main-content')


    <section class="contact-banner">
        <div class="banner-message">
            <h2>Let’s Have a Talk</h2>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info">
        <h3>Contact Information</h3>
        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('frontend/images/contact/location.png')}}" alt="Visit" class="icon">
                <h4>Visit</h4>
                <p>StriveX Wellington 6011,<br> New Zealand</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('frontend/images/contact/email.png')}}" alt="Email" class="icon">
                <h4>Email</h4>
                <p>chris.patterson@trainer.co.nz</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('frontend/images/contact/phone.png')}}" alt="Phone" class="icon">
                <h4>Phone</h4>
                <p>(123) 456-7890</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h3>Send us a message</h3>
        <form id="contact-form">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>

        <div id="success-message" style="display:none; color: green; font-weight: bold; margin-top: 10px;">
            Message sent successfully!
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="testimonial-container">
        <div class="testimonial testimonial-1">
            <div class="testimonial-header">
                <div class="avatar"></div>
                <div class="testimonial-info">
                    <h3>David Ian</h3>
                    <p>2024-08-10</p>
                </div>
            </div>
            <div class="star-rating">
                ★★★★★
            </div>
            <p class="testimonial-text">
                Working with Personal Trainer Co. has been a life-changing experience. Their custom fitness programs
                helped me improve my overall health and strength in just a few months. The trainers are incredibly
                supportive and always available for advice!
            </p>
        </div>

        <div class="testimonial testimonial-2">
            <div class="testimonial-header">
                <div class="avatar"></div>
                <div class="testimonial-info">
                    <h3>Rosemary</h3>
                    <p>2024-09-21</p>
                </div>
            </div>
            <div class="star-rating">
                ★★★★★
            </div>
            <p class="testimonial-text">
                I was struggling with my fitness routine, but after joining Personal Trainer Co., I saw a remarkable
                transformation. The boot camp sessions were tough but rewarding, and the personalized attention made all
                the difference. Highly recommend this place!
            </p>
        </div>
    </section>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/contact.js') }}"></script>
    @endpush
