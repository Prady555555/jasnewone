<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <title>Glide.js Carousel with Cards</title>
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
            width: 300px; /* Width of each slide */
            text-align: center;
            box-sizing: border-box;
            padding: 10px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            width: 100%; /* Ensures card width matches image width */
        }

        .card img {
            width: 100%; /* Image width matches the container */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px;
        }

        .card h3 {
            font-size: 1.2em;
            margin: 10px 0 5px;
            color: #333;
        }

        .card p {
            font-size: 1em;
            color: #444;
            line-height: 1.6;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-two {
            margin-bottom: 20px;
        }

        .section-title-two h2 {
            font-size: 2em;
            color: #333;
        }
    </style>
</head>
<body>

<section class="service-three">
    <div class="container">
        <div class="section-title-two text-center">
            
            <h2 class="section-title-two__title">Our Services</h2>
            <p>We focus on delivering peace of mind and quality services to our clients.</p>
        </div>

        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="card">
                            <img src="assets/images/services/services-2-1.jpg" alt="Mechanical Services">
                            <h3>Mechanical Services</h3>
                            <p>Comprehensive mechanical services for your needs. Trust our expertise to handle all aspects of mechanical engineering with precision and care.</p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="card">
                            <img src="assets/images/services/services-2-2.jpg" alt="Electrical Services">
                            <h3>Electrical Services</h3>
                            <p>Expert solutions for all electrical systems, ensuring your safety and efficiency with cutting-edge technology and highly skilled professionals.</p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="card">
                            <img src="assets/images/services/services-2-3.jpg" alt="Civil Services">
                            <h3>Civil Services</h3>
                            <p>Reliable civil engineering and infrastructure services tailored to meet the highest standards of quality and sustainability in every project.</p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="card">
                            <img src="assets/images/services/services-2-1.jpg" alt="Consultancy">
                            <h3>Consultancy</h3>
                            <p>Professional consultancy for various projects, guiding you with insights, strategies, and solutions to ensure success and efficiency.</p>
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
        autoplay: 1000,
        hoverpause: true,
        focusAt: 'center'
    }).mount();
</script>

</body>
</html>
