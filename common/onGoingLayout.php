<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ongoing Projects Slider</title>
 
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
 
</head>
<body>

  <!-- Ongoing Projects Slider -->


  <section class="service-three">
    <div class="container">
        <div class="section-title-two text-center">
            <div class="section-title-two__tagline-box">
                                    <span class="section-title-two__tagline">Engineering Milestones in Progress</span>
                                </div>
            <!-- <h3 class="below-section-two">We focus on delivering peace of mind and quality services to our clients.</h3> -->
              <div class="section-title-two__title-box sec-title-animation animation-style2">
                            <h2 class="section-title-two__title title-animation">
                                Ongoing projects shaping the future with cutting-edge solutions.
                            </h2>
                        </div>
        </div>
</section>
  <div class="glides" id="ongoingProjects">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide">
          <div class="project-card">
            <img src="https://via.placeholder.com/800x400" alt="Project 1" class="project-image">
            <h2 class="project-title">High-Efficiency HVAC System Design</h2>
            <p class="project-description">Designed and implemented a high-efficiency HVAC system for a commercial building to optimize energy consumption and maintain consistent air quality. The project utilized advanced mechanical engineering principles to enhance system performance, reduce environmental impact, and ensure long-term sustainability.</p>
          </div>
        </li>
        <li class="glide__slide">
          <div class="project-card">
            <img src="https://via.placeholder.com/800x400" alt="Project 2" class="project-image">
            <h3 class="project-title">Smart Grid Integration for Urban Areas</h3>
            <p class="project-description">Engineered a comprehensive water management system for a new urban development project. The system incorporated rainwater harvesting, stormwater management, and water recycling technologies, ensuring efficient water usage and sustainability in the community’s infrastructure.</p>
          </div>
        </li>
        <li class="glide__slide">
          <div class="project-card">
            <img src="https://via.placeholder.com/800x400" alt="Project 3" class="project-image">
            <h3 class="project-title">Sustainable Urban Water Management System</h3>
            <p class="project-description"> Engineered a comprehensive water management system for a new urban development project. The system incorporated rainwater harvesting, stormwater management, and water recycling technologies, ensuring efficient water usage and sustainability in the community’s infrastructure.</p>
          </div>
        </li>
         <li class="glide__slide">
          <div class="project-card">
            <img src="https://via.placeholder.com/800x400" alt="Project 3" class="project-image">
            <h3 class="project-title">Custom Electrical Panel Design for Industrial Use</h3>
            <p class="project-description">Developed a custom electrical panel for a large industrial client, ensuring compliance with safety standards and energy efficiency requirements. The design incorporated advanced circuit protection, control systems, and user-friendly interfaces for ease of operation and maintenance.</p>
          </div>
        </li>
      </ul>
    </div>

    <!-- Navigation Arrows -->
    <!-- <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<">‹</button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">">›</button>
    </div> -->

    <!-- Dots Pagination -->
    <div class="glide__bullets" data-glide-el="controls[nav]">
      <button class="glide__bullet" data-glide-dir="=0"></button>
      <button class="glide__bullet" data-glide-dir="=1"></button>
      <button class="glide__bullet" data-glide-dir="=2"></button>
      <button class="glide__bullet" data-glide-dir="=3"></button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      new Glide('#ongoingProjects', {
        type: 'carousel', // Slider or carousel
        startAt: 0,
        perView: 1, // Show one project at a time
        autoplay: 2000, // Auto-slide every 3 seconds
        gap: 20 // Gap between slides
      }).mount();
    });
  </script>

</body>
</html>
