<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/gallery.css')}}">
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
        <h1 class="header-title"style="font-style: italic; font-family: 'Great Vibes', cursive;">Our Gallery</h1>
        <p class="header-description">
        Discover a collection of beautiful images from our travels. Explore the moments that capture the essence of adventure and discovery.
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

/*gallery section */
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




 <!-- Gallery Section -->

 <div class="album">
    <div class="responsive-container-block bg">
        <div class="responsive-container-block img-cont">
            <img class="img" src="{{ asset('images/zach-miles-Y84-eo8drzk-unsplash.jpg')}}" alt="Image 1">
            <img class="img" src="{{ asset('images/yuhan-du-oqUnN9z673Q-unsplash.jpg')}}" alt="Image 2">
            <img class="img img-last" src="{{ asset('images/yohann-mourre-hds60mCxbPg-unsplash.jpg')}}" alt="Image 3">
            <!-- Additional images -->
            <img class="img" src="{{ asset('images/tim-trad-CLm3pWXrS9Q-unsplash.jpg')}}" alt="Image 9">
            <img class="img" src="{{ asset('images/arthur-humeau-3xwdarHxHqI-unsplash.jpg')}}" alt="Image 10">
            <img class="img" src="{{ asset('images/anders-jilden-cYrMQA7a3Wc-unsplash.jpg')}}" alt="Image 19">
            <img class="img" src="{{ asset('images/alexandre-chambon-aapSemzfsOk-unsplash.jpg')}}" alt="Image 20">
        </div>
        <div class="responsive-container-block img-cont">
            <img class="img img-big" src="{{ asset('images/y-s-p6ekZCw7X1U-unsplash.jpg')}}" alt="Image 4">
            <img class="img img-big img-last" src="{{ asset('images/wp8974082-4k-purple-flowers-wallpapers.jpg')}}" alt="Image 5">
            <!-- Additional images -->
            <img class="img img-big" src="{{ asset('images/travel-hd-wruelfhuiyy7ewtw.webp')}}" alt="Image 11">
            <img class="img img-big img-last" src="{{ asset('images/travel-hd-k5pwu3imba57139p hotel.webp')}}" alt="Image 12">
            <img class="img img-big" src="{{ asset('images/pedro-lastra-c1OVi149Y2Y-unsplash.jpg')}}" alt="Image 15">
            <img class="img img-big img-last" src="{{ asset('images/stevie-ekkelkamp-t7z3xjyRsQ4-unsplash.jpg')}}" alt="Image 16">
            <img class="img img-big img-last" src="{{ asset('images/alexander-XSl6VEp7LFg-unsplash.jpg')}}" alt="Image 17">
        </div>
        <div class="responsive-container-block img-cont">
            <img class="img" src="{{ asset('images/william-bayreuther-C0KdBbibUYo-unsplash.jpg')}}" alt="Image 6">
            <img class="img" src="{{ asset('images/vinayak-sharma-xFpB63IlwNo-unsplash.jpg')}}" alt="Image 7">
            <img class="img" src="{{ asset('images/vita-vilcina-0G1r-Cg0zS8-unsplash.jpg')}}" alt="Image 8">
            <!-- Additional images -->
            <img class="img" src="{{ asset('images/alex-vasey-F5HtPjpBb9k-unsplash.jpg')}}" alt="Image 13">
            <img class="img" src="{{ asset('images/timo-stern-iUBgeNeyVy8-unsplash.jpg')}}" alt="Image 14">
            <img class="img" src="{{ asset('images/agustin-diaz-gargiulo-7F65HDP0-E0-unsplash.jpg')}}" alt="Image 18">
        </div>
    </div>
</div>


<style>

.album {
      width: 100%;
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 10px;
  }
  .album .responsive-container-block {
      min-height: 75px;
      height: fit-content;
      width: 100%;
      padding-top: 10px;
      padding-right: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      display: flex;
      flex-wrap: wrap;
      margin-top: 0px;
      margin-right: auto;
      margin-bottom: 0px;
      margin-left: auto;
      justify-content: flex-start;
  }
  .album .responsive-container-block.bg {
      max-width: 1320px;
      margin: 0;
      justify-content: space-between;
  }
  .album .img {
      width: 100%;
      margin: 0 0 20px 0;
  }
  .album .responsive-container-block.img-cont {
      flex-direction: column;
      max-width: 33.3%;
      min-height: auto;
      margin: 0;
      height: 100%;
  }
  .album .img.img-big {
      height: 50%;
      margin: 0 0 16px 0;
  }
  @media (max-width: 1024px) {
      .album .img {
          margin: 0 0 18px 0;
      }
  }
  @media (max-width: 768px) {
      .album .img {
          max-width: 32.5%;
          margin: 0 0 0 0;
      }
      .album .responsive-container-block.bg {
          flex-direction: column;
      }
      .album .responsive-container-block.img-cont {
          max-width: 100%;
          flex-direction: row;
          justify-content: space-between;
      }
      .album .img.img-big {
          max-width: 49%;
          margin: 0 0 0 0;
      }
  }
  @media (max-width: 500px) {
      .album .img {
          max-width: 94%;
          margin: 0 0 25px 0;
      }
      .album .responsive-container-block.img-cont {
          flex-direction: column;
          align-items: center;
          padding: 10px 10px 10px 10px;
      }
      .album .img.img-big {
          max-width: 94%;
          margin: 0 0 25px 0;
      }
      .album .img.img-last {
          margin: 0 0 5px 0;
      }
  }
</style>
<!-- Photo Stories Section -->
<section class="photo-stories-section">
    <div class="container">
        <h2 class="stories-title" style="font-style: italic; font-family: 'Great Vibes', cursive;">Photo Stories</h2>
        <p class="stories-description">
            Every picture tells a story. Explore our curated photo stories and get inspired by amazing travel experiences.
        </p>
        
        <div class="stories-container">
            <!-- Story 1 -->
            <div class="story-card">
                <div class="story-image" style="background-image: url('images/travel-hd-0ux43iskjc5s2x6w.webp');"></div>
                <div class="story-content">
                    <h3 class="story-title">Sunset in Bali</h3>
                    <p class="story-info">
                        Experience the breathtaking beauty of a Bali sunset, where the sky transforms into a canvas of vivid colors.
                    </p>
                    <a href="#" class="read-story-btn">Read More</a>
                </div>
            </div>

            <!-- Story 2 -->
            <div class="story-card">
                <div class="story-image" style="background-image: url('images/travel-hd-2fsg31b3wqteinpa.webp');"></div>
                <div class="story-content">
                    <h3 class="story-title">Mountain Adventure</h3>
                    <p class="story-info">
                        Journey to the majestic peaks and embrace the thrill of mountain adventures, filled with stunning vistas.
                    </p>
                    <a href="#" class="read-story-btn">Read More</a>
                </div>
            </div>

            <!-- Story 3 -->
            <div class="story-card">
                <div class="story-image" style="background-image: url('images/travel-hd-jr86mcmkf7szpa3v.webp');"></div>
                <div class="story-content">
                    <h3 class="story-title">Cultural Wonders</h3>
                    <p class="story-info">
                        Discover the rich cultural heritage of ancient cities, where history and tradition come alive.
                    </p>
                    <a href="#" class="read-story-btn">Read More</a>
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

<script src="{{ asset('js/gallery.js')}}"></script>


</body>
</html>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"> -->
