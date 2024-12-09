<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonial Page</title>

  <!-- Include Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  
  <!-- Include AOS CSS (for animations) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts for elegant typography -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Include jQuery (Optional for extra customization) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Include AOS JS (for animations) -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .testimonials {
      background-color: #fff;
      padding: 60px 20px;
      text-align: center;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin: 40px auto;
      max-width: 1200px;
    }

    .testimonials h2 {
      font-size: 2.5rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 40px;
    }

    .swiper-container {
      width: 100%;
      margin: 0 auto;
    }

    .swiper-slide {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #f4f4f4;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
      padding: 40px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .swiper-slide:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .swiper-slide img {
      border-radius: 50%;
      width: 120px;
      height: 120px;
      object-fit: cover;
      margin-bottom: 20px;
      border: 5px solid #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .swiper-slide h4 {
      margin-top: 15px;
      font-size: 1.5rem;
      color: #333;
      font-weight: 500;
    }

    .swiper-slide p {
      font-size: 1.1rem;
      color: #666;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    /* Styling for the pagination dots */
    .swiper-pagination-bullet {
      background: #001b41; /* Apply the deep blue color */
      opacity: 0.7;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
      background: #001b41; /* Ensure active dot is the same color */
    }

    /* Styling for the arrows */
    .swiper-button-next, .swiper-button-prev {
      color: #001b41; /* Apply the deep blue color */
      font-size: 24px;
    }
  </style>
</head>
<body>

  <!-- Testimonial Section -->
  <section class="testimonials">
     <div class="section-title-two text-center brand-slider-alignment">
        <div class="section-title-two__tagline-box">
            <span class="section-title-two__tagline">Our clients</span>
             <!-- <div class="section-title-two__title-box sec-title-animation animation-style2">
                            <h2 class="section-title-two__title title-animation">
                                We focus on delivering peace of mind and quality services to our clients
                            </h2>
                        </div> -->
        </div>
    </div>
    <div class="container">
      <!-- <h2>What Our Clients Say</h2> -->
      
      <!-- Swiper Container -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Testimonial 1 -->
          <div class="swiper-slide" data-aos="fade-up">
            <img src="https://via.placeholder.com/120" alt="Client 1">
            <p>"This product is amazing! It has completely transformed our business."</p>
            <h4>John Doe</h4>
            <p>CEO, Company A</p>
          </div>

          <!-- Testimonial 2 -->
          <div class="swiper-slide" data-aos="fade-up" data-aos-delay="100">
            <img src="https://via.placeholder.com/120" alt="Client 2">
            <p>"We saw instant results after using this service. Highly recommend it!"</p>
            <h4>Jane Smith</h4>
            <p>Marketing Manager, Company B</p>
          </div>

          <!-- Testimonial 3 -->
          <div class="swiper-slide" data-aos="fade-up" data-aos-delay="200">
            <img src="https://via.placeholder.com/120" alt="Client 3">
            <p>"Fantastic experience! The support team is always responsive."</p>
            <h4>Michael Brown</h4>
            <p>Founder, Company C</p>
          </div>

          <!-- Testimonial 4 -->
          <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
            <img src="https://via.placeholder.com/120" alt="Client 4">
            <p>"I love the ease of use and the results speak for themselves."</p>
            <h4>Emily White</h4>
            <p>Product Manager, Company D</p>
          </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- Initialize Swiper and AOS -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2, // Show 3 testimonials at once
      spaceBetween: 30,  // Space between slides
      loop: true,        // Infinite loop
      autoplay: {
        delay: 2000,     // 3 seconds autoplay
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,  // Allow clicking dots
      },
      breakpoints: {
        1024: {
          slidesPerView: 2, // Show 2 testimonials on medium screens
        },
        600: {
          slidesPerView: 1, // Show 1 testimonial on small screens
        }
      }
    });

    // Initialize AOS animations
    AOS.init({
      duration: 2000,  // Animation duration
      easing: 'ease-in-out',  // Easing type
    //   once: true  
      // Animation triggers only once
    });
  </script>

</body>
</html>
