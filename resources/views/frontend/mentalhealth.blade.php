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
        <h1>The Mental Health Benefits of Exercise</h1>
        <p><strong>Date:</strong> February 28, 2022</p>
        <p><strong>Author:</strong> Lawrence Robinson</p>
        <img src="{{asset('frontend/images/blogimage1.jpeg')}}" alt="The Mental Health Benefits of Exercise" style="width:100%; border-radius: 10px; margin: 20px 0;">
        <p>Engaging in regular physical exercise has been proven to not only improve your physical health but also offer significant mental health benefits. Exercise can help reduce anxiety, combat depression, and improve self-esteem.</p>
        <p>For women in their 30s and 40s, incorporating activities such as yoga, strength training, and aerobic exercises can enhance overall well-being and mental clarity. These exercises not only improve strength and endurance but also stimulate endorphins, the feel-good chemicals in the brain.</p>
        <p><strong>Quick Tip:</strong> Start with 30-minute sessions, 3 times a week, and gradually increase intensity.</p>
        <p>Explore our <a href="{{ route('sports-training')}}">services page</a> to find personalized fitness plans that suit your needs.</p>
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
                <h4>John Doe</h4>
                <p>This article was really insightful! Thanks for sharing.</p>
            </li>
            <li>
                <h4>Jane Smith</h4>
                <p>Exercise has helped me so much with managing stress. Great tips!</p>
            </li>
        </ul>
    </div>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
    @endpush
