 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
						</li>
					</ul><!-- /.breadcrumb -->

					<!-- <div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div> --><!-- /.nav-search -->
				</div><!-- /.breadcrumbs -->

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="row">
									<div class="col-xs-12 col-sm-6 widget-container-col">
										<div class="widget-box">
											<div class="widget-header">
												<h5 class="widget-title">School Year</h5>
											</div><!-- /.widget-header -->

											<div class="widget-body">
												<div class="widget-main">
													<h2 style="text-align:center;"><?php echo $schl_yr->school_yr; ?></h2>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col-xs-12 col-sm-6 widget-container-col -->
									<div class="col-xs-12 col-sm-6 widget-container-col">
										<div class="widget-box">
											<div class="widget-header">
												<h5 class="widget-title">Semester</h5>
											</div><!-- /.widget-header -->

											<div class="widget-body">
												<div class="widget-main">
													<h2 style="text-align:center;"><?php echo $smstr->semester; ?></h2>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col-xs-12 col-sm-6 widget-container-col -->
								</div><!-- /.row -->
							</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
						</div><!-- /.row -->
					</div><!-- page-content -->
				</div>
			</div><!-- main-content-inner -->
		</div><!-- main-content -->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js'); ?>"></script>
	<!-- <![endif]-->

	<!--[if IE]>
	  <script src="<?php echo base_url('assets/js/jquery.1.11.1.min.js'); ?>"></script>
	<![endif]-->

	<!--[if !IE]> -->
	<script type="text/javascript">
	  window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery.min.js'); ?>'>"+"<"+"/script>");
	</script>
	<!-- <![endif]-->

	<!--[if IE]>
	  <script type="text/javascript">
 	    window.jQuery || document.write("<script src='<?php echo base_url('assets/js/jquery1x.min.js'); ?>'>"+"<"+"/script>");
	  </script>
	<![endif]-->
		
	<script type="text/javascript">
	  if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js'); ?>'>"+"<"+"/script>");
	</script>
	
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

	<!--[if lte IE 8]>
	  <script src="assets/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootbox.min.js'); ?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>
</body>