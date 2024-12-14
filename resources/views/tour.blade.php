<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours - Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/tour.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        <h1 class="header-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Explore Our Tours</h1>
        <p class="header-description">
        Journey with us to some of the most captivating destinations around the globe. Our tours are designed to inspire and offer unforgettable memories.
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
  height: 500px;
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








    <!-- Tours Section -->
    <section class="tours py-5" style="background-color: #BDDDFC;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Top Tours</h2>
        <div class="row g-4">
            <!-- Tour 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img2.avif" class="card-img-top" alt="Tour 1" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Amazing Thailand</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Experience the vibrant culture and beautiful landscapes of Thailand. Enjoy guided tours, local cuisine, and unique adventures.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tour 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img3.avif" class="card-img-top" alt="Tour 2" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Paris City Tour</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Explore the enchanting city of Paris with our exclusive tour. Visit iconic landmarks, enjoy fine dining, and immerse yourself in French culture.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tour 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img4.avif" class="card-img-top" alt="Tour 3" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Adventure in New Zealand</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Discover the natural wonders of New Zealand. From stunning fjords to vibrant cities, this tour offers a mix of adventure and relaxation.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tour 4 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img5.avif" class="card-img-top" alt="Tour 4" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Exploring Japan</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Experience the unique blend of tradition and modernity in Japan. Enjoy historical sites, vibrant cities, and serene landscapes.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tour 5 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img6.avif" class="card-img-top" alt="Tour 5" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Luxury Cruise</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Indulge in luxury with our cruise tour. Enjoy exquisite dining, world-class amenities, and breathtaking ocean views sre so beautiful.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tour 6 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="images/img10.jpg" class="card-img-top" alt="Tour 6" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-weight: 600; color: #333;">Safari Adventure</h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #777;">Embark on a thrilling safari adventure. Experience the thrill of wildlife sightings and explore the beauty of the African savannah.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Offers Section -->
<div class="special-offers-section">
    <div class="special-offers-overlay"></div>
    <div class="container">
        <h2 class="special-offers-title" style="font-family: 'Great Vibes', cursive;">Special Offers</h2>
        <p class="special-offers-description">
            Explore our exclusive deals and discounts. Don’t miss out on these limited-time offers to your favorite destinations!
        </p>
        <div class="offers-container">
            <div class="offer-card">
                <div class="offer-image-wrapper">
                    <img src="images/eric-marty-IZunjrb3soo-unsplash.jpg" alt="Offer 1" class="offer-image">
                    <div class="offer-badge">20% Off</div>
                </div>
                <div class="offer-details">
                    <h4>Romantic Getaway</h4>
                    <p>Enjoy a 20% discount on a romantic weekend escape to Paris. Offer valid till 30th November 2024.</p>
                    <a href="#" class="btn btn-dark">Book Now</a>
                </div>
            </div>
            <div class="offer-card">
                <div class="offer-image-wrapper">
                    <img src="images/denys-kostyuchenko-FQjUaIMQF3Q-unsplash.jpg" alt="Offer 2" class="offer-image">
                    <div class="offer-badge">15% Off</div>
                </div>
                <div class="offer-details">
                    <h4>Adventure in the Alps</h4>
                    <p>Get 15% off on a thrilling adventure in the Swiss Alps. Limited spots available!hurry up!!</p>
                    <a href="#" class="btn btn-dark">Learn More</a>
                </div>
            </div>
            <div class="offer-card">
                <div class="offer-image-wrapper">
                    <img src="images/graphic-node-qOTyvyjVyoY-unsplash.jpg" alt="Offer 3" class="offer-image">
                    <div class="offer-badge">25% Off</div>
                </div>
                <div class="offer-details">
                    <h4>Family Package</h4>
                    <p>Special family package to Hawaii with up to 25% discount. Perfect for the summer holidays!</p>
                    <a href="#" class="btn btn-dark">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Enhanced Special Offers Section with Animations */
.special-offers-section {
    background: linear-gradient(to bottom, #e0e6ea, #f4f5f6); /* Light gradient background */
    padding: 80px 0;
    position: relative;
    overflow: hidden;
    animation: fadeInSection 1s ease-out; /* Fade-in animation */
  }
  
  /* Keyframes for section fade-in */
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
  
  .special-offers-overlay {
    background: url('images/pattern.png') repeat; /* Background pattern image (optional) */
    opacity: 0.05;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }
  
  .special-offers-section .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
  }
  
  .special-offers-title {
    font-size: 3rem;
    color: #2b3e50;
    margin-bottom: 25px;
    text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Text shadow for emphasis */
    animation: slideInTitle 1s ease-out;
  }
  
  /* Keyframes for title slide-in effect */
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
  
  .special-offers-description {
    font-size: 1.25rem;
    color: #546375;
    margin-bottom: 50px;
    line-height: 1.6;
    animation: fadeInText 1.2s ease-out;
  }
  
  /* Keyframes for description fade-in */
  @keyframes fadeInText {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  
  .offers-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 25px;
    opacity: 0;
    animation: fadeInOffers 1.5s ease-out forwards;
    animation-delay: 0.5s;
  }
  
  /* Keyframes for offers fade-in */
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
  
  .offer-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    width: 30%;
    min-width: 280px;
    max-width: 350px;
    overflow: hidden;
    transition: transform 0.4s, box-shadow 0.4s;
    position: relative;
    animation: cardEntrance 0.8s ease-out; /* Slide-in effect for cards */
  }
  
  .offer-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
  }
  
  /* Keyframes for card entrance animation */
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
  
  .offer-image-wrapper {
    position: relative;
  }
  
  .offer-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    filter: brightness(0.9); /* Slightly darker for better text contrast */
    transition: filter 0.3s ease-in-out;
  }
  
  .offer-card:hover .offer-image {
    filter: brightness(1); /* Brighten image on hover */
  }
  
  .offer-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background-color: #ff5a5f;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 0.9rem;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
    animation: bounceIn 0.8s ease-out;
  }
  
  /* Keyframes for bounce effect on badges */
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
  
  .offer-details {
    padding: 25px;
    position: relative;
  }
  
  .offer-details h4 {
    font-size: 1.8rem;
    color: #2b3e50;
    margin-bottom: 12px;
    animation: fadeInText 1.2s ease-out;
  }
  
  .offer-details p {
    font-size: 1rem;
    color: #6a7b8c;
    margin-bottom: 20px;
    line-height: 1.5;
  }
  
  .offer-details .btn {
    background-color: #2b3e50;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
  }
  
  .offer-details .btn-glow {
    background-color: #ff5a5f;
    color: white;
    box-shadow: 0px 8px 15px rgba(255, 90, 95, 0.3); /* Glowing button effect */
    animation: pulse 2s infinite; /* Pulse animation for glow effect */
  }
  
  /* Keyframes for pulsing glow effect */
  @keyframes pulse {
    0%, 100% {
      box-shadow: 0px 8px 15px rgba(255, 90, 95, 0.3);
    }
    50% {
      box-shadow: 0px 12px 25px rgba(255, 90, 95, 0.4);
    }
  }
  
  .offer-details .btn-glow:hover {
    background-color: #ff6e72;
    box-shadow: 0px 12px 20px rgba(255, 90, 95, 0.4); /* Brighter on hover */
    transform: scale(1.05); /* Slight scale-up on hover */
  }
  </style>




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
<script src="tour.js"></script>

</body>
</html>

