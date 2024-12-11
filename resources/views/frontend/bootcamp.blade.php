@extends('frontend.layouts.masterlayout')

@section('title', 'BootCamp - StriveX')
@push('style')

<link rel="stylesheet" href="{{ asset('frontend/css/ServiceCRUDTables.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('main-content')

<!-- Full-Screen Video Section -->
<div class="video-section">
    <video class="fullscreen-video" autoplay muted loop>
        <source src="{{asset('frontend/videos/blogs/blog-video.mp4')}}" type="video/mp4"> <!-- Add your video path -->
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="overlay-text">
        <h2>Fitness Boot Camp</h2>
    </div>
</div>

<!-- Bootcamp Variant Section with New Heading -->
<div class="bootcamp-variants-section">
    <h2>Our Bootcamp - The All-Rounded Choice</h2>

    <div id="bootcampSection">

        <button id="toggleFormButton">Add a New Service</button>

        <form id="exerciseForm" style="display: none;">
            <label for="exerciseName">Service Name:</label>
            <input type="text" id="exerciseName" placeholder="Enter service name" required>

            <label for="exerciseDescription">Service Description:</label>
            <textarea id="exerciseDescription" placeholder="Enter service description" required></textarea>

            <label for="exerciseImage">Upload Image:</label>
            <input type="file" id="exerciseImage" accept="image/*" required>

            <button type="submit">Add Service</button>
        </form>

        <button id="removeExercise">Remove Last Service</button>
    </div>


    <!-- Container for Bootcamp Variants -->
    <div class="bootcamp-container">
        <!-- Variant 1: Indoor Sessions -->
        <div class="bootcamp-variant">
            <img src="{{asset('frontend/images/service images/bootcamp/indoor-session.jpeg')}}" alt="Indoor Sessions"
                class="bootcamp-image">
            <!-- Replace with actual image path -->
            <h3>Indoor Sessions</h3>
            <p>Stay fit no matter the weather with our high-energy indoor bootcamp sessions.</p>
        </div>

        <!-- Variant 2: Outdoor Sessions -->
        <div class="bootcamp-variant">
            <img src="{{asset('frontend/images/service images/bootcamp/outdoor-session.jpg')}}" alt="Outdoor Sessions"
                class="bootcamp-image">
            <!-- Replace with actual image path -->
            <h3>Outdoor Sessions</h3>
            <p>Enjoy nature and fresh air while working out in our outdoor bootcamp sessions.</p>
        </div>

        <!-- Variant 3: Strength Training -->
        <div class="bootcamp-variant">
            <img src="{{asset('frontend/images/service images/bootcamp/strength-training.jpg')}}" alt="Strength Training"
                class="bootcamp-image">
            <!-- Replace with actual image path -->
            <h3>Strength Training</h3>
            <p>Build muscle and strength with resistance and weight-based training.</p>
        </div>
    </div>



    <div class="table-container">
        <span class="blink-text">Newly Added Bootcamp Services</span>
        <table>
            <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bootcampServices as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" style="width: 100px;">
                        @else
                        No Image
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- Pricing Section -->
<div class="care-pricing-section">
    <div class="care-content">
        <h3>We Care For You</h3>
        <p>Our Sports Training programs are designed to help you achieve your fitness goals while ensuring your
            health and safety. <span class="discount-info">*We provide a 25% discount on all services for our
                superheroes with disabilities.</span></p>
    </div>


    <div class="action-buttons">
        <button id="toggle-details">Show Pricing Details</button>
    </div>

    <div class="pricing-table">
        <h2>Pricing Table</h2>
        <table>
            <tr>
                <th>Plan</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Weekly Boot Camp</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Monthly Boot Camp</td>
                <td>$500</td>
            </tr>
            <tr>
                <td>Yearly Boot Camp</td>
                <td class="strike">$1800</td> <!-- Strikethrough for original price -->
                <td class="discount">$1500</td> <!-- Discounted price -->
            </tr>
        </table>
    </div>
</div>


<!-- Footer -->

@endsection
@push('scripts')
<script src="{{ asset('frontend/js/PricingDetails.js') }}"></script>
<script src="{{ asset('frontend/js/AddBootcampExercise.js') }}"></script>
<!-- <script src="{{ asset('frontend/js/rollover.js') }}"></script> -->
@endpush