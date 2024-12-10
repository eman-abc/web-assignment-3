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

    <div class="content-container">
        <h1>Stress Management Through Exercise</h1>
        <p><strong>Date:</strong> March 16, 2024</p>
        <p><strong>Author:</strong> Mayo Clinic Staff</p>
        <img src="{{asset('frontend/images/blogimage4.jpg')}}" alt="Stress Management Through Exercise" style="width:100%; border-radius: 10px; margin: 20px 0;">
        <p>Exercise is a powerful tool to combat stress and improve your overall well-being. Physical activity can boost endorphins, reduce stress hormones like cortisol, and help you feel more relaxed.</p>
        <p>Regular exercise not only helps reduce tension in your body but also improves mood and enhances sleep, creating a positive cycle of stress relief. Activities like walking, yoga, or swimming are particularly effective.</p>
        <p><strong>Quick Tip:</strong> Even a 10-minute brisk walk can make a significant difference in reducing stress.</p>
        <p>Visit our <a href="{{ route('sports-training')}}">services page</a> to explore fitness plans designed to help you manage stress and live a healthier life.</p>
        <a href="{{ route('blog')}}" style="display: inline-block; margin-top: 20px;">&larr; Back to Blog</a>
    </div>

    <div class="content-container comment-section">
        <h2>Comments</h2>
        <form class="comment-form">
            <input type="text" placeholder="Your Name" required>
            <textarea rows="5" placeholder="Your Comment" required></textarea>
            <button type="submit">Post Comment</button>
        </form>
        <ul class="comments-list">
            <li>
                <h4>Anna Brown</h4>
                <p>Incorporating exercise into my routine has been life-changing. Thanks for the tips!</p>
            </li>
            <li>
                <h4>James Lee</h4>
                <p>Great article! I never thought a short walk could help so much with stress management.</p>
            </li>
        </ul>
    </div>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
    @endpush

