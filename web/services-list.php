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
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

<!-- Title -->
<title>House Keepers</title>
<!-- Favicon -->
<link href="<?php echo base_url();?>assets/images/
logo.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url();?>assets/images/
logo.ico" sizes="128x128" rel="shortcut icon" />
<style>
small.text-danger p {
    color: #dc3545!important;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="preloader"></div>
<!--=====Header-nav=====-->
<?php include(APPPATH.'views/include/header-nav.php'); ?>
<!--=====/Header-nav=====-->
<!------Don't-delete-------->
<li class="list-inline-item" style="display:none ;opacity: 0;">
<div class="dd_content2">
<div class="pricing_acontent">
<span id="slider-range-value1"></span>
<span id="slider-range-value2"></span>
<div id="slider"></div>
</div>
</div>
</li>
<!------Don't-delete-------->


<!--=====/Fotter-n-js=====-->
<!-------Don't-delete------->
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
<div class="container">
<div class="row">
<div class="col-xl-6">
<div class="breadcrumb_content">
<h4 class="breadcrumb_title">Services List</h4>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Services List</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<!-- Listing Grid View -->
<section class="our-listing bgc-f7 pb30-991 pt100-360">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="breadcrumb_content style2 mb0-991">
<h2 class="breadcrumb_title">Search Job</h2>
</div>
</div>
</div>
<div class="row" id="scroll_top">

<!-- <div class="alert alert-danger show_choose" role="alert" style="display:none;"></div> -->
<div class="col-lg-12 col-xl-12">
<div class="sidebar_listing_grid1 dn-991">
<div class="sidebar_listing_list">
<div class="sidebar_advanced_search_widget">
<form method="post" action="<?php echo base_url();?>home/search_job">
<ul class="sasw_list mb0">
<div class="row">

<div class="col-lg-3 col-md-3 col-sm-3 col-6">

<li>
<div class="search_option_two">
<label>Package</label>

<div class="candidate_revew_select">
<select name="package" class="selectpicker w100 show-tick">
<option value="">Select</option>
<option value="0" <?php echo (set_value('package')=='0')?" selected=' selected'":""?>>At a time</option>
<option value="1" <?php echo (set_value('package')=='1')?" selected=' selected'":""?>>Once a Week</option>
<option value="2" <?php echo (set_value('package')=='2')?" selected=' selected'":""?>>Twice a Week</option>
<option value="3" <?php echo (set_value('package')=='3')?" selected=' selected'":""?>>Thrice a Week</option>

</select>
<small class="text-danger"><?php echo form_error('package');?></small>

</div>
</div>
</li>
</div><!--- --> 

<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<li>
<div class="search_option_two">
<label>Shift</label>

<div class="candidate_revew_select">
<select name="shift_li" class="selectpicker w100 show-tick" data-show-subtext="false" data-live-search="true"> 
<option value="">Select</option>

<?php 
foreach($shift as $shift_list){ ?>
<option value="<?php echo $shift_list->shift_id;?>" <?php echo (set_value('shift_li')== $shift_list->shift_id)?" selected=' selected'":""?>><?php echo $shift_list->from_time;?> to <?php echo $shift_list->to_time;?> <?php echo $shift_list->hours;?> hrs</option>

<?php } ?>
</select>
<small class="text-danger"><?php echo form_error('shift_li');?></small>

</div>
</div>
</li>
</div><!--- --> 
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<li>
<div class="search_option_two">	
<label>Area</label>

<div class="candidate_revew_select">
<select name="area_code" class="selectpicker w100 show-tick" data-show-subtext="false" data-live-search="true">
<option value="">Select</option>

<?php 
foreach($area as $area_code){ ?>
<option value="<?php echo $area_code->area_uniqid;?>,<?php echo $area_code->area_code;?>" <?php echo (set_value('area_code')== $area_code->area_uniqid.",".$area_code->area_code)?" selected=' selected'":""?>><?php echo $area_code->area_name;?></option>
<?php } ?>
</select>
<small class="text-danger"><?php echo form_error('area_code');?></small>
</div>
</div>
</li>
</div><!--- --> 
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<li>
<label>Select Date</label>

<div class="form-group">
<?php

$today_date  = strtotime(date('Y-m-d'));
//$month_date  = date('Y-m-d', strtotime('+1 month', $today_date));

?>
<input type="date" name="start_date"  class="form-control" id="exampleInputEmail" placeholder="" min="<?php echo date('Y-m-d');?>" max="" value="<?php echo set_value('start_date');?>">

<small class="text-danger"><?php echo form_error('start_date');?></small>
</div>
</li>
</div><!--- --> 
<div class="col-lg-3 col-md-3 col-sm-3 col-6">
<li>
<div class="form-group">
<input type="hidden" name="page" value="service">

<button type="submit" class="btn btn-block btn-thm">Search</button>
</div>
<small class="show_choose text-danger" style="display:none;"></small>

</li>
</div><!--- -->

</div> <!---row---> 
</ul>
</form> 
</div>
</div>          
</div>
</div>

<div class="col-md-12 col-lg-12">

<div class="row overflow-hidden">

<?php if(is_array($schedule)): ?>
<?php 
$i=1;

foreach($schedule as $plans ){

$empid     = $plans['emp_id'] ;
$dayid     = $plans['day'] ;
$shiftid   = $plans['shift'] ;
$plan_type = $plans['plan_type'] ;


$scheduler_id = $plans['scheduler_id'] ;
//get employee details from employee id
$empdata   = $this->Model->getData('cleanner',array('emp_id'=>$empid));

$emp_name  = $empdata->fullname;

//get data of day from day combination
$day_comb  = $this->Model->getData('subscription_day',array('sub_id'=>$dayid));

$day_name  = $day_comb->day;

//get shift name from master shift
$shiftdata = $this->Model->getData('shift',array('shift_id'=>$shiftid));

//check job is booked in this date
$start_date_for_chk  = $start_date;
$if_exists_order = "SELECT * FROM `job_avalability` WHERE job_id='$scheduler_id' AND book_date='$start_date_for_chk' AND status='1' ORDER BY id DESC LIMIT 1";
$if_exists_order = $this->Model->getSqlData($if_exists_order);


if(COUNT($if_exists_order) > 0){
    
	
	foreach($if_exists_order as $if__order){
		
		$book_date = $if__order['book_date'];
		$book_date_next   = date('Y-m-d', strtotime($book_date. ' + 7 days'));

	}



}else{

	//$book_date_next = date('Y-m-d');
	$book_date_next = $start_date_for_chk;
}



//start date from input hidden for start booking

// if(empty($start_date)){
// $start_date = date('Y-m-d');
// }else{
// $start_date;
// }

?>
<div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
<div class="profile-card" data-aos="<?php if($i % 2 == 0){ echo "fade-left"; } else{ echo "fade-right";}?>">
<div class="row mx-0"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
	<?php if($plan_type !='0'){ ?>
	 <div class="ribbon ribbon-top-right"><span>Subscribe</span></div>
	<?php } ?>
<h2 class="name"><?php echo ucwords($emp_name);?></h2>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<p> 
<?php if($plan_type =='0'){ ?>
<span class="pr-1"> <i class="flaticon-calendar mr-2" aria-hidden="true"></i> <?php  echo $book_date_next; ?> </span>
<?php }?>
<span class="pr-1"> <i class="fa fa-clock-o mr-2" aria-hidden="true"></i> <?php echo $shiftdata->from_time;?> to <?php echo $shiftdata->to_time;?> <?php echo $shiftdata->hours;?> hrs </span>
</p>
</div>  

<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="day-card">
<div class="row mx-0">
<div class="col-12">
<div class="row mx-0">
<div class="col-6 text-left">
<span class="working-tittle pl-0">Working Day</span> 
</div>

<div class="col-6 text-right">
<span class="working-tittle pr-0">

</div>

</div>
<p class="working-day">
<?php echo $day_name;?>
</p>
<p class="text-center">

<?php
if(empty($search_id)){
//date('Y-m-d');
$search_id = 'book';

}else{
$search_id = $search_id;
}
?>
<?php 
$fun_search = $this->uri->segment(2);
if($fun_search =='service_list'){ ?>

<a href="<?php echo base_url();?>home/direct_book/<?php echo $scheduler_id;?>" class="btn btn-thm">Book <i class="fa fa-angle-right"></i> </a>

<?php }else{ ?>
<a class="btn btn-thm"  href="<?php echo base_url();?>home/service_details/<?php echo $scheduler_id; ?>/<?php echo $search_id; ?>">Book <i class="fa fa-angle-right"></i> </a>

<?php } ?>

<!-- <form method="post" action="<?php echo base_url();?>home/service_details">
	<input type="hidden" name="start_date" value="<?php echo $start_date;?>">
	<input type="hidden" name="scheduler_id" value="<?php echo $scheduler_id;?>">
	<button type="submit" class="btn btn-thm">Book <i class="fa fa-angle-right"></i> </button>
</form>	 -->

</p>
</div>






</div>
</div>
</div>    



</div><!----row---->    
</div><!----profile-card--->
</div><!-----col full card----->

<?php $i++; } ?> 

<?php endif; ?> 

 
</div>
</div>
</div>

<div class="row">
	<div class="col-12 mx-auto">
	<?php if(empty($schedule)){ ?>
	<center>
	<img class="img-fluid w-25" src="<?php echo base_url();?>assets/images/no-data.png" >
	<h2 class="text-capitalize">Oops! no data found please search again...</h2>
	</center>
	<?php } ?>

	</div>
</div>


</div>
</section>
<!--=====Fotter-n-js======-->
<?php include(APPPATH.'views/include/footer-n-js.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script>
$(document).ready(function(){
  $('.info_alert').on("click", function(){
swal({
title: "Alert",
text: "Please select package,shift,area and booking date!",
type: "warning",
// showCancelButton: !0,
confirmButtonText: "Choose",
// cancelButtonText: "No, cancel!",
reverseButtons: !0
}).then(function (e) {
if (e.value === true) {
    //toggle here
//$("#sroll_top").scrollTop(0);
$("html").animate({ scrollTop: 0 }, "slow");
$(".show_choose").show();
$(".show_choose").html("Please Select All Mandatory Fiels!");

}

    });
  });
});
</script>

<!--=====/Fotter-n-js=====-->
</body>
</html>