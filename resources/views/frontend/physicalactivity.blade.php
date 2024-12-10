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
        <h1>The Importance of Physical Activity</h1>
        <p><strong>Date:</strong> March 1, 2024</p>
        <p><strong>Author:</strong> Mayo Clinic Staff</p>
        <img src="{{asset('frontend/images/blogimage3.jpg')}}" alt="Physical Activity" style="width:100%; border-radius: 10px; margin: 20px 0;">
        <p>Regular physical activity is essential for maintaining overall health and wellness. Engaging in exercises like walking, jogging, swimming, or yoga not only improves your physical health but also enhances mental well-being.</p>
        <p>Physical activity reduces the risk of chronic diseases, helps manage weight, and improves sleep. It's recommended that adults aim for at least 150 minutes of moderate aerobic activity each week.</p>
        <p><strong>Tip:</strong> Start small by incorporating short walks into your daily routine, and gradually increase the intensity and duration.</p>
        <p>Check out our <a href="{{ route('sports-training')}}">services</a> to explore personalized fitness programs tailored to your goals.</p>
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
                <h4>Emily White</h4>
                <p>This was so informative! I never realized how impactful short exercises can be.</p>
            </li>
            <li>
                <h4>Mike Green</h4>
                <p>Great read! I’ve started incorporating 15-minute stretches, and it’s made a huge difference.</p>
            </li>
        </ul>
    </div>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
    @endpush

