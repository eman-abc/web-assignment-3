 <!-- Footer -->
 <footer class="footer-container">
    <div class="newsletter">
        <h3>Join our Fitness Newsletter</h3>
        <form id="newsletter-form" class="newsletter-form" action="#" method="post"
            onsubmit="return validateNewsletterForm(event)">
            <input type="email" id="email" placeholder="Enter your email" aria-label="Newsletter Signup" required>
            <span id="email-error" class="error-message"></span>
            <button type="submit">Subscribe</button>
        </form>
    </div>
    <hr>
    <div class="footer-content">
        <div class="footer-section">
            <p>Services</p>
            <ul>
                <li><a href="#">Personal Training</a></li>
                <li><a href="#">Nutrition Plans</a></li>
                <li><a href="#">Online Coaching</a></li>
                <li><a href="#">Fitness Assessments</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <p>About</p>
            <ul>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">FAQs</a></li>
            </ul>
        </div>
        <div class="footer-section social-media">
            <p>Follow Us</p>
            <div class="social-icons">
                <a href="#"><img src="{{asset('frontend/images/home/icons8-facebook.svg')}}" alt="Facebook"></a>
                <a href="#"><img src="{{asset('frontend/images/home/icons8-instagram.svg')}}" alt="Instagram"></a>
                <a href="#"><img src="{{asset('frontend/images/home/icons8-whatsapp.svg')}}" alt="YouTube"></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer-bottom">
        <span class="branding">PERSONAL TRAINING</span>
        <span>STRIVEX</span>
    </div>
</footer>
