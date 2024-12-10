@extends('frontend.layouts.masterlayout')

@section('title', 'Sports-training - StriveX')
@push('style')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('main-content')


<!-- Full-Screen Video Section -->
<div class="video-section">
    <video class="fullscreen-video" autoplay muted loop>
        <source src="{{asset('frontend/videos/services/sports-training.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="overlay-text">
        <h2>Sports Training</h2>
    </div>
</div>


<div class="sports-variants-section">
    <div id="sportsSection">
        <!-- Move the button and form outside the sports-container -->
        <button id="toggleSportsFormButton">Add a New Service</button>

        <form id="sportsForm" style="display: none;">
            <label for="sportsName">Service Name:</label>
            <input type="text" id="sportsName" placeholder="Enter service name" required>

            <label for="sportsDescription">Service Description:</label>
            <textarea id="sportsDescription" placeholder="Enter service description" required></textarea>

            <label for="sportsImage">Upload Image:</label>
            <input type="file" id="sportsImage" accept="image/*" required>

            <button type="submit">Add Service</button>
        </form>

        <button id="removeSports">Remove Last Service</button>
    </div>

    <!-- Sports container only holds the added services -->
    <div class="sports-container">
        <!-- Initially pre-defined services go here -->
        <div class="sports-variant">
            <img id="cyclingImage" src="{{asset('frontend/images/service images/sports/cycling.jpg')}}" alt="Cycling Sessions" class="sports-image">
            <h3>Cycling</h3>
            <p>Take your cycling skills to the next level with our high-intensity cycling training programs.</p>
        </div>

        <div class="sports-variant">
            <img id="runningImage" src="{{asset('frontend/images/service images/sports/running.jpg')}}" alt="Running Sessions" class="sports-image">
            <h3>Running</h3>
            <p>Our running programs focus on stamina, endurance, and overall fitness improvement.</p>
        </div>

        <div class="sports-variant">
            <img id="triathlonImage" src="{{asset('frontend/images/service images/sports/triathlon.jpg')}}" alt="Triathlon Sessions" class="sports-image">
            <h3>Triathlon</h3>
            <p>Challenge yourself with our specialized triathlon training that covers cycling, running, and swimming.</p>
        </div>

        <div class="sports-variant">
            <img id="volleyballImage" src="{{asset('frontend/images/service images/sports/volleyball.jpg')}}" alt="Volleyball Sessions" class="sports-image">
            <h3>Volleyball</h3>
            <p>Build teamwork and agility in our competitive volleyball training sessions.</p>
        </div>
    </div>
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
            <thead>
                <tr>
                    <th>Plan</th>
                    <th>Weekly</th>
                    <th>Monthly</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cycling</td>
                    <td>$200</td>
                    <td>$700</td>
                </tr>
                <tr>
                    <td>Running</td>
                    <td>$180</td>
                    <td>$650</td>
                </tr>
                <tr>
                    <td>Triathlon</td>
                    <td>$250</td>
                    <td>$900</td>
                </tr>
                <tr>
                    <td>Volleyball</td>
                    <td>$150</td>
                    <td>$550</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
@push('scripts')
    <script src="{{ asset('frontend/js/PricingDetails.js') }}"></script>
    <script src="{{ asset('frontend/js/AddSport.js') }}"></script>
    <script src="{{ asset('frontend/js/rollover.js') }}"></script>
@endpush
