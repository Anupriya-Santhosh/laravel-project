

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom"style="background-color:#384959;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo web.webp') }}" height="50px" width="50px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" > </span>

            </button>
            <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Explore</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('travel') ? 'active' : '' }}" href="{{ asset('travel') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ asset('about') }}">About Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('tour') ? 'active' : '' }}" href="{{ asset('tour') }}">Tours</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="{{ asset('gallery') }}">Gallery</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ asset('services') }}">Services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ asset('contact') }}">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ asset('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-dark" href="{{ asset('book') }}">Book Now</a>
    </li>
</ul>
                </div>
            </div>
        </div>
    </nav><br><br>
     <!-- header Section -->
<div class="about-us-section">
    <div class="container">
        <h1 class="header-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Contact Us</h1>
        <p class="header-description">
        Explore the wide range of services we offer to make your travel experience unforgettable.
        </p>
    </div>
    
    <!-- Extra Floating Shapes -->
    <div class="extra-shape extra-shape1"></div>
    <div class="extra-shape extra-shape2"></div>
    <div class="extra-shape extra-shape3"></div>
    <div class="extra-shape extra-shape4"></div>
</div>

<style>
/* styles.css */

/* Keyframes for floating decorative elements */
@keyframes floatAnimation {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0px);
  }
}

/* Keyframes for the gradient background animation */
@keyframes gradientBackground {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

/* About Us Section */
.about-us-section {
  background: linear-gradient(-45deg, black, skyblue, black, skyblue);
  background-size: 400% 400%;
  height:500px;
  animation: gradientBackground 15s ease infinite;
  padding: 250px 0;
  text-align: center;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  position: relative;
  overflow: hidden;
}

/* Container styling */
.about-us-section .container {
  max-width: 800px;
  margin: 0 auto;
  position: relative;
  z-index: 2; /* Ensure content stays on top */
}

/* Header Title styling */
.about-us-section .header-title {
  font-size: 2.8rem;
  font-weight: bold;
  margin-bottom: 20px;
  color: white; /* Dark blue-gray for the title */
  transition: transform 0.3s ease;
}

/* Header Description styling */
.about-us-section .header-description {
  font-size: 1.2rem;
  line-height: 1.6;
  color: #5a6e7f; /* Medium blue-gray for the description */
  transition: color 0.3s ease;
}

/* Hover effect for the content */
.about-us-section:hover .header-title {
  transform: scale(1.05); /* Slight zoom on hover */
}

.about-us-section:hover .header-description {
  color: #384959; /* Darker shade on hover */
}

/* Decorative floating shapes */
.extra-shape {
  position: absolute;
  background: rgba(255, 255, 255, 0.1); /* Subtle white tint for decoration */
  border-radius: 50%;
  animation: floatAnimation 8s ease-in-out infinite;
  z-index: 1;
}

/* Specific positioning and sizes for each shape */
.extra-shape1 {
  top: 25%;
  left: 12%;
  width: 100px;
  height: 100px;
  animation-delay: 0s;
}

.extra-shape2 {
  bottom: 25%;
  right: 10%;
  width: 120px;
  height: 120px;
  animation-delay: 3s;
}

.extra-shape3 {
  top: 40%;
  left: 70%;
  width: 80px;
  height: 80px;
  animation-delay: 1.5s;
}
.extra-shape4 {
  top: 20%;
  left: 10%;
  width: 80px;
  height: 80px;
  animation-delay: 1.5s;
}
</style>

      <!-- Contact Section -->
      <section class="contact py-5">
        <div class="container">
            <h1 class="text-center mb-4 text-white">Contact Us</h1>
            <div class="row">
                <div class="col-md-6">
                    <h4>Get in Touch</h4>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Our Office</h4>
                    <p>123 Travel Street, Cityville, Country</p>
                    <p>Phone: <a href="tel:+919406995043" class="text-dark">+91 9406995043</a></p>
                    <p>Email: <a href="mailto:contact@travelwebsite.com" class="text-dark">contact@travelwebsite.com</a></p>
                    <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>


   <!-- FAQ Section -->
<section class="faq-section py-5">
  <div class="container">
    <h2 class="faq-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Frequently Asked Questions</h2>
    <p class="faq-description">Got questions? We’ve got answers! Check out our FAQs below to find what you need.</p>

    <div class="faq-container">
      <!-- FAQ 1 -->
      <div class="faq-item">
        <div class="faq-question">
          <h3>How can I book a trip?</h3>
          <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div class="faq-answer">
          <p>You can book a trip directly on our website by selecting your destination and choosing a travel package that suits you. For more personalized help, contact our team.</p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item">
        <div class="faq-question">
          <h3>Do you offer customized travel packages?</h3>
          <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div class="faq-answer">
          <p>Yes, we offer tailor-made travel packages that cater to your specific interests and preferences. Contact us for more details!</p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item">
        <div class="faq-question">
          <h3>What is the cancellation policy?</h3>
          <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div class="faq-answer">
          <p>Our cancellation policy varies by destination and package. You can find the detailed cancellation terms in the booking confirmation email or contact us for more information.</p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item">
        <div class="faq-question">
          <h3>Can I change my booking after it’s confirmed?</h3>
          <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div class="faq-answer">
          <p>Yes, we allow changes to bookings depending on availability. Please get in touch with our support team as soon as possible to make the necessary changes.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer Section -->
<footer class="footer text-white py-4"style="background-color:#384959;">
    <div class="container">
        <div class="row">
            <!-- About Us -->
            <div class="col-md-3">
                <h5>About Us</h5>
                <p>We are a leading travel agency dedicated to providing exceptional travel experiences. From luxury getaways to budget-friendly trips, we ensure every journey is memorable.</p>
            </div>
            <!-- Quick Links -->
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="travel_home.html" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">About Us</a></li>
                    <li><a href="#" class="text-white">Tours</a></li>
                    <li><a href="#" class="text-white">Reviews</a></li>
                    <li><a href="#" class="text-white">Services</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="col-md-3 text-white">
                <h5>Contact Us</h5>
                <p>Email: <a href="mailto:contact@travelwebsite.com" class="text-white">contact@travelwebsite.com</a></p>
                <p>Phone: <a href="tel:+919406995043" class="text-white">+91 9406995043</a></p>
                <p>Address: 123 Travel Street, Cityville, </p>
            </div>
            <!-- Newsletter Signup -->
            <div class="col-md-3 d-flex flex-column text-white">
                <h5>Newsletter Signup</h5>
                <form action="#" method="post" class="mb-3">
                    <div class="mb-2">
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Subscribe</button>
                </form>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!-- Latest News -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h5>Latest News</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Travel Blog: Top 10 Destinations for 2024</a></li>
                    <li><a href="#" class="text-white">New Tour Packages Announced</a></li>
                    <li><a href="#" class="text-white">Special Discounts on Summer Trips</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2024 Travel Website. All rights reserved.</p>
        </div>
    </div>
</footer>


</body>
</html>



<?php
// $con = mysqli_connect("localhost","root","","php_project");

// if($con===false){
//     die("could not connect");
// }

// $name =$_REQUEST['name'];
// $email =$_REQUEST['email'];
// $message =$_REQUEST['message'];

// $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

// if (mysqli_query($con,$sql)) {
//     echo "Record added successfully";
// }
// else
// {
//     echo "could not able to execute $sql" .mysqli_error($con);
// }
// mysqli_close($con);
?>