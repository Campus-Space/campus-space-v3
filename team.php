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
								<li><a id="leadership" class="btn btn-default active" href="#" >Overall Team</a>
								</li>
							</ul>
							<div class=" portfolio-items" style="z-index:1;">
							<!--Team Members' details -->
								<div class="col-xs-6 col-sm-4 col-md-4 portfolio-item ">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/mansimarkaur.jpg" height="250" width="100%" alt="foto">
												<div class="staff__hover">
													<a id="myBtn1" class="btn btn-primary btn-effect">
														<center>VIEW PROFILE</center>
													</a>
												</div>
											</div>
											<div class="staff__inner staff__inner_mod-a">
												<h3 class="staff__title">Rishab Chauhan</h3>
												<div class="staff__categories"><br>BACK-END DEVELOPER</b>
												</div>
											</div>
										</div>
									</div>
								</div> 
								<div class="col-xs-6 col-sm-4 col-md-4 portfolio-item ">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/navdha.jpg" height="250" width="100%" alt="foto">
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
								<div class="col-xs-6 col-sm-4 col-md-4 portfolio-item ">
									<div class="portfolio-wrapper">
										<div class="staff">
											<div class="staff__media"><img class="img-responsive" src="assets/img/team/ayushgarg.jpg" height="250" width="100%" alt="foto">
												<div class="staff__hover">
													<a id="myBtn3" class="btn btn-primary btn-effect">
														<center>VIEW PROFILE</center>
													</a>
												</div>
											</div>
											<div class="staff__inner staff__inner_mod-a">
												<h3 class="staff__title">Kaushal Swami</h3>
												<div class="staff__categories"><b>FRONT-END DEVELOPER<br> </br></b>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div id="myModal1" class="modal" style="z-index:100;">
								<!-- Modal content -->
								 <div class="modal-content">
									<div class="modal-header"> <span class="close 47">×</span>
										<div class="img"></div><img class="img-responsive" src="assets/img/team/tushar.jpg" height="auto" width="100" alt="foto" align="middle">
										<h2>Rishab Chauhan</h2> </div>
									<div class="modal-body">
										<p><b>Back-end Developer</b>
										</p>
										<p>Co-Founder and Lead Developer of CollegeSpace. Technology is my way of Life. I may have a degree in Instrumentation but Computers are my passion. I am an ardent follower of Hollywood and an amateur Gamer. During college, I did a 2 month internship at Accenture and Sify. Post college I joined Sapient and after a successful stint spanning two years, I recently joined Bharti Airtel as an Assistant Manager (Backend Development).</p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-facebook" href="https://www.facebook.com/tushar.gupta.9828"></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" href="https://www.linkedin.com/in/tushar-gupta-a9721611a"></a>
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
										<div class="img"></div><img class="img-responsive" src="assets/img/team/apoorv.jpg" height="100" width="100" alt="foto" align="middle">
										<h2> Syed Saifus Zoha </h2> </div>
									<div class="modal-body">
										<p><b> 2013-2017</b>
										</p>
										<p><b>Content Collector</b> </p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-facebook" href=" https://www.facebook.com/apoorv.gupta.3701 "></a>
											</li>
											<li>
												<a class="icon fa fa-google-plus" href=" https://plus.google.com/u/0/113089577561642051777 "></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" href=" https://in.linkedin.com/in/apoorv-gupta-3a8561105 "></a>
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
										<div class="img"></div><img class="img-responsive" src="assets/img/team/shwetank.jpg" height="100" width="100" alt="foto" align="middle">
										<h2> Kaushal Swami </h2> </div>
									<div class="modal-body">
										<p><b> 2013-2017</b>
										</p>
										<p>I'm currently pursuing my undergraduate degree in Information Technology from NSIT. In my fourth year now, CollegeSpace has been deeply integral to my personal & professional growth, also teaching me how to work better in a team. I'm also an avid drummer, a keen footballer & an ardent Liverpool FC fan! </p>
									</div>
									<div class="modal-footer">
										<ul class="social-links list-unstyled">
											<li>
												<a class="icon fa fa-facebook" href=" https://www.facebook.com/shwetank95 "></a>
											</li>
											<li>
												<a class="icon fa fa-twitter" href=" https://twitter.com/shw3tank "></a>
											</li>
											<li>
												<a class="icon fa fa-linkedin" href=" https://in.linkedin.com/in/shwetank-pandey-079609a2 "></a>
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