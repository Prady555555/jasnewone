<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <title>Glide.js Carousel with Animations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .glide__track {
            overflow: hidden;
        }

        .glide__slides {
            display: flex;
            align-items: center;
        }

        .glide__slide {
            flex: 0 0 auto;
            width: 1000px; /* Slide width */
            text-align: center;
            box-sizing: border-box;
            padding: 10px;
        }

        /* Main Image Container */
        .main-img-container {
            width: 100%;
            position: relative;
           border-top-left-radius: 20px;
            border-top-right-radius: 20px;

            overflow: hidden;
        }

        .main-img-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* Flash Animation on Hover */
        .main-img-container:hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%; /* Covers the entire image area */
            height: 100%;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.8), transparent);
            animation: flashEffect 1s ease-in-out;
        }

        @keyframes flashEffect {
            0% {
                top: -100%;
            }
            50% {
                top: 50%;
            }
            100% {
                top: 0;
            }
        }

        /* Card Container */
        .card {
            background: #e0e0e0;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 100%;

            text-align: center;
            position: relative;
            gap:40px;
        }

        /* Small Image Styling */
        .small-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: -30px auto 10px; /* Centered and spaced properly */
            border: 3px solid white;
            background: #fff;
            transition: transform 0.2s ease-in-out;
        }

        .small-img:hover {
            animation: shake 0.5s infinite alternate;
        }

        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(0); }
            75% { transform: translateX(5px); }
            100% { transform: translateX(0); }
        }

        /* Text Styling */
        .card h3 {
           
            margin: 10px 0 5px;
            color: #333;
        }

        .card p {
           
            color: #444;
            line-height: 1.6;
            margin: 0;
        }

        .card a.read-more {
            display: inline-block;
            margin-top: 10px;
            font-size: 0.9em;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .card a.read-more:hover {
            color: #0056b3;
        }

        .container {
            
            
        }

        .section-title-two {
            margin-bottom: 20px;
        }

        .section-title-two h2 {
            font-size: 2em;
            color: #333;
        }
        .service-h3-title{
            padding-top: 20px;
        }
   
    </style>
</head>
<body>

<section class="service-three">
    <div class="container">
        <div class="section-title-two text-center">
            <div class="section-title-two__tagline-box">
                                    <span class="section-title-two__tagline">Our Services</span>
                                </div>
            <!-- <h3 class="below-section-two">We focus on delivering peace of mind and quality services to our clients.</h3> -->
              <div class="section-title-two__title-box sec-title-animation animation-style2">
                            <h2 class="section-title-two__title title-animation">
                                We focus on delivering peace of mind and quality services to our clients
                            </h2>
                        </div>
        </div>

        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <!-- Slide 1 -->
                    <li class="glide__slide">
                        <div class="main-img-container">
                            <img src="assets/images/services/services-2-1.jpg" alt="Mechanical Services">
                        </div>
                        <div class="card">
                            <!-- <img class="small-img" src="assets/images/services/small-img-1.jpg" alt="Small Icon"> -->
                            <div class="service-three__icon">
                                    <span class="icon-ac1"></span>
                                </div>
                            <h3 class="service-three__title service-h3-title"><a href="services.php">Mechanical Services</a></h3>
                            <p class="service-three__text">Comprehensive mechanical services for your needs. Trust our expertise to handle all aspects of mechanical engineering with precision and care.</p>
                             <div class="service-three__read-more">
                                    <a href="services.php">Read More<span
                                            class="icon-arrow-right"></span></a>
                                </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li class="glide__slide">
                        <div class="main-img-container">
                            <img src="assets/images/services/services-2-2.jpg" alt="Electrical Services">
                        </div>
                        <div class="card">
                            <div class="service-three__icon">
                                    <span class="icon-ac1"></span>
                                </div>
                            <h3 class="service-three__title service-h3-title"><a href="services.php">Electrical Services</a></h3>
                            <p class="service-three__text">Expert solutions for all electrical systems, ensuring your safety and efficiency with cutting-edge technology and highly skilled professionals.</p>
                              <div class="service-three__read-more">
                                    <a href="services.php">Read More<span
                                            class="icon-arrow-right"></span></a>
                                </div>
                        </div>
                    </li>
 <!-- Slide 3 -->
                    <li class="glide__slide">
                        <div class="main-img-container">
                            <img src="assets/images/services/services-2-1.jpg" alt="Mechanical Services">
                        </div>
                        <div class="card">
                         <div class="service-three__icon">
                                    <span class="icon-ac1"></span>
                                </div>
                            <h3 class="service-three__title service-h3-title"><a href="services.php">Civil Services</a></h3>
                            <p class="service-three__text">Comprehensive mechanical services for your needs. Trust our expertise to handle all aspects of mechanical engineering with precision and care.</p>
                              <div class="service-three__read-more">
                                    <a href="services.php">Read More<span
                                            class="icon-arrow-right"></span></a>
                                </div>
                        </div>
                    </li>
<!-- Slide 4-->
                    <li class="glide__slide">
                        <div class="main-img-container">
                            <img src="assets/images/services/services-2-1.jpg" alt="Mechanical Services">
                        </div>
                        <div class="card">
                           <div class="service-three__icon">
                                    <span class="icon-ac1"></span>
                                </div>
                            <h3 class="service-three__title service-h3-title"><a href="services.php">Consultency Services</a></h3>
                            <p class="service-three__text">Comprehensive mechanical services for your needs. Trust our expertise to handle all aspects of mechanical engineering with precision and care.</p>
                              <div class="service-three__read-more">
                                    <a href="services.php">Read More<span
                                            class="icon-arrow-right"></span></a>
                                </div>
                        </div>
                    </li>

<!-- Slide 5-->
                    <li class="glide__slide">
                        <div class="main-img-container">
                            <img src="assets/images/services/services-2-1.jpg" alt="Mechanical Services">
                        </div>
                        <div class="card">
                           <div class="service-three__icon">
                                    <span class="icon-ac1"></span>
                                </div>
                            <h3 class="service-three__title service-h3-title"><a href="services.php">Other Services</a></h3>
                            <p class="service-three__text">Comprehensive mechanical services for your needs. Trust our expertise to handle all aspects of mechanical engineering with precision and care.</p>
                              <div class="service-three__read-more">
                                    <a href="services.php">Read More<span
                                            class="icon-arrow-right"></span></a>
                                </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    new Glide('.glide', {
        type: 'carousel',
        perView: 3,
        gap: 15,
        autoplay: 2000,
        hoverpause: true,
        focusAt: 'center'
    }).mount();
</script>

</body>
</html>
