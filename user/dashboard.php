<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="">

<meta name="description" content="">

<meta name="" content="">

<!-- css file -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dashbord_navitaion.css">

<!-- Responsive stylesheet -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

<!-- Title -->

<title>House Keepers</title>

<!-- Favicon -->

<link href="<?php echo base_url();?>assets/images/logo.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />

<link href="<?php echo base_url();?>assets/images/logo.ico" sizes="128x128" rel="shortcut icon" />



</head>

<body>

<div class="wrapper">

	<div class="preloader"></div>



   <!--=====header-n-js======-->

<?php include(APPPATH.'views/include/dashboard-header.php'); ?>



  <!--=====/Fotter-n-js=====-->



  	<!-- Our Dashbord -->

	<section class="our-dashbord dashbord bgc-f7 pb50">

		<div class="container-fluid">

			<div class="row">

				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>

				<div class="col-lg-9 col-xl-10 maxw100flex-992">

					<div class="row mx-0">

						<div class="col-lg-12">



							  <!--=====header-n-js======-->

                        <?php include(APPPATH.'views/include/mobile-dashboard-sidebar.php'); ?>



                       <!--=====/Fotter-n-js=====-->



							

						</div>

						<div class="col-lg-12 mb10">

							<div class="">

								<h2 class="breadcrumb_title">Dashbord</h2>

								

							</div>

						</div> 



						

						

						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">

							<div class="ff_one style3">

								<div class="icon"><img src="<?php echo base_url();?>assets/images/Activ-jobs-ico.png"></div>

								<div class="detais">

									<div class="timer">12</div>

									<p>Active jobs</p>

								</div>

							</div>

						</div>



						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">

							<div class="ff_one style3">

								<div class="icon"><img src="<?php echo base_url();?>assets/images/New-Jobs-ico.png"></div>

								<div class="detais">

									<div class="timer">12</div>

									<p>Active jobs</p>

								</div>

							</div>

						</div>



						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">

							<div class="ff_one style3">

								<div class="icon"><img src="<?php echo base_url();?>assets/images/TotalBalance-ico.png"></div>

								<div class="detais">

									<div class="timer">12</div>

									<p>Active jobs</p>

								</div>

							</div>

						</div>

						

						

					</div>

					<div class="row mt50">

						<div class="col-lg-12">

							<div class="copyright-widget text-center">

								<p>Copyright © 2021- 2025 House Keepers all rights reserved  | Designed &amp; Developed By <a href="https://developerbazaar.com/" target="_blank"><span style="color:#ff0000">Developer</span> <span style="color:#32cd32"> Bazaar</span> <span style="color:#ff0000">Technologies</span></a>



                </p>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>







 <!--=====Fotter-n-js======-->

<?php include(APPPATH.'views/include/dashboard-footer.php'); ?>

   

  <!--=====/Fotter-n-js=====-->







</body>



</html>