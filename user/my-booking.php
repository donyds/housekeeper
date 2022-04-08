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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

<style type="text/css">
body.modal-open {
    padding-right: 0px;
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

				<div class="col-lg-9 col-xl-10 maxw100flex-992">

					<div class="row mx-0">

						<div class="col-lg-12">



							  <!--=====header-n-js======-->

                       <?php include(APPPATH.'views/include/mobile-dashboard-sidebar.php'); ?>



                       <!--=====/Fotter-n-js=====-->



							

						</div>

						<div class="col-lg-12 mb10">
							<div class="">
								<h2 class="breadcrumb_title">My Booking</h2>
							</div>
						</div> 


						<div class="col-lg-12">

						 <!-- alert start  -->
						 <?php if($this->session->flashdata('deny')){ ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php echo $this->session->flashdata('deny'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>

						<?php $this->session->unset_userdata('deny'); } ?>

						 <?php if($this->session->flashdata('sucdeny')){ ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php echo $this->session->flashdata('sucdeny'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<?php $this->session->unset_userdata('sucdeny'); } ?>

						<!-- alert -->

							<div class="my_dashboard_review mb40">

								<div class="savesearched_table">

										<div class="table-responsive mt0">

											<table class="table table-striped table-bordered" id="example" style="width:100%">

												<thead class="thead-light">

											    	<tr>

											    		<th>#</th>

											    		<th>Cleaner</th>

											    		<th>Plan</th>
											    		
											    		<th>Shift</th>
											    		
											    		<!-- <th>Area Code</th> -->
											    		
											    		<th>Day</th>

											    		<th>Start Date</th>
											    		<th>Status</th>
											    		<th>Action</th>



											    	</tr>

												</thead>

												<tbody>


            
            <?php if(is_array($booking)): ?>

						<?php 
						$i = 1;
						foreach($booking as $booking_job ){ 

							$job_id      = $booking_job['job_id'];
							$book_date   = $booking_job['book_date'];
							$day         = $booking_job['day'];
							$job_empid   = $booking_job['emp_id'];
							$job_primary = $booking_job['id'];
							$job_status  = $booking_job['status'];
              
                            //get schedul job data 
							$getjobdata = $this->Model->getData('job_scheduler',array('scheduler_id'=>$job_id));
							$emp_id = $getjobdata->emp_id;
							$shift  = $getjobdata->shift;
							$area   = $getjobdata->area_code;
							$plan_type = $getjobdata->plan_type;
                             
							if($job_empid == $emp_id){
							//get employee data 
							$getudata = $this->Model->getData('cleanner',array('emp_id'=>$emp_id));
							$fullname = $getudata->fullname;
							}else{

							//get employee data 
							$getudata = $this->Model->getData('cleanner',array('emp_id'=>$job_empid));
							$fullname = $getudata->fullname;

							}
							

							//get shift data 
							$getshiftdata = $this->Model->getData('shift',array('shift_id'=>$shift));
							$shift_f = $getshiftdata->from_time;
							$shift_t = $getshiftdata->to_time;
							$shift_h = $getshiftdata->hours;


						?>
				
			    	<tr>
			    	<td><?php echo $i; ?> </td>
					<td><?php echo $fullname;?></td>
					<td><?php if($plan_type == '0'){ echo "At a time"; } else if($plan_type == '1'){ echo "Once a week";}else if($plan_type == '2'){ echo "Twice a week";}else if($plan_type == '3'){ echo "Thrice a week";}?></td>
					<td><?php echo $shift_f;?> to <?php echo $shift_t;?> <?php echo $shift_h;?> hrs</td>
				
					
					<td><?php echo $day;?></td>
					<td><?php echo $book_date;?></td>
			    	
			    	<!-- <td><span class="list-inline-item"><a data-href="#" data-toggle="modal" data-target="#confirm-deny" class="text-white btn-danger"><span class="flaticon-garbage"></span> Deny a day</a></span>
			    	</td> -->
					<td><?php if($job_status == '1'){ echo '<i class="badge badge-success">Booked</i>'; }else if($job_status == '2'){ echo '<i class="badge badge-danger">Cancelled</i>';}?></td>
					<?php if($job_status == '1'){ ?>
					<td><button class="btn  btn-square btn-danger" data-href="<?php echo base_url();?>user/deny_day/<?php echo $job_primary?>" data-toggle="modal" data-target="#confirm-deny"><i class="la la-trash"></i> Deny a day</button></td>
                    <?php } else{ ?>
					<td><a href="javascript:(void)" class="btn  btn-square btn-danger"><i class="la la-trash"></i> Deny a day</a></td>
					<?php } ?>
						
			    	</tr> 

			    	<?php $i++; } ?>
            <?php endif; ?>


											</tbody>    	

										</table>

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


	<!-- Modal -->

	<!-- Modal -->

	

     <div class="modal fade" id="confirm-deny">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirm deny a day</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

                        
                            <div class="modal-body">
                                <p>Are you sure deny a day!</p>
                                <!-- <p class="debug-url"></p> -->
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-success btn-ok">Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
            
    <!---Modal ---> 





 <!--=====Fotter-n-js======-->

 <?php include(APPPATH.'views/include/dashboard-footer.php'); ?>

   

  <!--=====/Fotter-n-js=====-->

  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>





<script type="text/javascript">

$(document).ready(function() {

    $('#example').DataTable();

} );

</script>


<script>
$('#confirm-deny').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

});
</script>

</body>



</html>