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
						<li><?php echo $stud_info->stud_id; ?></li>
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
									<?php echo $stud_info->stud_id; ?>
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
									<?php echo form_open(site_url('admin/student_rcrd/auth_enroll'), 'class="form-horizontal" role="form" id="student_form"'); ?>
										<fieldset>
											<h4>Student Information:</h4>
											<table class="table table-condensed">
												<tbody>
													<tr>
														<td>Student Name:</td>
														<td><?php echo $stud_info->stud_name; ?></td>
														<td>Gender:</td>
														<td><?php echo $stud_info->stud_gender; ?></td>
														<td colspan="2"></td>
													</tr>
													<tr>
														<td>Birthday:</td>
														<td><?php echo $stud_info->stud_bdate; ?></td>
														<td>Cell Number:</td>
														<td>(+63) <?php echo $stud_info->stud_cnum; ?></td>
														<td>Tel. Number:</td>
														<td><?php echo $stud_info->stud_tnum; ?></td>
													</tr>
													<tr>
														<td>E-mail Address:</td>
														<td><?php echo $stud_info->stud_email; ?></td>
														<td colspan="4"></td>
													</tr>
													<tr>
														<td>Address:</td>
														<td colspan="2"><?php echo $stud_info->stud_addr_ln1; ?></td>
														<td>City/Municipality:</td>
														<td><?php echo $stud_info->stud_addr_ln2; ?></td>
													</tr>
													<tr>
														<td>Province:</td>
														<td><?php echo $stud_info->stud_addr_ln3; ?></td>
														<td>Zip Code:</td>
														<td colspan="4"><?php echo $stud_info->stud_addr_ln4; ?></td>
													</tr>
												</tbody>
											</table>
										</fieldset><!-- /.student information -->

										<div class="space-2"></div>

										<fieldset>
											<h4>Student Assessment:</h4>
											<table class="table table-condensed">
												<?php $year = ['', '1st Year', '2nd Year', '3rd Year']; ?>
												<tbody>
													<tr>
														<td>Course:</td>
														<td><?php echo $stud_info->stud_course; ?></td>
														<td>Year:</td>
														<td><?php echo $year[$stud_info->stud_year]; ?></td>
														<td>Semester:</td>
														<td><?php echo $stud_info->stud_sem; ?></td>
														<td>Status:</td>
														<td><?php echo $stud_info->stud_status; ?></td>
													</tr>
												</tbody>
											</table>
										</fieldset><!-- /.student assessment -->

										<div class="space-2"></div>

										<div class="row">
											<div class="tabbable">
												<ul class="nav nav-tabs" id="myTab">
													<li class="active">
														<a data-toggle="tab" href="#summary" aria-expanded="true">
															Summary of Assessment
														</a>
													</li>

													<li class="">
														<a data-toggle="tab" href="#pymntHstry" aria-expanded="false">
															Payment History
														</a>
													</li>
												</ul>

												<div class="tab-content">
													<div id="summary" class="tab-pane fade active in">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																	<table class="table table-condensed">
																		<tbody>
																			<?php if ($fees): ?>
																			<?php $amount = 0; ?>
																			<?php foreach($fees as $item): ?>
																				<tr>
																					<td class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><?php echo $item->fee_name; ?></td>
																					<?php if ($item->fee_name == 'Tuition Fee'): ?>
																					<?php $units = $this->student->get_units_info($stud_info->stud_id); ?>
																					<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Units: <?php echo $units->units; ?></td>
																					<?php else: ?>
																					<td></td>
																					<?php endif; ?>
																					<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="text-align:right"><?php echo 'Php '.number_format($item->fee_amount, 2); ?></td>
																				<?php $amount += $item->fee_amount; ?>
																				</tr>
																			<?php endforeach; ?>
																			<?php endif; ?>
																		</tbody>
																		<tfoot>
																			<tr>
																				<td style="font-weight: bold;">Discount:</td>
																				<td>
																					<div class="input-group">
																						<input type="textbox" id="dscnt" name="dscnt" class="discount input-xs col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" value="<?php echo $discount->discount_prcnt; ?>" maxlength="3" style="text-align:right;" readonly/>
																						<span class="input-group-addon">
																							%
																						</span>
																					</div>
																				</td>
																				<td></td>
																			</tr>
																			<tr>
																				<input type="hidden" name="tuition_fee" id="tuition_fee" value="" />
																				<input type="hidden" name="misc_fee" id="misc_fee" value="" />
																				<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>AMOUNT:</em></td>
																				<td style="text-align: right;font-style: italic;"><span id="amount"><?php echo 'Php '.number_format($amount, 2); ?></span>
																			</tr>
																			<tr>
																				<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>Discount:</em></td>
																				<td style="text-align: right;font-style: italic;"><span id="disc"><?php echo 'Php '.number_format($discount->discount_fee, 2); ?></span></td>
																			</tr>
																			<tr>
																				<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>TOTAL AMOUNT:</em></td>
																				<td style="text-align: right;font-style: italic;"><span id="totAmount"><?php echo 'Php '.number_format($amount - $discount->discount_fee, 2); ?></span></td>
																			</tr>
																			<?php $totalFees = $amount - $discount->discount_fee; ?>
																		</tfoot>
																	</table>
																</div>
																<div class="row">
																	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
																		<table class="table table-collapsed table-condensed">
																			<tbody>
																				<tr>
																					<td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Payment Scheme:</td>
																					<td><?php echo $schme->stud_pymnt_schm; ?></td>
																				</tr>
																				<tr>
																					<td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Payment Method:</td>
																					<td><?php echo 'OTC'; ?></td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<div class="row">
																		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
															        <h4>Payables for the whole term</h4>
															        <table class="table table-condensed">
															        	<thead>
															        		<tr>
															        			<th></th>
															        			<th>Amount Due</th>
															        			<th>Amount Paid</th>
															        			<th>Balance</th>
															        		</tr>
															        	</thead>
																			<?php if ($schme->stud_pymnt_schm == 'CSHPYMNT'): ?>
																        <tbody>
																	        <tr>
																		        <td><strong>Upon Enrollment:</strong></td>
																		        <td style="text-align: right;">Php <?php echo number_format($totalFees, 2) ?></td>
																		        <td>(Php 0.00)</td>
																		        <td>(Php 0.00)</td>
																	        </tr>
																        </tbody>
																      <?php elseif ($schme->stud_pymnt_schm == 'INSTLMNT'): ?>
															      		<?php 
															      			$upon = 2500;
																     			$payment = ($totalFees - $upon) / 3; 
																     		?>
																        <tbody>
																	        <tr>
																	        	<td><strong>Upon Enrollment:</strong></td>
																	        	<td style="text-align: center;">Php <?php echo number_format($upon, 2) ?></td>
																	        	<td style="text-align: center;">(Php 0.00)</td>
																		        <td style="text-align: center;">(Php 0.00)</td>
																	        </tr>
																	        <tr>
																	        	<td><strong>Prelim Payment:</strong></td>
																	        	<td style="text-align: center;">Php <?php echo number_format($payment, 2) ?></td>
																	        	<td style="text-align: center;">(Php 0.00)</td>
																		        <td style="text-align: center;">(Php 0.00)</td>
																	        </tr>
																	        <tr>
																	        	<td><strong>Mid-term Payment:</strong></td>
																	        	<td style="text-align: center;">Php <?php echo number_format($payment, 2) ?></td>
																	        	<td style="text-align: center;">(Php 0.00)</td>
																		        <td style="text-align: center;">(Php 0.00)</td>
																	        </tr>
																	        <tr>
																		        <td><strong>Finals Payment:</strong></td>
																		        <td style="text-align: center;">Php <?php echo number_format($payment, 2) ?></td>
																		        <td style="text-align: center;">(Php 0.00)</td>
																		        <td style="text-align: center;">(Php 0.00)</td>
																	        </tr>
																        </tbody>
																	    <?php elseif ($schme->stud_pymnt_schm == 'MNTHLY'): ?>
																    		<?php
																    			$semester = $stud_info->stud_sem;
																	         $frst_hlf = array('June', 'July', 'August', 'September', 'October');
																	         $scnd_hlf = array('November', 'December', 'January', 'February', 'March');
																	     		 $upon = 2500;
																	     		 $payment = ($totalFees - $upon) / 4;
																    		?>
																        <tbody>
																        	<?php if ($semester == '1st Sem.'): ?>
																        		<?php for ($i = 0; $i < count($frst_hlf); $i++): ?>
																        			<tr>';
																	         			<td><strong>Payment for the Month of <?php echo $frst_hlf[$i]; ?></strong></td>';
																	         			<td>Php <?php echo number_format($payment, 2); ?></td>';
																			        </tr>';
																        		<?php endfor; ?>
																        	<?php elseif ($semester == '2nd Sem.'): ?>
																        		<?php for ($i = 0; $i < count($scnd_hlf); $i++): ?>
																        			<tr>';
																	         			<td><strong>Payment for the Month of <?php echo $scnd_hlf[$i]; ?></strong></td>';
																	         			<td>Php <?php echo number_format($payment, 2); ?></td>';
																			        </tr>';
																        		<?php endfor; ?>
																        	<?php endif; ?>
																        </tbody>
																		  <?php endif; ?>
																		  </table>
																		</div>
																	</div>
																</div>
														</div>
													</div>

													<div id="pymntHstry" class="tab-pane fade">
														<table class="table table-condensed table-bordered" id="hstry">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Fee Name</th>
																	<th>Cashier</th>
																	<th>Amount Paid</th>
																</tr>
															</thead>
															<table>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</table>
														</table>
													</div>
												</div><!-- /.tab-content -->
											</div><!-- /.tabbable -->
										</div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="space-2"></div>
												<div class="clearfix form-actions">
												  <div class="col-md-offset-3 col-md-9">
												  	<a href="<?php echo site_url('admin/student_rcrd'); ?>" class="btn btn-danger" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
														  <i class="ace-icon fa fa-arrow-left bigger-110"></i>
														  Go Back
														</a>
												    <a href="<?php echo site_url('admin/student_rcrd/edit/'.$stud_info->stud_id); ?>" class="btn btn-danger" id="update" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
														  <i class="ace-icon fa fa-edit bigger-110"></i>
														  Update
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

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>

	<!-- dataTables scripts -->
	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$('#hstry').dataTable();

	    $('#update').on(ace.click_event, function () {
	      var btn = $(this);
	      btn.button('loading');

	      setTimeout(function () {
	        btn.button('reset');
	      }, 2000)
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
</body>