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
									<div class="col-lg-6 col-md-6">
										<div class="panel panel-red">
											<div class="panel-heading">
												<div class="row">
													<div class="col-xs-3">
                          	<i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $schl_yr->school_yr; ?></div>
                            <div style="font-size: 16px;">School Year</div>
                          </div>
												</div>
											</div>
											<!-- <a href="javascript:void()">
												<div class="panel-footer">
	                        <span class="pull-left">Change Settings</span>
	                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                        <div class="clearfix"></div>
	                      </div>
	                    </a> -->	
										</div>
									</div><!-- /.col-lg-6 col-md-6 -->
									<div class="col-lg-6 col-md-6">
										<div class="panel panel-red">
											<div class="panel-heading">
												<div class="row">
													<div class="col-xs-3">
                          	<i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $smstr->semester; ?></div>
                            <div style="font-size: 16px;">Semester</div>
                          </div>
												</div>
											</div><!-- /.col-lg-3 col-md-6 -->
											<!-- <a href="javascript:void()">
												<div class="panel-footer">
	                        <span class="pull-left">Change Settings</span>
	                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                        <div class="clearfix"></div>
	                      </div>
	                    </a> -->	
										</div>
									</div><!-- /.col-lg-6 col-md-6 -->
								</div><!-- /.row -->

								<div class="space-2"></div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="page-header">
											<h1>
												Number of Students Enrolled
												<small>
													<i class="ace-icon fa fa-angle-double-right"></i>
												</small>
											</h1>
										</div><!-- /.page-header -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div id="enrolledStudents"></div>
											</div>
										</div>
									</div><!-- /.col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="page-header">
											<h1>
												Number of Students per Course
												<small>
													<i class="ace-icon fa fa-angle-double-right"></i>
												</small>
											</h1>
										</div><!-- /.page-header -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div id="studentPerCourse"></div>
											</div>
										</div>
									</div><!-- /.col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
								</div><!-- /.row -->
								<div style="height: 400px;"></div>
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
	<script src="<?php echo base_url('assets/js/canvasjs.min.js'); ?>"></script>
</body>
<script type="text/javascript">
	window.onload = function () {
		var chart1 = new CanvasJS.Chart("enrolledStudents", {
			animationEnabled: true,
			dataPointMaxWidth: 30,
			axisX: {
				interval: 0,
				labelFontSize: 14,
				// labelFontWeight: "bold",
				lineThickness: 0
			},
			axisY: {
				// valueFormatString: maxRange,
				// interval: interv,
				fontSize: 14,
				// labelFontWeight: "bold",
				includeZero: false,
				// title: "Amount in Php",
				//stripLines: targetLine
			},
			toolTip: {
				shared: false
			},
			legend: {
				verticalAlign: "top",
				horizontalAlign: "right"
			},
			data: [
			{
				type: "column",
				showInLegend: true,
				name: "S.Y. 2015-2016",
				toolTipContent:'<span style="color:#000">{name}</span>:&nbsp;{y}',
				color: "red",
				dataPoints: [
				{ x: 1, y: 380, label: "S.Y. 2015-2016" },
				]
			},
			{
				type: "column",
				showInLegend: true,
				name: "S.Y. 2016 - 2017",
				toolTipContent:'<span style="color:#000">{name}</span>:&nbsp;{y}',
				color: "green",
				dataPoints: [
				{ x: 2, y: 420, label: "S.Y. 2016-2017" },
				]
			},
			]
		});

		chart1.render();

		var chart2 = new CanvasJS.Chart("studentPerCourse", {
			animationEnabled: true,
			dataPointMaxWidth: 30,
			axisX: {
				interval: 0,
				labelFontSize: 14,
				// labelFontWeight: "bold",
				lineThickness: 0
			},
			axisY: {
				// valueFormatString: maxRange,
				// interval: interv,
				fontSize: 14,
				// labelFontWeight: "bold",
				includeZero: false,
				// title: "Amount in Php",
				//stripLines: targetLine
			},
			toolTip: {
				shared: false
			},
			legend: {
				verticalAlign: "top",
				horizontalAlign: "right"
			},
			data: [
			{
				type: "column",
				showInLegend: true,
				name: "S.Y. 2015-2016",
				// toolTipContent:'<span style="color:#000">{name}</span>:&nbsp;{y}',
				// color: "red",
				dataPoints: [
				{ y: 157, label: "ACT" },
				{ y: 70, label: "ACS" },
				{ y: 29, label: "BSA" },
				{ y: 120, label: "BSIT" },
				{ y: 20, label: "BSEn" },
				{ y: 24, label: "BSOA" },
				]
			},
			{
				type: "column",
				showInLegend: true,
				name: "S.Y. 2016-2017",
				// toolTipContent:'<span style="color:#000">{name}</span>:&nbsp;{y}',
				// color: "red",
				dataPoints: [
				{ y: 130, label: "ACT" },
				{ y: 30, label: "ACS" },
				{ y: 15, label: "BSA" },
				{ y: 70, label: "BSIT" },
				{ y: 10, label: "BSEn" },
				{ y: 14, label: "BSOA" },
				]
			}
			]
		});

		chart2.render();
	}
</script>