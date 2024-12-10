@extends('frontend.layouts.masterlayout')

@section('title', 'Yoga - StriveX')
@push('style')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('main-content')

<!-- Full-Screen Video with Text Overlay and Hover Effect -->
<section class="video-section">
    <video autoplay muted loop class="fullscreen-video">
        <source src="{{asset('frontend/videos/services/yoga-video.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="overlay-text">
        <h2>YOGA CLASSES</h2>
    </div>
</section>

<!-- Trainer Info -->
<section class="trainer-info">
    <div class="trainer-text">
        <h3>Meet Your Trainer: Reba Smith</h3>
        <p>Reba Smith is a certified Yoga instructor with over 10 years of experience, specializing in mindfulness,
            strength, and flexibility training. She brings a fresh approach to each class, ensuring every
            participant gains from her deep knowledge and guidance. Reba's sessions help enhance your physical and
            mental well-being, making yoga an essential part of your daily routine. Ready to start your journey?
            <a href="{{ route('contact')}}">Contact Now!</a>
        </p>
    </div>
    <div class="trainer-image">
        <img id = "trainerImage" src="{{asset('frontend/images/service images/yoga/RebaSmith.jpg')}}" alt="Trainer Reba Smith">
    </div>
</section>

<!-- yoga Description Section -->
<section class="yoga-classes-section ">
    <h3>Why Choose Our Yoga Classes?</h3>
    <p>At PT Co., we provide a welcoming environment for individuals of all fitness levels. Our yoga sessions are
        designed to promote mindfulness, improve flexibility, and enhance overall strength. <br><br>
        We believe in making yoga accessible to everyone, including individuals with disabilities. Our special Hero
        Discount is a way to honor and support those facing challenges. You can avail a 25% discount on all yoga
        classes if you live with a disability, because we know you're a superhero in your own right!</p>
</section>


<section class="care-pricing-section">
    <div class="action-buttons">
        <button id="toggle-details">Show Pricing Details</button>

    </div>
    <div class="pricing-table" style="display: none;">
        <h2>Our Pricing</h2>
        <table>
            <tr>
                <th>Package</th>
                <th>Original Price</th>
                <th>Super Hero Discount</th>
            </tr>
            <tr>
                <td>One-Time Class</td>
                <td>$15</td>
                <td>
                    <span class="strike">$15</span>
                    <span class="discount">$11.25</span>
                </td>
            </tr>
            <tr>
                <td>Monthly Membership</td>
                <td>$50</td>
                <td>
                    <span class="strike">$50</span>
                    <span class="discount">$37.5</span>
                </td>
            </tr>
        </table>
    </div>
</section>

@endsection
@push('scripts')
    <script src="{{ asset('frontend/js/PricingDetails.js') }}"></script>
    <script src="{{ asset('frontend/js/rollover.js') }}"></script>
@endpush
