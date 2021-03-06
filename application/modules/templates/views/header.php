<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="icon"  type="image/x-icon" href="<?php echo base_url('assets/img/cdsp_logo.ico'); ?>">

		<title><?php echo 'CDSP - ERS | '.$title; ?></title>

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/font-awesome/4.5.0/css/font-awesome.min.css"); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/jquery.orgchart.css"); ?>">
		
		<!-- ace styles -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/ace.css"); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/jquery-ui.custom.min.css"); ?>">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/jquery.gritter.min.css"); ?>">

		<!-- text fonts -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/fonts/fonts.googleapis.com.css"); ?>">

		<!-- dataTables -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/dataTables.bootstrap.css"); ?>">

		<!-- ionIcons -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/ionicons/css/ionicons.css"); ?>">

		<!-- datePicker -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/datepicker.min.css"); ?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url("assets/css/ace-rtl.min.css"); ?>">

		<!-- ace settings handler -->
		<script src="<?php echo base_url('assets/js/ace-extra.min.js'); ?>"></script>

	    <!--[if lte IE 9]>
		<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
  </head>
  <style type="text/css">
  	#cover {
	    background: url("<?php echo base_url('assets/img/ring-alt.gif')?>") no-repeat center center #000;
	    position: fixed;
	    top: 0;
	    left: 0;
	    height: 100%;
	    width: 100%;
	    z-index: 999999;
	    opacity: 0.5;
	    display: none;
		}
  </style>