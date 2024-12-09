<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Footer Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .footer-logo img {
            width: 180px;
            margin-bottom: 20px;
        }

        .footer-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 30px;
        }

        .footer-column {
            flex: 1;
            min-width: 220px;
            max-width: 300px;
            text-align: left;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
            color: #ffc949; /* Updated color */
        }

        .footer-column a {
            color: #bbb;
            text-decoration: none;
            font-size: 0.95rem;
            line-height: 1.8;
            transition: color 0.3s;
            display: block;
        }

        .footer-column a:hover {
            color: #ffc949; /* Hover color updated */
        }

        .footer-contact ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-contact li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .footer-contact li .icon {
            margin-right: 10px;
            font-size: 20px;
            color: #ffc949; /* Updated icon color */
        }

        .footer-contact li p {
            color: #bbb;
            font-size: 0.95rem;
            margin: 0;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 30px;
            text-align: center;
        }

        .footer-bottom p {
            font-size: 0.9rem;
            color: #bbb;
            margin: 0;
        }

        .footer-bottom a {
            color: #ffc949; /* Bottom links updated color */
            text-decoration: none;
            font-weight: 600;
        }

        .footer-bottom .footer-bottom-menu {
            margin-top: 10px;
            display: inline-flex;
            gap: 20px;
        }

        .footer-bottom .footer-bottom-menu a:hover {
            color: #fff;
        }

        @media (max-width: 768px) {
            .footer-section {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                text-align: center;
                margin-bottom: 30px;
            }
        }

        /* WhatsApp Floating Button */
        .whats-app {
            position: fixed;
            bottom: 40px;
            left: 20px;
            background-color: #ffc949; /* Updated WhatsApp button color */
            color: #1a1a1a;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
            transition: background-color 0.3s;
        }

        .whats-app:hover {
            background-color: #e6a700; /* Darker shade on hover */
        }

    </style>
</head>
<body>

<!-- WhatsApp Floating Button -->
<a class="whats-app" href="whatsapp://send?abid=+917028715057&text=Hi%2C%20JAS Engineering!" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Footer -->
<footer>
    <div class="footer-logo">
        <a href="index.php"><img src="assets/images/resources/footer-logo-2.png" alt="JAS Engineering"></a>
    </div>

    <div class="footer-section">
        <div class="footer-column">
            <h3>About Us</h3>
            <p>JAS Engineering specializes in delivering high-quality Electrical projects, including Control Rooms, Transmission Line Foundations, and Erection Works.</p>
        </div>

        <div class="footer-column footer-links">
            <h3>Quick Links</h3>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="project.php">Projects</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="footer-column footer-services">
            <h3>Our Services</h3>
            <a href="#">Electrical Projects</a>
            <a href="#">ELV-EHV Substations</a>
            <a href="#">Erection Works</a>
            <a href="#">Thermal Power Stations</a>
            <a href="#">Transmission Line Foundations</a>
        </div>

        <div class="footer-column footer-contact">
            <h3>Contact Us</h3>
            <ul>
                <li><i class="icon-phone-call"></i><p><a href="tel:+917028715057">+917028715057</a></p></li>
                <li><i class="icon-envelope"></i><p><a href="mailto:sankar@jasengineering.in">sankar@jasengineering.in</a></p></li>
                <li><i class="icon-location"></i><p>O-Kranti, Kharadi Bypass Road, Pune</p></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 JAS Engineering. All Rights Reserved.</p>
        <div class="footer-bottom-menu">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Sitemap</a>
        </div>
    </div>
</footer>

</body>
</html>
