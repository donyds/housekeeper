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

<style type="text/css">

.input-group-text{

	    background-color: #f7f7f7;

    border: 1px solid #f7f7f7;

}

</style>

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

				<div class="col-lg-9 col-xl-10 mx-auto maxw100flex-992">

					<div class="row mx-0">

						<div class="col-lg-12">



							  <!--=====header-n-js======-->

                <?php include(APPPATH.'views/include/mobile-dashboard-sidebar.php'); ?>



                       <!--=====/Fotter-n-js=====-->



							

						</div>

						<div class="col-lg-12 mb10">

							<div class="">

								<h2 class="breadcrumb_title">My Profile</h2>

							</div>

						</div> 
           
         

						<div class="col-lg-12">

							<!--succ alert -->
							<?php if($this->session->flashdata('profile_succ')){ ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?php echo $this->session->flashdata('profile_succ'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<?php $this->session->unset_userdata('profile_succ'); } ?>
		          <!--succ alert -->
		          
		          <?php
		          $user_id = $this->session->userdata('user_id');
		          $udata   = $this->Model->getData('users',array('user_id' => $user_id));
		          ?>
							<form method="post" action="<?php echo base_url();?>user/upd_profile">
							

							

								<div class="row">

									

											<div class="col-lg-6 col-xl-6">

												<div class="my_profile_setting_input form-group my_dashboard_review">

											    	<label for="">Fullname</label>

											    	<input type="text" name="fullname" class="form-control" value="<?php echo $udata->fullname;?>" placeholder="Fullname" maxlength="15">
												<small class="text-danger"><?php echo form_error('fullname');?></small>
                           
												</div>


											</div>

											<div class="col-lg-6 col-xl-6">

												<div class="my_profile_setting_input form-group my_dashboard_review">

											    	<label for="">Email</label>

											    	<input type="email" name="email" class="form-control" value="<?php echo $udata->email;?>" placeholder="Email" maxlength="25">
												    <small class="text-danger"><?php echo form_error('email');?></small>

												</div>


											</div>





											<div class="col-lg-6 col-xl-6">

												<div class="my_profile_setting_input form-group my_dashboard_review">

											    	<label for="formGroupExampleInput10">Mobile</label>

														<input type="text" name="phone" class="form-control" value="<?php echo $udata->phone;?>"  onkeypress="return onlyNumberKey(event)" maxlength="11" size="50%" / placeholder="Mobile Number">
												<small class="text-danger"><?php echo form_error('phone');?></small>

												</div>


											</div>

											<div class="col-lg-6 col-xl-6">

												<div class="my_profile_setting_input form-group my_dashboard_review">

											    	<label for="formGroupExampleInput11">Address</label>

											    	<input type="text" name="address" class="form-control" value="<?php echo $udata->address;?>" placeholder="Address" maxlength="25">
												<small class="text-danger"><?php echo form_error('address');?></small>

												</div>


											</div>

											<div class="col-xl-12">

												<div class="my_profile_setting_input">
                          <input type="hidden" name="user_id" value="<?php echo $udata->user_id;?>">
													<button class="btn btn1">Update</button>

													

												</div>

											</div>

										</div>

								
							

						
				  	</form>
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



   <script type="text/javascript" src="js/smartuploader.js"></script>

  <!--=====/Fotter-n-js=====-->


<script>

function onlyNumberKey(evt) {
var ASCIICode = (evt.which) ? evt.which : evt.keyCode

if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))

return false;

return true;

}

</script>




</body>



</html>