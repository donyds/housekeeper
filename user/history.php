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

								<h2 class="breadcrumb_title">History</h2>

								

							</div>

						</div> 



						

						

						<div class="col-lg-12">

							<div class="my_dashboard_review mb40">

								<div class="col-lg-12">

									<div class="savesearched_table">

										<div class="table-responsive mt0">

											<table class="table">

												<thead class="thead-light">

											    	<tr>

											    		<th>#</th>

											    		<th>Order Date</th>

											    		<th>Order id</th>
											    		
											    		<th>Package</th>

											    		<th>Cleaner Name</th>
 
											    		<th>Amount </th>
														<th>Expiry Date</th>
											    		<th>Status</th>
											    		<th>Cleanner Profile</th>

											    	</tr>

												</thead>

												<tbody>

						<?php if(is_array($get_trans)): ?>

						<?php 
						$i = 1;
						foreach($get_trans as $transaction ){ 

							$job_id    = $transaction['job_id'];
							$is_done   = $transaction['is_done'];
							$user_id   = $transaction['user_id'];
							$order_id  = $transaction['order_id'];
              
                           //get schedul job data 
							$getjobdata = $this->Model->getData('job_scheduler',array('scheduler_id'=>$job_id));
							$emp_id = $getjobdata->emp_id;

							//get employee data 
							$getudata = $this->Model->getData('cleanner',array('emp_id'=>$emp_id));
							$fullname = $getudata->fullname;

							//expiry date of plan
							$get_exp = "SELECT * FROM `job_avalability` WHERE job_id='$job_id' AND order_id='$order_id' ORDER BY id DESC LIMIT 1";
							$expget  = $this->Model->getSqlData($get_exp);
							//print_r($expget);
                            foreach($expget as $vals){                 
							$book_date    = $vals['book_date'];


						?>
				<tr>

				<th><?php echo $i;?></th>

				<td><?php echo $transaction['timestamp'];?></td>

				<td><?php echo $transaction['order_id'];?></td>
				<td><?php if($transaction['package'] =='0'){ echo "At a time"; } else if($transaction['package'] =='1'){ echo "Once a week"; } else if($transaction['package'] =='2'){ echo "Twice a week"; } else if($transaction['package'] =='3'){ echo "Thrice a week"; }?></td>

				<td><?php echo $fullname;?></td>
				<td><?php echo $transaction['price'];?> KD</td>
			    <td><?php echo $book_date; ?></td>
 
				
				<td><?php if($is_done=='1'){ echo '<i class="badge badge-info">Active</i>';}else if($is_done=='2'){echo '<i class="badge badge-warning">Cancelled</i>';} ?></td>


				<td><a href="<?php echo base_url();?>user/cleaner_profile/<?php echo $emp_id;?>"><span class="flaticon-view"></span></a></td>

				</tr>
			  <?php $i++; }} ?>
        <?php endif; ?>



 	</tbody>

											</table>

										</div>

									</div>

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