<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/travel.css') }}">
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
      

    <!-- Hero Section -->
    <div class="slider">
         <div class="list">
            <div class="item">
                <img src="{{ asset('images/London.jpg') }}" alt="">

                <div class="content">
                    <div class="title">EXPLORE THE WORLD WITH US</div>
                    <div class="type">LONDON</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/Kerala.jpg') }}" alt="">

                <div class="content">
                    <div class="title">EXPLORE THE WORLD WITH US</div>
                    <div class="type">KERALA</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/Europ.jpg') }}" alt="">

                <div class="content">
                    <div class="title">EXPLORE THE WORLD WITH US</div>
                    <div class="type">EUROP</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/img33.jfif') }}" alt="">

                <div class="content">
                    <div class="title">EXPLORE THE WORLD WITH US</div>
                    <div class="type">PARIS</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>

        </div>


        <div class="thumbnail">

            <div class="item">
                <img src="{{ asset('images/London.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/Kerala.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/Europ.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('images/img33.jfif') }}" alt="">
            </div>

        </div>


        <div class="nextPrevArrows">
            <button class="prev"> < </button>
            <button class="next"> > </button>
        </div>


    </div>


    <!-- About Us Section -->
<section class="about-us py-5 animate__animated animate__fadeIn" id="About_us" style="background-color:#BDDDFC;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- About Us Images -->
           <!-- About Us Images -->
<div class="col-lg-6">
    <div class="row g-3">
        <div class="col-6 text-start">
            <img class="img-fluid w-100 animate__animated animate__fadeInLeft zoom-effect" data-wow-delay="0.1s" src="images/about3.webp" alt="Image 1">
        </div>
        <div class="col-6 text-start">
            <img class="img-fluid w-75 animate__animated animate__fadeInRight zoom-effect" data-wow-delay="0.3s" src="images/img11.avif" alt="Image 2">
        </div>
        <div class="col-6 text-end">
            <img class="img-fluid w-75 animate__animated animate__fadeInUp zoom-effect" data-wow-delay="0.5s" src="images/img17.avif" alt="Image 3">
        </div>
        <div class="col-6 text-end">
            <img class="img-fluid w-100 animate__animated animate__fadeInDown zoom-effect" data-wow-delay="0.7s" src="images/about4.jfif" alt="Image 4">
        </div>
    </div>
</div>

            <!-- About Us Text -->
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-white fw-normal animate__animated animate__fadeInLeft" style="font-style: italic; font-family: 'Great Vibes', cursive;">About Us_______</h5>

                <h1 class="mb-4 text-dark animate__animated animate__zoomIn">Welcome to Our Journey</h1>
                <p class="mb-4 text-white animate__animated animate__fadeIn">We are a passionate team dedicated to providing the best travel experiences. Our mission is to help you explore new destinations and create unforgettable memories. From breathtaking nature to luxurious stays, we aim to make your travels a dream come true.</p>
                <p class="mb-4 text-white animate__animated animate__fadeIn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel dolor sit amet odio aliquet hendrerit. Suspendisse potenti. Praesent feugiat turpis et risus congue.</p>

                <!-- Statistics with Progress Bars -->
<div class="row g-4 mb-4 animate__animated animate__fadeInUp">
    <div class="col-sm-6">
        <div class="d-flex flex-column align-items-start border-start border-5 border-dark px-3">
            <!-- Years of Experience Progress Bar -->
            <div class="d-flex align-items-center mb-2">
                <h1 id="experience-count" class="display-5 text-dark mb-0 me-3">0</h1>
                <p class="mb-0 text-white">Years of Experience</p>
            </div>
            <div class="progress" style="width: 100%;">
                <div id="experience-bar" class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="15"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="d-flex flex-column align-items-start border-start border-5 border-dark px-3">
            <!-- Destinations Covered Progress Bar -->
            <div class="d-flex align-items-center mb-2">
                <h1 id="destinations-count" class="display-5 text-dark mb-0 me-3">0</h1>
                <p class="mb-0 text-white">Destinations Covered</p>
            </div>
            <div class="progress" style="width: 100%;">
                <div id="destinations-bar" class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50"></div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
// Function to animate number counting and progress bars
function animateRating(id, barId, start, end, duration) {
    const obj = document.getElementById(id);
    const bar = document.getElementById(barId);
    let startTime = null;

    // Update the value and progress bar
    const step = (timestamp) => {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);
        obj.innerText = currentValue;
        bar.style.width = `${(currentValue / end) * 100}%`;
        bar.setAttribute('aria-valuenow', currentValue);

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Initialize the counters and progress bars when the page is loaded
document.addEventListener("DOMContentLoaded", () => {
    animateRating("experience-count", "experience-bar", 0, 15, 5000); // 15 years, 2 seconds
    animateRating("destinations-count", "destinations-bar", 0, 50, 5000); // 50 destinations, 2 seconds
});
</script>


<section class="featured-destinations py-5" style="background-color: #88BDF2; padding: 50px 0;">
    <div class="container">
        <h2 class="text-center mb-4 text-dark" style="font-style: italic; font-family: 'Great Vibes', cursive;">Featured Destinations</h2>
        <div class="row">
            @foreach ($destinations as $destination)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-lg border-0">
                        <img src="{{ asset('storage/' . $destination->image) }}" 
                             class="card-img-top" 
                             alt="{{ $destination->title }}" 
                             onerror="this.onerror=null; this.src='{{ asset('images/default-image.jpg') }}';" 
                             style="height: 200px; object-fit: cover;">

                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $destination->title }}</h5>
                            <p class="card-text text-center">{{ $destination->description }}</p>
                            <a href="{{ $destination->link }}" class="btn btn-dark btn-block">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($destinations->isEmpty())
                <p class="text-white text-center">No destinations found.</p>
            @endif
        </div>
    </div>
</section>

<!-- Add Custom CSS for styling -->
<style>
    .featured-destinations {
        background-color: #222;
        padding: 60px 0;
    }
    
    .featured-destinations h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #fff;
    }
    
    .featured-destinations .card {
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .featured-destinations .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    
    .featured-destinations .card img {
        border-radius: 8px;
        object-fit: cover;
    }

    .featured-destinations .card-body {
        padding: 15px;
    }

    .featured-destinations .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        text-transform: uppercase;
        color: black;
        margin-bottom: 10px;
    }

    .featured-destinations .card-text {
        font-size: 1rem;
        color: #bbb;
        margin-bottom: 15px;
    }

    .featured-destinations .btn {
        font-size: 1rem;
        font-weight: 500;
        border-radius: 5px;
        padding: 12px 20px;
    }

    .featured-destinations .btn:hover {
        background-color: black;
        color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }
    
    .text-white {
        color: #fff;
    }
</style>


<!-- Gallery Section -->
<section class="gallery py-5"style="background-color:#BDDDFC;">
    <div class="container">
        <h2 class="text-center mb-4 text-dark"style="font-style: italic; font-family: 'Great Vibes', cursive;">Best Offers</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img6.avif');">
                    <div class="overlay">
                        <h4>Turkey</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img5.avif');">
                    <div class="overlay">
                        <h4>Kerala</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img4.avif');">
                    <div class="overlay">
                        <h4>Panjab</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img3.avif');">
                    <div class="overlay">
                        <h4>Africa</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img2.avif');">
                    <div class="overlay">
                        <h4>Bhutan</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item" style="background-image: url('images/img1.avif');">
                    <div class="overlay">
                        <h4>Kashmir</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="gallery.php" class="btn btn-dark btn-lg">View More</a>
        </div>
    </div>
</section>




<!-- Review Page Content -->
<section class="reviews-page py-5" style="background-color: #88BDF2;">
    <div class="container">
        <h1 class="text-center mb-4 text-dark"style="font-style: italic; font-family: 'Great Vibes', cursive;">Customer Reviews</h1>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="review-card p-4 bg-white rounded shadow-sm hover-effect">
                    <div class="review-header d-flex align-items-center mb-3">
                        <img src="images/girl.webp" class="review-img rounded-circle me-3" alt="Reviewer 1">
                        <h5 class="review-title text-dark">Sharaya Anil</h5>
                    </div>
                    <p class="review-text text-muted">"An amazing experience! The trip was well-organized and the guides were incredibly knowledgeable."</p>
                    <div class="review-rating">
                        <span class="star-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card p-4 bg-white rounded shadow-sm hover-effect">
                    <div class="review-header d-flex align-items-center mb-3">
                        <img src="images/man.jpg" class="review-img rounded-circle me-3" alt="Reviewer 2">
                        <h5 class="review-title text-dark">Sunil Kumar</h5>
                    </div>
                    <p class="review-text text-muted">"Fantastic service and beautiful destinations. Everything was perfect from start to finish. Will definitely book again!"</p>
                    <div class="review-rating">
                        <span class="star-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card p-4 bg-white rounded shadow-sm hover-effect">
                    <div class="review-header d-flex align-items-center mb-3">
                        <img src="images/girl2.jpeg" class="review-img rounded-circle me-3" alt="Reviewer 3">
                        <h5 class="review-title text-dark">Alice Jhon</h5>
                    </div>
                    <p class="review-text text-muted">"A wonderful experience! The accommodations were top-notch and the itinerary was well-planned. Five stars!"</p>
                    <div class="review-rating">
                        <span class="star-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .review-card {
        border: 1px solid #e0e0e0;
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



<script src="{{ asset('js/travel.js') }}"></script>

</body>
</html>
