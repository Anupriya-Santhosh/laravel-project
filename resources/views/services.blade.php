<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/services.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ex.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        <h1 class="header-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Services</h1>
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

<!-- Our Services Section -->
<section class="our-services-section">
  <div class="container">
    <h2 class="services-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Services</h2>
    <p class="services-description">
      Discover our wide range of travel services designed to provide you with an unforgettable journey. Choose from the best!
    </p>
    
    <div class="services-container">
      <!-- Service 1 -->
      <div class="service-card">
        <div class="service-icon-wrapper">
          <i class="fas fa-plane service-icon"></i>
        </div>
        <h3 class="service-title">Flight Booking</h3>
        <p class="service-description">
          Hassle-free flight booking with the best deals to any destination worldwide.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="service-card">
        <div class="service-icon-wrapper">
          <i class="fas fa-hotel service-icon"></i>
        </div>
        <h3 class="service-title">Hotel Reservation</h3>
        <p class="service-description">
          Find and book top-rated hotels for a comfortable and luxurious stay.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="service-card">
        <div class="service-icon-wrapper">
          <i class="fas fa-map-marked-alt service-icon"></i>
        </div>
        <h3 class="service-title">Tour Packages</h3>
        <p class="service-description">
          Explore our curated tour packages that cover the best attractions.
        </p>
      </div>

      <!-- Service 4 -->
      <div class="service-card">
        <div class="service-icon-wrapper">
          <i class="fas fa-car service-icon"></i>
        </div>
        <h3 class="service-title">Car Rentals</h3>
        <p class="service-description">
          Convenient car rentals for your travel needs, available anytime, anywhere.
        </p>
      </div>
    </div>
  </div>
</section>

<style>
    /* Our Services Section */
.our-services-section {
  background: linear-gradient(135deg, #f0f4f8, #e8ecf1);
  padding: 80px 0;
  animation: fadeInSection 1s ease-out;
  overflow: hidden;
}

.services-title {
  font-size: 3rem;
  color: #2b3e50;
  margin-bottom: 20px;
  text-align: center;
  font-weight: 700;
  text-shadow: 0px 3px 8px rgba(0, 0, 0, 0.15);
  animation: slideInTitle 1s ease-out;
  letter-spacing: 2px;
}

.services-description {
  font-size: 1.25rem;
  color: #546375;
  margin-bottom: 60px;
  text-align: center;
  line-height: 1.8;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  animation: fadeInText 1.2s ease-out;
}

.services-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
  opacity: 0;
  animation: fadeInOffers 1.5s ease-out forwards;
  animation-delay: 0.5s;
}

.service-card {
  background: #ffffff;
  border-radius: 15px;
  box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.1);
  width: 300px;
  padding: 30px;
  text-align: center;
  transition: transform 0.4s, box-shadow 0.4s, background-color 0.4s;
  position: relative;
  overflow: hidden;
  animation: cardEntrance 0.8s ease-out;
  cursor: pointer;
}

.service-card:hover {
  transform: translateY(-15px) scale(1.02);
  box-shadow: 0px 20px 35px rgba(0, 0, 0, 0.2);
  background: linear-gradient(135deg, #f9fafb, #ffffff);
}

.service-icon-wrapper {
  background: linear-gradient(135deg, #2b3e50, #546375);
  color: white;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto 25px;
  font-size: 2.5rem;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
  animation: bounceIn 0.8s ease-out;
  transition: transform 0.3s, box-shadow 0.3s;
}

.service-card:hover .service-icon-wrapper {
  transform: scale(1.1);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
}

.service-title {
  font-size: 1.6rem;
  color: #2b3e50;
  margin-bottom: 20px;
  font-weight: 600;
  animation: fadeInText 1.2s ease-out;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.service-description {
  font-size: 1rem;
  color: #6a7b8c;
  line-height: 1.7;
  animation: fadeInText 1.5s ease-out;
  margin-bottom: 20px;
}

/* Add hover effect for description */
.service-card:hover .service-description {
  color: #2b3e50;
  font-weight: 500;
}

/* Keyframes for animations */
@keyframes fadeInSection {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideInTitle {
  0% {
    opacity: 0;
    transform: translateY(-50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInText {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeInOffers {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes cardEntrance {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes bounceIn {
  0% {
    transform: scale(0.5);
    opacity: 0;
  }
  70% {
    transform: scale(1.1);
    opacity: 1;
  }
  100% {
    transform: scale(1);
  }
}

</style>





    <!-- Services Section -->
    <!-- <section class="services py-5" style="background-color:#BDDDFC;">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
          
            <div class="col-md-3 mb-4">
                <div class="box">
                    <div class="content">
                        <h2>01</h2>
                        <h3>Travel Booking</h3>
                        <p>
                        Book your flights, hotels, and tours in one place. We offer a wide range of travel options to fit your preferences and budget.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

      
            <div class="col-md-3 mb-4">
                <div class="box">
                    <div class="content">
                        <h2>02</h2>
                        <h3>Personalized Itineraries</h3></h3>
                        <p>
                        Let us design your perfect travel itinerary. From local adventures to international trips, we tailor every journey to your needs.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3 mb-4">
                <div class="box">
                    <div class="content">
                        <h2>03</h2>
                        <h3>Local Travel Guides</h3>
                        <p>
                        Explore new destinations with expert local guides. Our guides provide insider knowledge to help you discover hidden gems.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3 mb-4">
                <div class="box">
                    <div class="content">
                        <h2>04</h2>
                        <h3>24/7 Customer Support</h3>
                        <p>
                        Our dedicated support team is available around the clock to assist you with any inquiries or concerns during your trip.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


    
            
  <!-- Travel Tips & Guides Section -->
<section class="travel-tips-section">
    <div class="container">
        <h2 class="tips-title" style="font-style: italic; font-family: 'Great Vibes', cursive;">Travel Tips & Guides</h2>
        <p class="tips-description">
            Get the best travel advice and tips from our experts. From packing lists to destination insights, we’ve got you covered!
        </p>
        
        <div class="tips-container">
            <!-- Tip 1 -->
            <div class="tip-card">
                <div class="tip-icon-wrapper">
                    <i class="fas fa-suitcase-rolling tip-icon"></i>
                </div>
                <div class="tip-content">
                    <h3 class="tip-title">Packing Essentials</h3>
                    <p class="tip-info">
                        Learn how to pack efficiently for any type of trip, whether it’s a short getaway or a long adventure.
                    </p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>

            <!-- Tip 2 -->
            <div class="tip-card">
                <div class="tip-icon-wrapper">
                    <i class="fas fa-shield-alt tip-icon"></i>
                </div>
                <div class="tip-content">
                    <h3 class="tip-title">Travel Safety</h3>
                    <p class="tip-info">
                        Discover essential safety tips for traveling abroad, from health precautions to securing your belongings.
                    </p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>

            <!-- Tip 3 -->
            <div class="tip-card">
                <div class="tip-icon-wrapper">
                    <i class="fas fa-language tip-icon"></i>
                </div>
                <div class="tip-content">
                    <h3 class="tip-title">Cultural Etiquette</h3>
                    <p class="tip-info">
                        Get to know the local customs and cultural dos and don'ts to ensure a respectful and enjoyable trip.
                    </p>
                    <a href="#" class="read-more-btn">Read More</a>
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
