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
        <h1>Exercise for Teens</h1>
        <p><strong>Published on:</strong> 16 November, 2024</p>
        <img src="{{asset('frontend/images/blogimage2.jpg')}}" alt="Teens Exercising">
        <p>
            Regular exercise is essential for teens to maintain physical and mental health.
            It helps strengthen bones, muscles, and the cardiovascular system while reducing the risk of stress, anxiety, and depression.
        </p>
        <p>
            Teens should aim for at least 60 minutes of moderate to vigorous physical activity daily. Activities like running, swimming,
            cycling, or team sports can be great options for staying active.
        </p>
        <p>
            <strong>Quick Tip:</strong> Incorporate both aerobic exercises and strength training into your weekly routine.
        </p>
        <p><a href="https://kidshealth.org/en/teens/exercise-wise.html" target="_blank">Learn more</a></p>
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
                <h4>Anna</h4>
                <p>Great tips for staying active as a teen. Thanks for sharing!</p>
            </li>
        </ul>
    </div>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
    @endpush

