    @extends('frontend.layouts.masterlayout')

    @section('title', 'Home - StriveX')
    @push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    @endpush

    @section('main-content')
    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop class="hero-video embed-responsive-item">
            <source src="{{ asset('frontend/videos/services/home/hero_section.mp4') }}"  type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <!-- !-- Heading Section -->
            <div class="transition-heading">
                <h1 class="headline first-part">FITNESS THAT STICKS</h1>
                <h1 class="headline second-part">TAILORED WORKOUTS</h1>
            </div>
            <!-- New Flex Container -->
            <div class="hero-text-content">
                <p>Achieve your fitness goals with personalized training and expert guidance. Join our community
                    today!
                </p>
                <button class="cta-button">Start Your Journey Today</button>
            </div>
        </div>
    </section>





    <!-- Services Section -->
    <section class="services position-relative">
        <div class="position-relative header-container mb-0">
            <h2>Our Services</h2>
            <!-- Action Buttons for Text Style Change -->
            <div class="button-container">
                <div class="d-flex flex-column align-items-center">
                    <button id="change-text-style" class="btn btn-primary btn-sm mb-1"
                        onclick="changeTextStyle()">Change Text Style</button>
                    <button id="reset-text-style" class="btn btn-secondary btn-sm mb-0" onclick="resetTextStyle()">Reset
                        Text
                        Style</button>
                </div>
            </div>
        </div>

        <div class="service-cards mt-0">
            <div class="service-card">
                <img id="yoga-image" src="{{ asset('frontend/images/home/yoga_services.jpg')}}" alt="Yoga Services" class="service-image"
                    onmouseover="changeImage(this, '{{ asset('frontend/images/home/yoga_services_hover.jpg') }}')"
                    onmouseout="resetImage(this, '{{ asset('frontend/images/home/yoga_services.jpg') }}')">
                <h3>Yoga</h3>
                <p class="service-description">Find balance and flexibility with our expert-led yoga classes, designed
                    for all skill levels.</p>
                <a href="{{ route('yoga') }}" class="explore-button">Explore</a>
            </div>
            <div class="service-card">
                <img id="bootcamp-image" src="{{asset('frontend/images/home/bootcamp-services.jpeg')}}" alt="Bootcamp Services"
                    class="service-image" onmouseover="changeImage(this, '{{asset('frontend/images/home/bootcamp-services-hover.jpg')}})'"
                    onmouseout="resetImage(this, '{{asset('frontend/images/home/bootcamp-services.jpeg')}}')">
                <h3>Bootcamp</h3>
                <p class="service-description">Challenge yourself with our intense bootcamp workouts, designed to push
                    your limits and build strength.</p>
                <a href="{{ route('bootcamp')}}" class="explore-button">Explore</a>
            </div>
            <div class="service-card">
                <img id="basketball-image" src="{{asset('frontend/images/home/Basketball.jpeg')}}" alt="Basketball Services"
                    class="service-image" onmouseover="changeImage(this, '{{asset('frontend/images/home/Basketball_hover.jpg')}}')"
                    onmouseout="resetImage(this, '{{asset('frontend/images/home/Basketball.jpeg')}}')">
                <h3>Sports Training</h3>
                <p class="service-description">Elevate your athletic performance with personalized sports training,
                    tailored to your goals.</p>
                <a href="{{ route('sports-training')}}" class="explore-button">Explore</a>
            </div>
        </div>
    </section>


    <section id="details" class="details-section container-fluid py-5 text-center">
        <h2 class="mb-4 fw-bold">What Sets Us Apart</h2>
        <p id="details-text" class="d-none fs-5 text-muted">
            At StriveX, we combine personalized training with cutting-edge techniques to deliver outstanding results.
            Our certified trainers and holistic approach ensure you achieve your goals, whether it's building strength,
            improving flexibility, or enhancing endurance. Experience the difference with us.
        </p>

        <!-- Statistics Section -->
        <div id="statistics" class="row justify-content-center d-none mt-4 text-center">
            <div class="col-md-3 mb-4">
                <h3 class="text fw-bold">500+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="text fw-bold">10+ Years</h3>
                <p>Industry Experience</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="text fw-bold">95%</h3>
                <p>Success Rate</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="text fw-bold">50+</h3>
                <p>Professional Trainers</p>
            </div>
        </div>

        <!-- Feature Icons -->
        <div id="feature-icons" class="row justify-content-center d-none mt-4 text-muted">
            <div class="col-md-3">
                <i class="bi bi-people-fill fs-1 mb-2"></i>
                <h5>Community Focus</h5>
                <p>Build lasting connections with like-minded individuals who share your fitness goals.</p>
            </div>
            <div class="col-md-3">
                <i class="bi bi-award fs-1 mb-2"></i>
                <h5>Certified Expertise</h5>
                <p>Work with certified trainers who provide expert guidance every step of the way.</p>
            </div>
            <div class="col-md-3">
                <i class="bi bi-heart-pulse fs-1 mb-2"></i>
                <h5>Holistic Approach</h5>
                <p>Achieve a balance of physical fitness and mental wellness with tailored programs.</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-3 mb-3">
                <button id="show-details" class="btn btn-primary btn-lg btn-block" onclick="showDetails()">Show
                    Details</button>
            </div>
            <div class="col-md-3 mb-3">
                <button id="hide-details" class="btn btn-secondary btn-lg btn-block" onclick="hideDetails()">Hide
                    Details</button>
            </div>
            <div class="col-md-3">
                <button id="change-bg" class="btn btn-success btn-lg btn-block" onclick="changeBackgroundColor()">Change
                    Background Color</button>
            </div>
        </div>

    </section>
    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/js/rollover.js') }}"></script>
    @endpush
