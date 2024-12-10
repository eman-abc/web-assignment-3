@extends('frontend.layouts.masterlayout')

    @section('title', 'Blog - StriveX')
    @push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/blogstyling.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/eachblog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    @section('main-content')
         <!-- Blog Content -->
    <div class="content-container">
        <h1>Top Nutrition and Fitness Trends in 2024</h1>
        <p><strong>Date:</strong> November 15, 2024</p>
        <p><strong>Author:</strong> Forbes Health</p>
        <img src="{{asset('frontend/images/blogimage6.webp')}}" alt="Top Nutrition and Fitness Trends" style="width:100%; border-radius: 10px; margin: 20px 0;">
        <p>Explore the emerging trends in fitness and nutrition that are shaping healthier lifestyles in 2024. From innovative meal plans to holistic wellness strategies, the future of health is bright and inspiring.</p>
        <p>Learn more on <a href="https://www.forbes.com/health/wellness/top-nutrition-and-fitness-trends-2024/" target="_blank">Forbes</a>.</p>
        <a href="{{ route('blog')}}" style="display: inline-block; margin-top: 20px;">&larr; Back to Blog</a>
    </div>

    <!-- Comment Section -->
    <div class="content-container comment-section">
        <h2>Comments</h2>
        <form class="comment-form">
            <input type="text" placeholder="Your Name" required>
            <textarea rows="5" placeholder="Your Comment" required></textarea>
            <button type="submit">Post Comment</button>
        </form>
        <ul class="comments-list">
            <li>
                <h4>Emma</h4>
                <p>The insights shared here are really helpful. Thanks for the great content!</p>
            </li>
            <li>
                <h4>Liam</h4>
                <p>Looking forward to trying out some of these trends. Keep up the good work!</p>
            </li>
        </ul>
     </div>
     @endsection
     @push('scripts')
         <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
     @endpush

