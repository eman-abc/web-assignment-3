    @extends('frontend.layouts.masterlayout')

    @section('title', 'Blog - StriveX')
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
            <source src="{{asset('frontend/videos/blogs/blog-video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="overlay-text">
            <h2>Stay up-to-date</h2>
        </div>
    </div>

    <!-- Blog Section -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="title">
                <h2>Latest Blogs</h2>
            </div>
            <div class="style-buttons">
                <button id="changeStyleBtn">Change Text Style</button>
                <button id="resetStyleBtn">Reset Text Style</button>
            </div>
        <div class="blog-content">
            <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">

                    <img id= "blogImage1" src="{{asset('frontend/images/blogimage1.jpeg')}}" alt="the mental health">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
                <div class="blog-text">
                    <span class="blog-card-meta"> 28 february,2022 By Lawrence Robinson</span>
                    <h2 class="blog-card-title">The Mental Health Benefits of Exercise</h2>
                    <a href="{{ route('mentalhealth')}}" class="blog-card-btn">Read More</a>
                </div>
            </div>
            <!-- end item -->
              <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">
                    <img id= "blogImage2" src="{{asset('frontend/images/blogimage2.jpg')}}" alt="teens">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
                <div class="blog-text">
                    <span class="blog-card-meta"> 07 january,2023 By Mary L. Gavin</span>
                    <h2 class="blog-card-title">Why Exercise Is Wise for teens</h2>
                    <a href="{{ route('exerciseteens')}}" class="blog-card-btn">Read More</a>
                </div>
            </div>
            <!-- end item -->
              <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">
                    <img id= "blogImage3" src="{{asset('frontend/images/blogimage3.jpg')}}" alt="physical activity">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
                <div class="blog-text">
                    <span class="blog-card-meta"> 26 august,2023 By MayoClinic staff</span>
                    <h2 class="blog-card-title">Exercise: 7 benefits of regular physical activity</h2>
                    <a href="{{ route('physicalactivity')}}" class="blog-card-btn">Read More</a>
                </div>
            </div>
            <!-- end item -->
              <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">
                    <img id= "blogImage4" src="{{asset('frontend/images/blogimage4.jpg')}}" alt="stress manage">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
                <div class="blog-text">
                    <span class="blog-card-meta"> 03 august,2022 By MayoClinic staff</span>
                    <h2 class="blog-card-title">Get moving to manage stress</h2>
                    <a href="{{ route('stressmanage')}}" class="blog-card-btn">Read More</a>
                </div>
            </div>
            <!-- end item -->
              <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">
                    <img id= "blogImage5" src="{{asset('frontend/images/blogimage5.jpg')}}" alt="regular exercise">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
                <div class="blog-text">
                    <span class="blog-card-meta"> 04 january,2024 By Madeline Holcombe, CNN</span>
                    <h2 class="blog-card-title">Getting regular exercise in 2024 </h2>
                    <a href="{{ route('regularexercise')}}"  class="blog-card-btn">Read More</a>
                </div>
            </div>
            <!-- end item -->
              <!-- start item -->
            <div  class="blog-item">
                <div class="blog-image">

                    <img  id="blogImage6" src="{{asset('frontend/images/blogimage6.webp')}}" alt="top nutrition">
                    <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                </div>
        <div class="blog-text">
                    <span class="blog-card-meta"> 19 february,2024 By Sarah Davis</span>
                    <h2 class="blog-card-title">Top Nutrition And Fitness Trends In 2024</h2>
                    <a href="{{ route('topnutrition')}}"  class="blog-card-btn">Read More</a>
                </div>
            <!-- end item -->
        </div>
        </div>
    </section>
    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogjsscript.js') }}"></script>
        <script src="{{ asset('frontend/js/rollover.js') }}"></script>
    @endpush



