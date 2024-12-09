<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Brand Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
        }

        .brand-section {
            padding: 5px 20px;
           
            text-align: center;
        }

        .brand-section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }

        .glide {
            position: relative;
            padding: 20px 0;
        }

        .glide__slides {
            display: flex;
            align-items: center;
            justify-content: center;
           
        }

        .brand-card {
            background: #fff;
            border-radius: 50%; /* Circular container */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensures the image remains circular */
            width: 150px; /* Ensures circular shape */
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
           
        }

        .brand-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .brand-card img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Ensures the image fits properly within the circle */
            border-radius: 50%;
            margin:0
        }

        .glide__arrow {
            background: #333;
            color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            transition: background 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .glide__arrow:hover {
            background: #555;
        }

        .glide__arrow--left {
            left: -20px;
        }

        .glide__arrow--right {
            right: -20px;
        }
       

        @media (max-width: 768px) {
            .brand-card {
                width: 120px;
                height: 120px;
            }

            .glide__arrow {
                width: 35px;
                height: 35px;
                font-size: 18px;
                left: -10px;
                right: -10px;
            }
        }

        @media (max-width: 480px) {
            .brand-card {
                width: 100px;
                height: 100px;
            }

            .glide__arrow {
                width: 30px;
                height: 30px;
                font-size: 16px;
                left: -5px;
                right: -5px;
            }
        }
    </style>
</head>
<body>

 <div class="section-title-two text-center brand-slider-alignment">
        <div class="section-title-two__tagline-box">
            <span class="section-title-two__tagline">Our clients</span>
             <div class="section-title-two__title-box sec-title-animation animation-style2">
                            <h2 class="section-title-two__title title-animation">
                                We focus on delivering peace of mind and quality services to our clients
                            </h2>
                        </div>
        </div>
    </div>

<section class="brand-section">
    
    <div class="glide" id="brandCarousel">
        <div class="glide__track" data-glide-el="track">
            

          
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client1.png" alt="Client 1" class="brand-card-img">
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client2.png" alt="Client 2">
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client3.png" alt="Client 3">
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client4.png" alt="Client 4">
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client5.png" alt="Client 5">
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client6.png" alt="Client 6">
                    </div>
                </li>
                 <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client7.png" alt="Client 7">
                    </div>
                </li>

                 <li class="glide__slide">
                    <div class="brand-card">
                        <img src="assets/images/brand/client8.png" alt="Client 8">
                    </div>
                </li>
            </ul>
             
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">❮</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">❯</button>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Glide('#brandCarousel', {
            type: 'carousel',
            perView: 6,
            gap: 30,
            autoplay: 2000,
            hoverpause: true,
            breakpoints: {
                1200: { perView: 3 },
                768: { perView: 2 },
                480: { perView: 1 },
            },
        }).mount();
    });
</script>

</body>
</html>
