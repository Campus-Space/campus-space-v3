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
                                <h1 class="ui-title-page">Feedback</h1> 
                            </div>
                        </div>
                    </div>
                </div>
                <main class="main-content">
                    <section class="section_contacts-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="ui-title-block"><strong>Send your feedback</strong></h2>
                                    <div class="wrap-subtitle">
                                        <div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback</div>
                                    </div>
                                    <div id="success" class="alert alert-success"> <strong>Success!</strong> Your message was sent successfully! </div>
                                    <div id="error" class="alert alert-danger"> <strong>Failed!</strong> Something went wrong, try refreshing and submitting the form again. </div>
                                    <form id="contactForm" class="form-contact ui-form" action="mailto:kaushalswami7178@gmail.com" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="name" class="form-control" type="text" placeholder="Full Name" required> 
                                            </div>
                                                <div class="col-md-6">
                                                    <input name="subject" class="form-control" type="text" placeholder="Subject"> 
                                                </div>
                                            <div class="col-xs-12">
                                                <textarea name="message" class="form-control" required rows="11"></textarea>
                                                <button class="btn btn-primary btn-effect" type="submit" value="Submit">SEND NOW</button>
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