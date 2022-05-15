<?php include( "assets/functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php PrintHeadMetadata( "Campus Space | Contact Us"); ?> 
        <link rel="icon" href="assets/img/logo_1.png">
    </head>

    <body>
        <div id="page-preloader"><span class="spinner"></span> </div>
        <div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
            <div id="wrapper">
                <?php include ( "assets/header.php"); ?>
                <div id="spacing"> </div>
                <div class="wrap-title-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="ui-title-page">contact us</h1> 
                            </div>
                        </div>
                    </div>
                </div>
                <main class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <section class="section_contacts">
                                    <h2 class="ui-title-inner decor decor_mod-a">Get in Touch with us</h2>
                                    <p>We are here to help you</p>
                                    <ul class="list-social list-inline">
                                        <li> <a href="https://www.facebook.com/SMIT.SMU/" target="_blank"><i class="icon fa fa-facebook"></i></a> </li>
                                        <li> <a href="https://twitter.com/manipal_sikkim?lang=en" target="_blank"><i class="icon fa fa-twitter"></i></a> </li>
                                        <li> <a href="https://www.linkedin.com/school/sikkim-manipal-institute-of-technology/?originalSubdomain=in" target="_blank"><i class="icon fa fa-linkedin"></i></a> </li>
                                    </ul>
                                    <ul class="list-contacts list-unstyled">
                                        <li class="list-contacts__item"> <i class="icon stroke icon-Phone2"></i>
                                            <div class="list-contacts__inner">
                                                <div class="list-contacts__title">PHONE</div>
                                                <div class="list-contacts__info">+91 9811994561</div>
                                            </div>
                                        </li>
                                        <li class="list-contacts__item"> <i class="icon stroke icon-Mail"></i>
                                            <div class="list-contacts__inner">
                                                <div class="list-contacts__title">EMAIL</div>
                                                <div class="list-contacts__info">smit_campusspace@gmail.com</div>
                                            </div>
                                        </li>
                                        <li class="list-contacts__item"> <i class="icon stroke icon-WorldWide"></i>
                                            <div class="list-contacts__inner">
                                                <div class="list-contacts__title">WEB</div>
                                                <div class="list-contacts__info"><a href="https://campus-space-v2.herokuapp.com">Campus Space V2</a> </div>
                                                <!-- <div class="list-contacts__info"><a href="http://www.nsitpedia.collegespace.in">NSITPedia</a> </div> -->
                                                <div class="list-contacts__info"><a href="https://smu.edu.in/smit.html/">Web Bulletin</a> </div>
                                            </div>
                                        </li>
                                        <li class="list-contacts__item"> <i class="icon stroke icon-House"></i>
                                            <div class="list-contacts__inner">
                                                <div class="list-contacts__title">location</div>
                                                <div class="list-contacts__info">Majitar, Rangpo, East Sikkim 737136</div>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <div class="col-md-7">
                                <div class="section_map">
                                    <h2 class="ui-title-inner decor decor_mod-a">OUR LOCATION</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.164295052625!2d88.49964071485898!3d27.182572583012014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a744f1c716eb%3A0xd8c443744048d4d1!2sSikkim%20Manipal%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1644739637229!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section_contacts-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="ui-title-block">Send <strong>Us Message</strong></h2>
                                    <div class="wrap-subtitle">
                                        <div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback or want to ask any questions</div>
                                    </div>
                                    <div id="success" class="alert alert-success"> <strong>Success!</strong> Your message was sent successfully! </div>
                                    <div id="error" class="alert alert-danger"> <strong>Failed!</strong> Something went wrong, try refreshing and submitting the form again. </div>
                                    <form id="contactForm" class="form-contact ui-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="name" class="form-control" type="text" placeholder="Full Name" required> 
                                            </div>
                                                <div class="col-md-6">
                                                    <input name="subject" class="form-control" type="text" placeholder="Subject"> 
                                                </div>
                                            <div class="col-xs-12">
                                                <textarea name="message" class="form-control" required rows="11"></textarea>
                                                <button class="btn btn-primary btn-effect">SEND NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
            <?php include "assets/footer.php"; ?> 
    </body>
</html>