<?php include( "assets/functions.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php PrintHeadMetadata( "Campus Space | Team"); ?>
    <link rel="icon" href="assets/img/logo_1.png">
</head>

<body>
	<div id="page-preloader"><span class="spinner"></span>
	</div>
	<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
		<div id="wrapper">
			<?php include ( "assets/header.php"); ?>
			<div id="spacing"> </div>
			<div class="wrap-title-page">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="ui-title-page">OUR TEAM</h1>
						</div>
					</div>
				</div>
			</div>
			<main class="main-content">
				<center>
					<div class="ui-subtitle-block">
					</div>
				</center>
				<section id="portfolio">
					<div class="container-fluid">
						<div class="posts-wrap">
							<ul class="portfolio-filter text-center">
								<li><a id="leadership" class="btn btn-default active" href="#" data-filter=".leadership"	>Overall Team</a>
								</li>
							</ul>
							<div class=" portfolio-items" style="z-index:1;">
							<!--Team Members' details -->
								<div class="col-xs-6 col-sm-4 col-md-6 portfolio-item leadership">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/rishabh.jpg" height="250" width="100%" alt="foto">
												<div class="staff__hover">
													<a id="myBtn1" class="btn btn-primary btn-effect">
														<center>VIEW PROFILE</center>
													</a>
												</div>
											</div>
											<div class="staff__inner staff__inner_mod-a">
												<h3 class="staff__title">Rishabh Chauhan</h3>
												<div class="staff__categories"><b>BACK-END DEVELOPER</b>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<div class="col-xs-6 col-sm-4 col-md-6 portfolio-item leadership">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/saifus.jpg" height="250" width="100%" alt="foto">
												<div class="staff__hover">
													<a id="myBtn2" class="btn btn-primary btn-effect">
														<center>VIEW PROFILE</center>
													</a>
												</div>
											</div>
											<div class="staff__inner staff__inner_mod-a">
												<h3 class="staff__title">Syed Saifus Zoha</h3>
												<div class="staff__categories"><b>CONTENT COLLECTION</b>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<div class="col-xs-6 col-sm-4 col-md-6 portfolio-item leadership">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/kaushal.jpg" height="250" width="100%" alt="foto">
												<div class="staff__hover">
													<a id="myBtn3" class="btn btn-primary btn-effect">
														<center>VIEW PROFILE</center>
													</a>
												</div>
											</div>
											<div class="staff__inner staff__inner_mod-a">
												<h3 class="staff__title">Kaushal Swami</h3>
												<div class="staff__categories"><b>FRONT-END DEVELOPER</b>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div id="myModal1" class="modal" style="z-index:100;">
								<!-- Modal content -->
								 <div class="modal-content">
									<div class="modal-header"> <span class="close 47">×</span>
										<div class="img"></div><img class="img-responsive" src="assets/img/team/rishabh.jpg" height="auto" width="100" alt="foto" align="middle">
										<h2> Rishabh Chauhan </h2> </div>
									<div class="modal-body">
										<p><b>Back-end Developer</b>
										</p>
										<p>Founder and Lead Developer of CollegeSpace. Technology is my way of Life. I'm currently pursuing my undergraduate degree in Computer Science Engineering at Sikkim Manipal Institute of Technology. I have been a GitHub Extern & am currently an incoming Research Intern in IIT Delhi.</p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/rishiiii_99/"></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" target="_blank" href="https://www.linkedin.com/in/rishabh-chauhan-rc/"></a>
											</li>
										</ul>
									</div>
								</div> 
							</div>
							<script>
								var modal47 = document.getElementById('myModal1');
								// Get the button that opens the modal
								var btn47 = document.getElementById("myBtn1");
								// Get the element that closes the modal
								var span47 = document.getElementsByClassName("47")[0];
								// When the user clicks the button, open the modal
								btn47.onclick = function() {
										modal47.style.display = "block";
									}
									// closing the modal
								span47.onclick = function() {
										modal47.style.display = "none";
									}
									// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == modal47) {
										modal47.style.display = "none";
									}
								}
							</script>
							<div id="myModal46" class="modal" style="z-index:100;">
								<!-- Modal content -->
								 <div class="modal-content">
									<div class="modal-header"> <span class="close 46">×</span>
										<div class="img"></div><img class="img-responsive" src="assets/img/team/saifus.jpg" height="100" width="100" alt="foto" align="middle">
										<h2> Syed Saifus Zoha </h2> </div>
									<div class="modal-body">
										<p><b>Content Collector</b> </p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/s_saifus_/"></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" target="_blank" href="https://www.linkedin.com/in/syedsaifuszoha/"></a>
											</li>
										</ul>
									</div>
								</div> 
							</div>
							<script>
								var modal46 = document.getElementById('myModal46');
								// Get the button that opens the modal
								var btn46 = document.getElementById("myBtn2");
								// Get the element that closes the modal
								var span46 = document.getElementsByClassName("46")[0];
								// When the user clicks the button, open the modal
								btn46.onclick = function() {
										modal46.style.display = "block";
									}
									// closing the modal
								span46.onclick = function() {
										modal46.style.display = "none";
									}
									// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == modal46) {
										modal46.style.display = "none";
									}
								}
							</script>
							<div id="myModal21" class="modal" style="z-index:100;">
								<!-- Modal content -->
								<div class="modal-content">
									<div class="modal-header"> <span class="close 21">×</span>
										<div class="img"></div><img class="img-responsive" src="assets/img/team/kaushal.jpg" height="100" width="100" alt="foto" align="middle">
										<h2> Kaushal Swami </h2> </div>
									<div class="modal-body">
										<p>Co-Founder and Developer of CollegeSpace. Technology is my way of Life. I'm currently pursuing my undergraduate degree in Computer Science Engineering at Sikkim Manipal Institute of Technology. I am an ardent follower of Anime. I did a 1 month summer reseach internship at MAHE.</p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/kaushal.swami/"></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" target="_blank" href="https://www.linkedin.com/in/kaushal-swami/"></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<script>
								var modal21 = document.getElementById('myModal21');
								// Get the button that opens the modal
								var btn21 = document.getElementById("myBtn3");
								// Get the element that closes the modal
								var span21 = document.getElementsByClassName("21")[0];
								// When the user clicks the button, open the modal
								btn21.onclick = function() {
										modal21.style.display = "block";
									}
									// closing the modal
								span21.onclick = function() {
										modal21.style.display = "none";
									}
									// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
									if (event.target == modal21) {
										modal21.style.display = "none";
									}
								}
							</script>
						</div>
						<!-- end layout-theme -->
					</div>
				</section>
				<script>
					$(document).ready(function() {
						$("#webdev").click(function() {
							$("div.webd").removeClass('hide');
							$("img.lazy_webdev").lazyload();
						});
						$("#content").click(function() {
							$("div.contentc").removeClass('hide');
							$("img.lazy_content").lazyload();
						});
						$("#writer").click(function() {
							$("div.contentw").removeClass('hide');
							$("img.lazy_cw").lazyload();
						});
						$("#designer").click(function() {
							$("div.designer").removeClass('hide');
							$("img.lazy_designer").lazyload();
						});
						$("#alumni").click(function() {
							$("div.alum").removeClass('hide');
							$("img.lazy_alumni").lazyload();
						});
					});
				</script>
				<script type="text/javascript" src="team/js/jquery.js"></script>
				<script type="text/javascript" src="team/js/jquery.isotope.min.js"></script>
				<script type="text/javascript" src="team/js/lightbox.min.js"></script>
				<script type="text/javascript" src="team/js/main.js"></script>
				<script type="text/javascript" src="team/js/jquery.lazyload.js"></script>
				<?php include ( "assets/footer.php");?> </body>

</html>