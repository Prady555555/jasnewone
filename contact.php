<!doctype html>
<html lang="en">
<head>
     <?php include ('common/header.php'); ?>
    <title>JAS Engineering -Contact us</title
</head>
<style>
.footer_area_two  {
  padding-top: 220px;
}
</style>
 <script src="https://www.google.com/recaptcha/api.js"></script>
 
<body>







<div class="page-wrapper">
   
<?php include ('common/navbar.php'); ?>


    <!--Page Header Start-->
    <section class="page-header">
        <!-- <div class="page-header__shape-1">
            <img src="assets/images/shapes/page-header-shape-1.png" alt="">
        </div> -->
        <div class="container">
            <div class="page-header__inner">
                <!-- <div class="page-header__img-1">
                    <img src="assets/images/resources/page-header-img-1.png" alt="">
                </div> -->
                <h3>Contact Us</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span class="icon-angle-right"></span></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-two__single">
                        <div class="contact-two__icon">
                            <span class="icon-call"></span>
                        </div>
                        <p>Contact Us</p>
                        <h3 class="mb-4"><a href="tel:+917028715057">+91 70287 15057</a></h3>
                    </div>
                </div>
                <!--Contact Two Single End-->
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-two__single">
                        <div class="contact-two__icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <p>Mail Us</p>
                        <h3 class="mb-4"><a href="mailto:sankar@jasengineering.in">sankar@jasengineering.in</a></h3>
                       
                    </div>
                </div>
                <!--Contact Two Single End-->
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-two__single">
                        <div class="contact-two__icon">
                            <span class="icon-location"></span>
                        </div>
                        <p>Our Office Location</p>
                        <h3 style="line-height: 30px;">SR No 21/4, O-Kranti Nagar, Kharadi Bypass Road, Pune - 411 014.</h3>
                    </div>
                </div>
                <!--Contact Two Single End-->
            </div>
        </div>
    </section>
    <!--Contact Two End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="container">
            <div class="contact-three__inner">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-three__left">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="google-map__one" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-three__right">
                            <h3 class="contact-three__form-title">Nice to hear from you</h3>
                            <form id="contasct-form" action="mail-script.php" class="contact-form-valisdated contact-three__form"
                                 method="POST">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-three__input-box">
                                            <input type="text" name="name" placeholder="Your name" required=""  maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-three__input-box">
                                            <input type="email" name="email" placeholder="Your Email" required=""  maxlength="150">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-three__input-box">
                                            <input type="number" placeholder="Mobile" name="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="mobile"  maxLength="14" minlength="10" >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-three__input-box">
                                            <input type="text" placeholder="Company" name="company" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-three__input-box text-message-box">
                                            <textarea name="message" placeholder="Messege" maxlength="200"></textarea>
                                        </div>
                                        <div class="contact-three__btn-box">
                                            <button type="submit" class="thm-btn contact-three__btn"
                                               >
                                                send a message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Three End-->


    <!--CTA One Start-->
    <!-- <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__img">
                    <img src="assets/images/resources/cta-one-img-1.png" alt="">
                </div>
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Get To Know Us</span>
                    </div>
                    <div class="section-title__title-box sec-title-animation animation-style2">
                        <h2 class="section-title__title title-animation">Save Money With Specials<br> Discount Offer
                        </h2>
                    </div>
                </div>
                <p class="cta-one__text">Pleasures to secure other greater pleasures, or else he endures pains<br>
                    to avoid worse pains to the selection circumstances</p>
                <div class="cta-one__btn-and-call-box">
                    <div class="cta-one__btn-box">
                        <a href="contact.html" class="cta-one__btn thm-btn">Get Appointment</a>
                    </div>
                    <div class="cta-one__call-box">
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="content">
                            <p>Make a call</p>
                            <h4><a href="tel:00554755242">00 55 475 5242</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--CTA One End-->

    <?php include ('common/footer.php') ?>




</div><!-- /.page-wrapper -->





<?php include ('common/script.php') ?>
        
</body>


</html>