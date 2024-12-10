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
        <h1>Fitness Resolutions for 2024: A Path to Wellness</h1>
        <p><strong>Date:</strong> January 4, 2024</p>
        <p><strong>Author:</strong> CNN Health Team</p>
        <img src="{{asset('frontend/images/blogimage5.jpg')}}" alt="Fitness Resolutions for 2024" style="width:100%; border-radius: 10px; margin: 20px 0;">
        <p>The new year is a perfect time to set fitness goals and work towards a healthier lifestyle. Whether you're looking to lose weight, gain strength, or improve overall well-being, setting realistic resolutions can make a world of difference.</p>
        <p>Experts suggest starting small with achievable goals like walking for 20 minutes daily or incorporating strength training twice a week. These small changes build habits that lead to long-term health benefits.</p>
        <p>Consistency and accountability are key. Partnering with a friend, joining a fitness group, or hiring a personal trainer can provide the motivation you need to stick with your goals.</p>
        <p><strong>Did You Know?</strong> Studies show that people who write down their fitness goals are 42% more likely to achieve them!</p>
        <p>At StriveX, we're here to help. Explore our <a href="{{ route('sports-training')}}">services</a> for personalized training and nutrition plans tailored to your fitness journey.</p>
        <a href="{{ route('blog')}}" style="display: inline-block; margin-top: 20px;">&larr; Back to Blog</a>
    </div>

    <div class="content-container comment-section">
        <h3>Comments</h3>
        <form class="comment-form">
            <input type="text" placeholder="Your Name" required>
            <textarea rows="5" placeholder="Your Comment" required></textarea>
            <button type="submit">Post Comment</button>
        </form>
        <ul class="comments-list">
            <li>
                <h4>Michael Green</h4>
                <p>Setting smaller goals has been a game-changer for me. Thanks for the tips!</p>
            </li>
            <li>
                <h4>Sophia Clark</h4>
                <p>I can't wait to explore the services at StriveX to help me stay consistent in 2024!</p>
            </li>
        </ul>
    </div>

    @endsection
    @push('scripts')
        <script src="{{ asset('frontend/js/blogscommentsscript.js') }}"></script>
    @endpush

