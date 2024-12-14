
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us - Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css')}}">
   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


</head>
<body >
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
        <h1 class="header-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">About Us</h1>
        <p class="header-description">
            Welcome to our website! We are dedicated to providing the best services to our customers. Our team is passionate about delivering high-quality experiences and making sure you find exactly what you're looking for.
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






   
    <!-- Our Story Section -->
<section class="our-story py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column with Image -->
            <div class="col-md-6">
                <div class="story-image">
                    <img src="images/jr-ross-Dl0-H4BaynI-unsplash.jpg" alt="Our Story" class="img-fluid rounded-4 shadow-lg" style="object-fit: cover; height: 100%; width: 100%; transition: transform 0.3s ease-in-out;">
                </div>
            </div>

            <!-- Right Column with Text -->
            <div class="col-md-6">
                <h2 class="text-center mb-4" style="font-family: 'Great Vibes', cursive; color: #2b3e50; font-size: 3rem;  letter-spacing: 2px; position: relative;">
                    Our Story
                    <span style="position: absolute; bottom: -10px; left: 0; right: 0; height: 3px; background-color: #e2f83f; width: 60%; margin: 0 auto;"></span>
                </h2>
                <p class="text-justify" style="font-size: 1.1rem; color: #555; line-height: 1.8; text-align: justify;">
                    From humble beginnings to becoming one of the leading travel destinations, our journey has been filled with passion, dedication, and a love for exploring the world. We started as a small team with big dreams of connecting travelers with the most beautiful and unexplored corners of the globe. Every destination we offer is carefully selected to provide not just a trip, but a unique experience.
                </p>
                <p class="text-justify" style="font-size: 1.1rem; color: #555; line-height: 1.8; text-align: justify;">
                    Over the years, we've grown, but our core values remain the same: authentic experiences, sustainable travel, and creating unforgettable memories for each traveler. Join us as we continue to discover new places, share stories, and help you make your travel dreams come true.
                </p>
            </div>
        </div>

        <!-- Milestones Section -->
<div class="row py-5">
    <div class="col-12 text-center">
        <h3 class="mb-4" style="font-style: italic; font-family: 'Great Vibes', cursive; color: #2b3e50; font-size: 2rem;">Our Milestones</h3>
    </div>
    <div class="col-12">
        <ul class="timeline">
            <li class="timeline-item">
                <div class="timeline-icon">🏆</div>
                <div class="timeline-content">
                    <h5>2015 - The Beginning</h5>
                    <p>Our journey began with a small group of passionate travelers who dreamed of offering exceptional travel experiences.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon">🌍</div>
                <div class="timeline-content">
                    <h5>2018 - Expanding Horizons</h5>
                    <p>We started adding destinations across the globe, focusing on local cultures, hidden gems, and sustainable tourism.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon">✈️</div>
                <div class="timeline-content">
                    <h5>2022 - A Global Presence</h5>
                    <p>We now have a global community of travelers who trust us to plan their adventures, making us one of the most trusted travel brands.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
 </div>
</section>

<!-- Stylish Enhancements (Add Hover Effects) -->
<style>
    /* Timeline Item Hover Effects */
    .timeline-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-bottom: 40px;
        animation: fadeInUp 0.8s ease-out;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .timeline-item:nth-child(odd) {
        flex-direction: row-reverse;
    }

    .timeline-item:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .timeline-icon {
        font-size: 2.5rem;
        margin-right: 20px;
        color: #f44336;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .timeline-item:nth-child(odd) .timeline-icon {
        margin-left: 20px;
        margin-right: 0;
    }

    .timeline-item:hover .timeline-icon {
        transform: scale(1.2);
        color: #ff9800;  /* Change icon color on hover */
    }

    .timeline-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        flex-grow: 1;
        max-width: 80%;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .timeline-item:hover .timeline-content {
        transform: translateY(-5px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
    }

    .timeline-item h5 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .timeline-item p {
        font-size: 1rem;
        color: #555;
    }
</style>

<!-- Meet Our Team Section -->
<section class="team">
    <div class="container my-3 py-5 text-center">
        <div class="row mb-5">
            <div class="col">
                <h1 style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Team</h1>
                <p class="my-3">
                    This team page has a quirky, vibrant energy that immediately catches your attention – a good
                    sign for a design company.
                </p>
            </div>
        </div>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded-circle w-75 mb-3"
                             src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80"
                             alt="Sophie">
                        <h3>Sophie Johnson</h3>
                        <h5>Software Engineer</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, recusandae.</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded-circle w-75 mb-3"
                             src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                             alt="Lucy">
                        <h3>Lucy Sanchez</h3>
                        <h5>FrontEnd Developer</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, recusandae.</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded-circle w-75 mb-3"
                             src="https://images.unsplash.com/photo-1592023031338-ee30ef94abbc?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8aHVtYW4lMjBtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                             alt="Brad">
                        <h3>Brad Smith</h3>
                        <h5>Scrum Master</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, recusandae.</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded-circle w-75 mb-3"
                             src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTd8fGh1bWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                             alt="Tom">
                        <h3>Tom Rogers</h3>
                        <h5>Software Engineer</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, recusandae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



  <!-- Our Mission Section with Image Slider -->
<section class="our-mission-section py-5" style="background-color: #f0f4f8;">
    <div class="container my-3 py-5 text-center">
        <h1 style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Mission</h1>
        <p class="mb-5">
            Our mission is to inspire travel by connecting people to unique experiences and creating unforgettable journeys that last a lifetime. We are dedicated to providing high-quality services that allow our customers to explore, enjoy, and discover the world with comfort and ease.
        </p>

        <!-- Image Slider (Carousel) -->
        <div id="missionCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#missionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Inner -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{asset('images/carl-newton-AWJpalN_0yE-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded shadow" alt="Beautiful Landscape">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bg-opacity-50 px-3 py-1 rounded">Exploring New Horizons</h5>
                        <p class=" bg-opacity-50 px-3 py-1 rounded">Discover the beauty of nature with our exclusive tours.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/clarisse-meyer-d6pLNFVZt_4-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded shadow" alt="City Exploration">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bg-opacity-50 px-3 py-1 rounded">City Exploration</h5>
                        <p class=" bg-opacity-50 px-3 py-1 rounded">Experience the thrill of urban adventures in vibrant cities.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/christopher-kuzman-2LhCDvS_7xs-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded shadow" alt="Cultural Journey">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bg-opacity-50 px-3 py-1 rounded">Cultural Journeys</h5>
                        <p class=" bg-opacity-50 px-3 py-1 rounded">Immerse yourself in diverse cultures around the world.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#missionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#missionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<style>

/* Our Mission Section */
.our-mission-section {
    background-color: #F3F4F6; /* Light grey background to blend with the grey theme */
    color: #384959; /* Text color to match your grey combination theme */
    text-align: center;
    padding: 60px 0;
    margin-top: 40px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.our-mission-section h1 {
    font-size: 2.8rem;
    color: #384959;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.our-mission-section .mission-description {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #5a6e7f; /* Grey color for better readability */
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

/* Hover effect for the mission section */
.our-mission-section:hover h1 {
    color: #5a6e7f;
}

.our-mission-section:hover .mission-description {
    color: #384959; /* Darker shade on hover */
}

.carousel-item img {
    height: 400px; /* Adjust image height */
    object-fit: cover; /* Make sure images fit nicely */
}

.carousel-caption {
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background for caption */
    padding: 10px;
    border-radius: 8px;
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

<script src="{{ asset('js/about.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

