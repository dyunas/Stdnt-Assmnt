 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
						</li>
						<li><a href="<?php echo site_url('admin/student_rcrd'); ?>">Student's Record</a></li>
						<li>Enroll Student</li>
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
								Student's Record
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Enroll Student
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="row">
									<?php if($this->session->flashdata('error')): ?>
		              <span class="help-block">
		              	<?php echo '<div class="alert alert-success">
					      	  <button type="button" class="close" data-dismiss="alert">
								  		<i class="ace-icon fa fa-times"></i>
										</button>
										'.$this->session->flashdata('error').'</div><!-- alert -->'; ?>
		      			  </span>
		              <?php endif; ?>
									<?php if($this->session->flashdata('error_2')): ?>
		              <span class="help-block">
		              	<?php echo '<div class="alert alert-danger">
					      	  <button type="button" class="close" data-dismiss="alert">
								  		<i class="ace-icon fa fa-times"></i>
										</button>
										'.$this->session->flashdata('error_2').'</div><!-- alert -->'; ?>
		      			  </span>
		              <?php endif; ?>
								</div>
								<br/>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-xs-12">
									<?php echo form_open(site_url('registrar/student_rcrd/auth_enroll'), 'class="form-horizontal" role="form" id="student_form"'); ?>
										<fieldset>
											<legend>Student Information:</legend>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right" for="stud_name">Student Name:</label>

															  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
															  	<div class="clearfix">
																  	<input type="text" id="stud_name" name="stud_name" class="form-control input-xxlarge" maxlength="150" placeholder="Lastname, Firstname, Middlename" />
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first column -->

														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_gender">Gender:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																	  <select class="col-xs-12 col-sm-12 col-md-12 col-lg-12" name="stud_gender">
																	  	<option value="">Select gender</option>
																	  	<option value="Male">Male</option>
																	  	<option value="Female">Female</option>
																	  </select>
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->
													</div><!-- /.first row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right" for="stud_bdate">Birthdate:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																  	<input type="text" id="stud_bdate" name="stud_bdate" class="form-control input-xxlarge date-picker" placeholder="mm/dd/yyyy" />
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_cnum">Cell Number:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																  	<input type="text" id="stud_cnum" name="stud_cnum" class="form-control input-xxlarge">
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->

														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_tnum">Tel. Number:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																  	<input type="text" id="stud_tnum" name="stud_tnum" class="form-control input-xxlarge">
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.third-column -->
													</div><!-- /.second row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="form-group">
																<label style="text-align: left;" class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2" for="stud_email">E-mail Address:</label>

																<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
																	<div class="clearfix">
																		<input type="text" id="stud_email" name="stud_email" class="form-control input-xxlarge" placeholder="juan.dela.cruz@email.com" />
																	</div>
																</div>
															</div>
														</div><!-- /.first-column -->
													</div><!-- /.third row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_addr_ln1">Address:</label>

															  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
															  	<div class="clearfix">
																	  <input type="text" id="stud_addr_ln1" name="stud_addr_ln1" class="form-control input-xxlarge" placeholder="Street Address" />
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_addr_ln2">City/Municipality:</label>

															  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															  	<div class="clearfix">
																  <input type="text" id="stud_addr_ln2" name="stud_addr_ln2" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->
													</div><!-- /.fourth row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_addr_ln3">Province:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																  <input type="text" id="stud_addr_ln3" name="stud_addr_ln3" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right" for="stud_addr_ln4">Zip Code:</label>

															  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
															  	<div class="clearfix">
																  <input type="text" id="stud_addr_ln4" name="stud_addr_ln4" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->
													</div><!-- /.fifth row -->
												</div>
											</div>
										</fieldset><!-- /.student information -->

										<div class="space-2"></div>

										<fieldset>
											<legend>Additional Information:</legend>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right" for="stud_gdn_name">Guardian's Name:</label>

															  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
															  	<div class="clearfix">
																  	<input type="text" id="stud_gdn_name" name="stud_gdn_name" class="form-control input-xxlarge" maxlength="150" placeholder="Lastname, Firstname, Middlename" />
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first column -->
													</div><!-- /.first row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
															<div class="form-group">
																<label style="text-align: left;" class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_gdn_cnum">Cell Number:</label>

																<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
																	<div class="clearfix">
																		<input type="text" id="stud_gdn_cnum" name="stud_gdn_cnum" class="form-control input-xxlarge" />
																	</div>
																</div>
															</div><!-- /.form-group -->
														</div><!-- /.first column -->

														<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
															<div class="form-group">
																<label style="text-align: left;" class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_gdn_tnum">Tel. Number:</label>

																<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
																	<div class="clearfix">
																		<input type="text" id="stud_gdn_tnum" name="stud_gdn_tnum" class="form-control input-xxlarge" />
																	</div>
																</div>
															</div><!-- /.form-group -->
														</div><!-- /.second column -->
													</div><!-- /.second row -->

													<div class="row">
														<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_gdn_addr_ln1">Address:</label>

															  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
															  	<div class="clearfix">
																	  <input type="text" id="stud_gdn_addr_ln1" name="stud_gdn_addr_ln1" class="form-control input-xxlarge" placeholder="Streed Address" />
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_gdn_addr_ln2">City/Municipality:</label>

															  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															  	<div class="clearfix">
																  <input type="text" id="stud_gdn_addr_ln2" name="stud_gdn_addr_ln2" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->
													</div><!-- /.third row -->

													<div class="space-2"></div>

													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right" for="stud_gdn_addr_ln3">Province:</label>

															  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
															  	<div class="clearfix">
																  <input type="text" id="stud_gdn_addr_ln3" name="stud_gdn_addr_ln3" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right" for="stud_gdn_addr_ln4">Zip Code:</label>

															  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
															  	<div class="clearfix">
																  <input type="text" id="stud_gdn_addr_ln4" name="stud_gdn_addr_ln4" class="form-control input-xxlarge" />
																</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->
													</div><!-- /.fourth row -->
												</div>
											</div>
										</fieldset><!-- /.additional information -->

										<fieldset>
											<legend>Student Assessment:</legend>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label style="text-align:left;" class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_course">Course:</label>

															  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
															  	<div class="clearfix">
																  <select class="form-control input-xxlarge" id="stud_course" name="stud_course">
																  	<option value="">Choose a course</option>
																  	<?php foreach($course as $item): ?>
																  		<option value="<?php echo $item->course_code; ?>"><?php echo $item->course_name; ?></option>
																  	<?php endforeach; ?>
																  </select>
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.first-column -->

														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_year">Year:</label>

															  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
															  	<div class="clearfix">
																	  <select class="form-control input-xxlarge" name="stud_year">
																	  	<option value="">Choose a Year</option>
																	  	<option value="1">1st Year</option>
																	  	<option value="2">2nd Year</option>
																	  	<option value="3">3rd Year</option>
																	  	<option value="4">4th Year</option>
																	  </select>
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.second-column -->

														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
															<div class="form-group">
															  <label class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_semester">Sem:</label>

															  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
															  	<div class="clearfix">
																	  <input type="text" id="stud_semester" name="stud_semester" value="<?php echo $semester->semester.' Sem.'; ?>" readonly="readonly">
																	</div>
															  </div>
															</div><!-- form-group -->
														</div><!-- /.third-column -->
													</div><!-- /.first row -->
												</div>
											</div>
										</fieldset><!-- /.student assessment -->

										<div class="space-2"></div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="space-2"></div>
												<div class="clearfix form-actions">
												  <div class="col-md-offset-3 col-md-9">
												    <button class="btn btn-info" id="submit" type="submit" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
													  <i class="ace-icon fa fa-check bigger-110"></i>
													  Submit
													</button>

													<button class="btn" id="clear" type="reset" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
													  <i class="ace-icon fa fa-undo bigger-110"></i>
													  Clear
													</button>
													<a href="<?php echo site_url('admin/student_rcrd'); ?>" class="btn btn-danger" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
													  <i class="ace-icon fa fa-close bigger-110"></i>
													  Cancel
													</a>
												  </div><!-- col-md-offset-3 -->
												</div><!-- clearfix -->
											</div>
										</div><!-- /.form-buttons -->
									<?php echo form_close(); ?>
									</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
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
	<script src="<?php echo base_url('assets/js/fuelux.wizard.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js'); ?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>
</body>
<script type="text/javascript">
	jQuery(function($){
		function number_format (number, decimals, dec_point, thousands_sep) {
	    // Strip all characters but numerical ones.
	    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	    var n = !isFinite(+number) ? 0 : +number,
	        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
	        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
	        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
	        s = '',
	        toFixedFix = function (n, prec) {
	            var k = Math.pow(10, prec);
	            return '' + Math.round(n * k) / k;
	        };
	    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	    if (s[0].length > 3) {
	        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	    }
	    if ((s[1] || '').length < prec) {
	        s[1] = s[1] || '';
	        s[1] += new Array(prec - s[1].length + 1).join('0');
	    }
	    return s.join(dec);
		}

    //datepicker plugin
		//link
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		})
		//show datepicker when clicking on the icon
		.next().on(ace.click_event, function(){
			$(this).prev().focus();
		});

		$('#stud_bdate').mask('99/99/9999');

    $('#student_form').validate({
      errorElement: 'div',
      errorClass: 'help-block',
      focusInvalid: false,
      ignore: "",
      rules: {
        stud_name: {
          required: true,
        },
        stud_gender: {
          required: true,
        },
        stud_bdate: {
          required: true,
        },
        stud_cnum: {
        	required: true,
        },
        stud_tnum: {
        	required: true,
        },
        stud_email: {
        	required: true,
        	email: true
        },
        stud_addr_ln1: {
        	required: true,
        },
        stud_addr_ln2: {
        	required: true,
        },
        stud_addr_ln3: {
        	required: true,
        },
        stud_addr_ln4: {
        	required: true,
        },
        stud_gdn_name: {
        	required: true,
        },
        stud_gdn_cnum: {
        	required: true,
        },
        stud_gdn_tnum: {
        	required: true,
        },
        stud_gdn_addr_ln1: {
        	required: true,
        },
        stud_gdn_addr_ln2: {
        	required: true,
        },
        stud_gdn_addr_ln3: {
        	required: true,
        },
        stud_gdn_addr_ln4: {
        	required: true,
        },
        stud_course: {
        	required: true,
        },
        stud_year: {
        	required: true,
        }
      },

      highlight: function (e) {
        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
      },
      
      success: function (e) {
        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
      	$(e).remove();
      },
      
      errorPlacement: function (error, element) {
        error.insertAfter(element.parent());
      },
      
      submitHandler: function (form) {
        $(form).ajaxSubmit();
      },
      invalidHandler: function (form) {
      }
    });

    $('#submit').on(ace.click_event, function () {
      var btn = $(this);
      btn.button('loading');

      setTimeout(function () {
        btn.button('reset');
      }, 2000)
    });

    $('#clear').on(ace.click_event, function () {
      var btn = $(this);
      btn.button('loading');

      setTimeout(function () {
        btn.button('reset');
      }, 2000);
    });

    $('#cancel').on(ace.click_event, function () {
      var btn = $(this);
      btn.button('loading');

      setTimeout(function () {
        btn.button('reset');
      }, 2000)
    });
  });
</script>