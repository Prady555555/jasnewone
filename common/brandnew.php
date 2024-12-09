<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Section</title>
    <!-- <link rel="stylesheet" href="path/to/glide.core.min.css">
    <link rel="stylesheet" href="path/to/glide.theme.min.css"> -->
    <style>
        /* Custom Styles */
        .brand-two {
            padding: 50px 0;
            background-color: #f9f9f9;
            margin-top: 10px;
        }

        .brand-slider-alignment {
            margin-top: 30px;
        }

        .brand-two__inner {
            text-align: center;
        }

        .glide__slides {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-two__single {
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .brand-two__single:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        .brand-two__img img {
            max-width: 120px;
            transition: transform 0.3s ease, filter 0.3s ease;
            border-radius: 10px;
        }

        .brand-two__img img:hover {
            transform: rotate(-5deg) scale(1.1);
            filter: brightness(1.2);
        }

        /* Glide.js navigation buttons */
        .glide__arrow {
            background: #fff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .glide__arrow:hover {
            background: #333;
            color: #fff;
        }

        .glide__arrow--left {
            position: absolute;
            left: -20px;
            top: 50%;
            transform: translateY(-50%);
        }

        .glide__arrow--right {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
        }

        @media (max-width: 768px) {
            .brand-two__img img {
                max-width: 80px;
            }

            .glide__arrow {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .brand-two__img img {
                max-width: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Brand Section Start -->
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
    <section class="brand-two">
        <div class="container">
            <div class="brand-two__inner">
                <div class="glide" id="brandCarousel">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <!-- Brand Items -->
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client1.png" alt="Client 1">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client2.png" alt="Client 2">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client3.png" alt="Client 3">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client4.png" alt="Client 4">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client5.png" alt="Client 5">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client6.png" alt="Client 6">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client7.png" alt="Client 7">
                                </div>
                            </li>
                            <li class="glide__slide brand-two__single">
                                <div class="brand-two__img">
                                    <img src="assets/images/brand/client8.png" alt="Client 8">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Navigation Arrows -->
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">❮</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section End -->

    <script src="path/to/glide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Glide('#brandCarousel', {
                type: 'carousel',
                startAt: 0,
                perView: 4,
                gap: 20,
                autoplay: 3000,
                hoverpause: true,
                animationDuration: 800,
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
