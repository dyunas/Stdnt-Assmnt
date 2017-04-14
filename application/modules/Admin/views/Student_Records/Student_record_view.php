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
											<h4>Additional Information:</h4>
											<table class="table table-condensed">
												<tbody>
													<tr>
														<td>Guardian's Name:</td>
														<td><?php echo $gdn_info->stud_gdn_name; ?></td>
														<td colspan="4"></td>
													</tr>
													<tr>
														<td>Cell Number:</td>
														<td>(+63) <?php echo $gdn_info->stud_gdn_cnum; ?></td>
														<td>Tel. Number:</td>
														<td><?php echo $gdn_info->stud_gdn_tnum; ?></td>
														<td colspan="2"></td>
													</tr>
													<tr>
														<td>Address:</td>
														<td colspan="2"><?php echo $gdn_info->stud_gdn_addr_ln1; ?></td>
														<td>City/Municipality:</td>
														<td><?php echo $gdn_info->stud_gdn_addr_ln2; ?></td>
													</tr>
													<tr>
														<td>Province:</td>
														<td><?php echo $gdn_info->stud_gdn_addr_ln3; ?></td>
														<td>Zip Code:</td>
														<td><?php echo $gdn_info->stud_gdn_addr_ln4; ?></td>
														<td colspan="2"></td>
													</tr>
												</tbody>
											</table>
										</fieldset><!-- /.additional information -->

										<fieldset>
											<legend>Documents Submitted:</legend>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="form-inline">
															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																<div class="checkbox">
																	<label>
																		<input name="stud_nso" class="docu ace ace-checkbox-2" type="checkbox" <?php echo ($doc_info->stud_nso) ? 'checked' : ''; ?> disabled />
																		<span class="lbl"> NSO Copy of Birth Certificate</span>
																	</label>
																</div>
															</div><!-- /.col-lg-4 col-md-4 col-sm-4 col-xs-12 -->

															<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
																<div class="checkbox">
																	<label>
																		<input name="stud_frm137" class="docu ace ace-checkbox-2" type="checkbox" <?php echo ($doc_info->stud_frm137) ? 'checked' : ''; ?> disabled />
																		<span class="lbl"> Form 137</span>
																	</label>
																</div>
															</div><!-- /.col-lg-2 col-md-2 col-sm-2 col-xs-12 -->

															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
																<div class="checkbox">
																	<label>
																		<input name="stud_moral" class="docu ace ace-checkbox-2" type="checkbox" <?php echo ($doc_info->stud_moral) ? 'checked' : ''; ?> disabled />
																		<span class="lbl"> Certificate of Good Moral Character</span>
																	</label>
																</div>
															</div><!-- /.col-lg-5 col-md-5 col-sm-5 col-xs-12 -->
														</div><!-- /.form-inline -->
													</div><!-- /.row -->
													<br/>
													<div class="row">
														<div class="form-inline">
															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																<div class="checkbox">
																	<label>
																		<input name="stud_tor" class="docu ace ace-checkbox-2" type="checkbox" <?php echo ($doc_info->stud_tor) ? 'checked' : ''; ?> disabled />
																		<span class="lbl"> Transcript of Records(if transferee)</span>
																	</label>
																</div>
															</div><!-- /.col-lg-5 col-md-5 col-sm-5 col-xs-12 -->
															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
																<div class="checkbox">
																	<label>
																		<input name="stud_cert_hon_dism" class="docu ace ace-checkbox-2" type="checkbox" <?php echo ($doc_info->stud_cert_hon_dism) ? 'checked' : ''; ?> disabled />
																		<span class="lbl"> Certificate of Honourable Dismissal(if transferee)</span>
																	</label>
																</div>
															</div><!-- /.col-lg-5 col-md-5 col-sm-5 col-xs-12 -->
														</div><!-- /.form-inline -->
													</div><!-- /.row -->
												</div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
											</div>
										</fieldset>

										<div class="space-2"></div>
										<br/>

										<?php $pymnt_scheme = $this->student->get_stud_pymnt_schme($stud_info->stud_id); ?>
										<fieldset>
											<h4>Student Assessment: <?php echo ($pymnt_scheme) ? '<span class="small pull-right"><a href="#modal-form" role="button" data-toggle="modal" id="updteAssmntBtn" data-id="'.$stud_info->stud_id.'" class="btn btn-sm btn-danger"><i class="fa fa-pencil"></i></a></span>' : ''; ?></h4>
											<table class="table table-condensed">
												<?php $year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
												<?php $sem = ['1st Sem.' => 1, '2nd Sem.' => 2]; ?>
												<tbody>
													<tr>
														<td>Course:</td>
														<td id="course"><?php echo $stud_info->stud_course; ?></td>
														<td>Year:</td>
														<td id="year"><?php echo $year[$stud_info->stud_year]; ?></td>
														<td>Semester:</td>
														<td id="semester"><?php echo $stud_info->stud_sem; ?></td>
														<td>Status:</td>
														<td id="status"><?php echo $stud_info->stud_status; ?></td>
													</tr>
												</tbody>
											</table>
										</fieldset><!-- /.student assessment -->

										<div class="space-2"></div>

										<div class="row">
										<?php if($pymnt_scheme): ?>
											<div class="tabbable">
												<ul class="nav nav-tabs" id="myTab">
													<?php foreach($pymnt_scheme as $scheme): ?>
													<li <?php echo ($stud_info->stud_course == $scheme->stud_course AND $stud_info->stud_year == $scheme->stud_year AND $stud_info->stud_sem == $scheme->stud_sem) ? 'class="active"' : '' ?>>
														<a data-toggle="tab" href="<?php echo '#'.$scheme->stud_course.'-'.$scheme->stud_year.'-'.$sem[$scheme->stud_sem]; ?>" aria-expanded="true">
															<?php echo $scheme->stud_course.'-'.$year[$scheme->stud_year].'-'.$scheme->stud_sem; ?>
														</a>
													</li>
													<?php endforeach; ?>
													<li class="">
														<a data-toggle="tab" href="#others" aria-expanded="false">
															Other Payments
														</a>
													</li>
													<li class="">
														<a data-toggle="tab" href="#pymntHstry" aria-expanded="false">
															Payment History
														</a>
													</li>
												</ul>

												<div class="tab-content">
													<?php foreach($pymnt_scheme as $scheme): ?>
													<?php	$fees = $this->student->get_assessment_info($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem);
														$discount = $this->student->get_discount_info($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem); ?>
														<div id="<?php echo $scheme->stud_course.'-'.$scheme->stud_year.'-'.$sem[$scheme->stud_sem]; ?>" class="tab-pane fade">
														<div class="col-lg-3 col-md-4 col-xs-4 pull-right">
															<a href="#edit-form" id="editAssmntBtn" role="button" data-toggle="modal" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-yr="<?php echo $scheme->stud_year ?>" data-sem="<?php echo $scheme->stud_sem; ?>" data-scheme="" data-loading-text="<i class='ion-loading-c'></i> Please wait..." class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Edit</a>
														</div>
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
																							<input type="textbox" id="dscnt_rd" name="dscnt_rd" class="input-xs col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" value="<?php echo $discount->discount_prcnt; ?>" maxlength="3" style="text-align:right;" readonly/>
																							<span class="input-group-addon">
																								%
																							</span>
																						</div>
																					</td>
																					<td></td>
																				</tr>
																				<tr>
																					<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>AMOUNT:</em></td>
																					<td style="text-align: right;font-style: italic;"><?php echo 'Php '.number_format($amount, 2); ?>
																				</tr>
																				<tr>
																					<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>Discount:</em></td>
																					<td style="text-align: right;font-style: italic;"><?php echo 'Php '.number_format($discount->discount_fee, 2); ?></td>
																				</tr>
																				<tr>
																					<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>TOTAL AMOUNT:</em></td>
																					<td style="text-align: right;font-style: italic;"><?php echo 'Php '.number_format($amount - $discount->discount_fee, 2); ?></td>
																				</tr>
																			</tfoot>
																		</table>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																			<table class="table table-collapsed table-condensed">
																				<tbody>
																					<tr>
																						<td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Payment Scheme:</td>
																						<td><?php echo $scheme->stud_pymnt_schm; ?></td>
																					</tr>
																					<tr>
																						<td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Payment Method:</td>
																						<td><?php echo 'OTC'; ?></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<?php ?>
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
																					<?php if ($scheme->stud_pymnt_schm == 'CSHPYMNT'): ?>
														        				<?php $fees = $this->stud_assessment->get_stud_assessment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm); ?>
														                <tbody>
														                	<tr>
														                		<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'rsrvtn'); ?>
														        		        <td><strong>Reservation Fee:</strong></td>
														        		        <td style="text-align: center;">Php <?php echo number_format($fees->rsrvtn_fee, 2) ?></td>
														        	        	<td style="text-align: center;" id="rsrvtn_total"><?php echo ($total_payment->trans_name == 'rsrvtn') ? 'Php '.number_format($total_payment->total_amount) : '(Php 0.00)'; ?></td>
														        		        <td style="text-align: center;" id="rsrvtn_bal"><?php echo ($total_payment->trans_name == 'rsrvtn') ? 'Php '.number_format($fees->rsrvtn_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->rsrvtn_fee, 2); ?>
														        		        	<input type="hidden" name="rsrvtn" data-id="rsrvtn" class="bal" value="<?php echo ($total_payment->trans_name == 'rsrvtn') ? number_format($fees->rsrvtn_fee - $total_payment->total_amount, 2) : number_format($fees->rsrvtn_fee, 2); ?>">
														        		        </td>
														        	        </tr>
														        	        <tr>
														        	        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'upon'); ?>
														        		        <td><strong>Upon Enrollment:</strong></td>
														        		        <td style="text-align: center;">Php <?php echo number_format($fees->upon_fee, 2) ?></td>
														        	        	<td style="text-align: center;" id="upon_total"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($total_payment->total_amount) : '(Php 0.00)'; ?></td>
														        		        <td style="text-align: center;" id="upon_bal"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($fees->upon_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->upon_fee, 2); ?>
														        		        	<input type="hidden" name="upon" data-id="upon" class="bal" value="<?php echo ($total_payment->trans_name == 'upon') ? number_format($fees->upon_fee - $total_payment->total_amount, 2) : number_format($fees->upon_fee, 2); ?>">
														        		        </td>
														        	        </tr>
														                </tbody>
																		      <?php elseif ($scheme->stud_pymnt_schm == 'INSTLMNT'): ?>
																	      		<?php $fees = $this->stud_assessment->get_stud_assessment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm); ?>
		      													        <tbody>
		      									                	<tr>
		      									                		<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'rsrvtn'); ?>
		      									        		        <td><strong>Reservation Fee:</strong></td>
		      									        		        <td style="text-align: center;">Php <?php echo number_format($fees->rsrvtn_fee, 2) ?></td>
		      														        	<td style="text-align: center;" id="rsrvtn_total"><?php echo ($total_payment->trans_name == 'rsrvtn') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
		      															        <td style="text-align: center;" id="rsrvtn_bal"><?php echo ($total_payment->trans_name == 'rsrvtn') ? 'Php '.number_format($fees->rsrvtn_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->rsrvtn_fee, 2); ?>
		      															        	<input type="hidden" name="rsrvtn" data-id="rsrvtn" class="bal" value="<?php echo ($total_payment->trans_name == 'rsrvtn') ? number_format($fees->rsrvtn_fee - $total_payment->total_amount, 2) : number_format($fees->rsrvtn_fee, 2); ?>">
		      															        </td>
		      									        	        </tr>
		      														        <tr>
		      														        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'upon'); ?>
		      														        	<td><strong>Upon Enrollment:</strong></td>
		      														        	<td style="text-align: center;">Php <?php echo number_format($fees->upon_fee, 2) ?></td>
		      														        	<td style="text-align: center;" id="upon_total"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
		      															        <td style="text-align: center;" id="upon_bal"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($fees->upon_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->upon_fee, 2); ?>
		      															        	<input type="hidden" name="upon" data-id="upon" class="bal" value="<?php echo ($total_payment->trans_name == 'upon') ? number_format($fees->upon_fee - $total_payment->total_amount, 2) : number_format($fees->upon_fee, 2); ?>">
		      															        </td>
		      														        </tr>
		      														        <tr>
		      														        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'prelim'); ?>
		      														        	<td><strong>Prelim Payment:</strong></td>
		      														        	<td style="text-align: center;">Php <?php echo number_format($fees->prelim_fee, 2) ?></td>
		      														        	<td style="text-align: center;" id="prelim_total"><?php echo ($total_payment->trans_name == 'prelim') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
		      															        <td style="text-align: center;" id="prelim_bal"><?php echo ($total_payment->trans_name == 'prelim') ? 'Php '.number_format($fees->prelim_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->prelim_fee, 2); ?>
		      															        	<input type="hidden" name="prelim" data-id="prelim" class="bal" value="<?php echo ($total_payment->trans_name == 'prelim') ? number_format($fees->prelim_fee - $total_payment->total_amount, 2) : number_format($fees->prelim_fee, 2); ?>">
		      															        </td>
		      														        </tr>
		      														        <tr>
		      														        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'midterm'); ?>
		      														        	<td><strong>Mid-term Payment:</strong></td>
		      														        	<td style="text-align: center;">Php <?php echo number_format($fees->midterm_fee, 2) ?></td>
		      														        	<td style="text-align: center;" id="midterm_total"><?php echo ($total_payment->trans_name == 'midterm') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
		      															        <td style="text-align: center;" id="midterm_bal"><?php echo ($total_payment->trans_name == 'midterm') ? 'Php '.number_format($fees->midterm_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->midterm_fee, 2); ?>
		      															        	<input type="hidden" name="midterm" data-id="midterm" class="bal" value="<?php echo ($total_payment->trans_name == 'midterm') ? number_format($fees->midterm_fee - $total_payment->total_amount, 2) : number_format($fees->midterm_fee, 2); ?>">
		      															        </td>
		      														        </tr>
		      														        <tr>
		      														        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'finals'); ?>
		      															        <td><strong>Finals Payment:</strong></td>
		      															        <td style="text-align: center;">Php <?php echo number_format($fees->finals_fee, 2) ?></td>
		      															        <td style="text-align: center;" id="finals_total"><?php echo ($total_payment->trans_name == 'finals') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
		      															        <td style="text-align: center;" id="finals_bal"><?php echo ($total_payment->trans_name == 'finals') ? 'Php '.number_format($fees->finals_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->finals_fee, 2); ?>
		      															        	<input type="hidden" name="finals" data-id="finals" class="bal" value="<?php echo ($total_payment->trans_name == 'finals') ? number_format($fees->finals_fee - $total_payment->total_amount, 2) : number_format($fees->finals_fee, 2); ?>">
		      															        </td>
		      														        </tr>
		      													        </tbody>
	      													        <?php $year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
	      													        <?php $sem = ['1st Sem.' => 1, '2nd Sem.' => 2]; ?>
																			    <?php elseif ($scheme->stud_pymnt_schm == 'MNTHLY'): ?>
													    			        <tbody>
													    			        	<?php $fees = $this->stud_assessment->get_stud_assessment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm); ?>
													    		        		<?php foreach ($fees as $item): ?>
													    		        			<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, $item->pymnt_for); ?>
													    		        			<tr>
													    			         			<td><strong>Payment for the Month of <?php echo $item->pymnt_for; ?></strong></td>
													    			         			<td style="text-align: center;">Php <?php echo number_format($item->amount, 2) ?></td>
													    						        <td style="text-align: center;" id="<?php echo $item->pymnt_for.'_total'; ?>"><?php echo ($total_payment->trans_name == $item->pymnt_for) ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
													    						        <td style="text-align: center;" id="<?php echo $item->pymnt_for,'_bal'; ?>"><?php echo ($total_payment->trans_name == $item->pymnt_for) ? 'Php '.number_format($item->amount - $total_payment->total_amount, 2) : 'Php '.number_format($item->amount, 2); ?>
													    						        	<input type="hidden" name="<?php echo $item->pymnt_for ?>" data-id="<?php echo $item->pymnt_for ?>" class="bal" value="<?php echo ($total_payment->trans_name == $item->pymnt_for) ? number_format($item->amount - $total_payment->total_amount, 2) : number_format($item->amount, 2); ?>">
													    						        </td>
													    					        </tr>
													    		        		<?php endforeach; ?>
													    			        </tbody>
																				  <?php endif; ?>
																				  </table>
																				</div>
																			</div>
																		<?php ?>
																	</div>
																</div>
															</div>
														</div>
													<?php endforeach; ?>

													<div id="others" class="tab-pane fade">
														<!-- other payments here -->
													</div>

													<div id="pymntHstry" class="tab-pane fade">
														<table class="table table-condensed table-bordered" id="hstry">
															<thead>
																<tr>
																	<th style="text-align: center;">Date</th>
																	<th style="text-align: center;">Course</th>
																	<th style="text-align: center;">Year</th>
																	<th style="text-align: center;">Semester</th>
																	<th style="text-align: center;">Fee Name</th>
																	<th style="text-align: center;">Amount Paid</th>
																	<th style="text-align: center;">Receipt No.</th>
																	<th style="text-align: center;">Cashier</th>
																</tr>
															</thead>
															<tbody>
															<?php $year = ['', '1st', '2nd', '3rd', '4th']; ?>
															<?php $pymnt_history = $this->stud_assessment->get_payment_history($stud_info->stud_id); ?>
															<?php if($pymnt_history): ?>
																<?php foreach($pymnt_history as $history): ?>
																<tr>
																	<td style="text-align: center;"><?php echo date('m-d-Y', strtotime($history->trans_date)); ?></td>
																	<td style="text-align: center;"><?php echo $history->stud_course; ?></td>
																	<td style="text-align: center;"><?php echo $year[$history->stud_year].' Year'; ?></td>
																	<td style="text-align: center;"><?php echo $history->stud_semester; ?></td>
																	<td style="text-align: center;"><?php echo $history->trans_name; ?></td>
																	<td style="text-align: center;"><?php echo 'Php '.number_format($history->trans_amount, 2); ?></td>
																	<td style="text-align: center;"><?php echo $history->trans_receipt_no; ?></td>
																	<td style="text-align: center;"><?php echo $history->cashier_id; ?></td>
																</tr>
																<?php endforeach; ?>
															<?php endif; ?>
															</tbody>
														</table>
													</div>
												</div><!-- /.tab-content -->
											</div><!-- /.tabbable -->
										<?php else: ?>
											<div class="tabbable">
												<ul class="nav nav-tabs" id="myTab">
													<li class="active">
														<a data-toggle="tab" href="<?php echo '#'.$stud_info->stud_course.'-'.$stud_info->stud_year.'-'.$sem[$stud_info->stud_sem]; ?>" aria-expanded="true">
															<?php echo $stud_info->stud_course.'-'.$year[$stud_info->stud_year].'-'.$stud_info->stud_sem; ?>
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div id="<?php echo $stud_info->stud_course.'-'.$stud_info->stud_year.'-'.$sem[$stud_info->stud_sem]; ?>" class="tab-pane active fade in">
														<?php echo form_open(site_url('admin/student_rcrd/update_assessment/'.$stud_info->stud_id), 'role="form" class="form-horizontal" id="assessment_form"'); ?>
														<input type="hidden" name="stud_course" value="<?php echo $stud_info->stud_course; ?>">
														<input type="hidden" name="stud_year" value="<?php echo $stud_info->stud_year; ?>">
														<input type="hidden" name="stud_semester" value="<?php echo $stud_info->stud_sem; ?>">
														<div class="row">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<fieldset>
																	<legend class="medium">Summary of Assessment</legend>
																	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																		<table class="table table-condensed">
																			<tbody>
																				<?php $x = 1; ?>
																				<?php if ($fees): ?>
																				<?php foreach($fees as $item): ?>
																					<tr>
																						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																							<label>
																								<input name="form-field-checkbox" class="fees ace ace-checkbox-2" id="feeCheck<?php echo $x; ?>" data-id="<?php echo $x; ?>" type="checkbox" />
																								<span class="lbl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item->fee_name; ?></span>
																							</label>
																							<input type="hidden" name="fee_name[]" id="fee_name<?php echo $x ?>" value="<?php echo $item->row_id; ?>">
																							<input type="hidden" name="f_name[]" id="fName<?php echo $x ?>" value="">
																						</td>
																						<?php if ($item->fee_name == 'Tuition Fee'): ?>
																							<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
																								Units
																								<input type="text" style="width:50px;text-align: right;" class="units" name="units" value="" id="units" data-id="<?php echo $x; ?>" maxlength="2" disabled/>
																							</td>
																						<?php else: ?>
																							<td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></td>
																						<?php endif; ?>
																						<td style="text-align: right;"><span id="feeAmount<?php echo $x; ?>"></span><input type="hidden" id="feeAmnt<?php echo $x; ?>" class="fee-amount" name="fees[]" value="" /></td>
																					</tr>
																					<?php $x++ ?>
																				<?php endforeach; ?>
																				<?php endif; ?>
																			</tbody>
																			<tfoot>
																				<tr>
																					<td style="font-weight: bold;">Discount:</td>
																					<td>
																						<div class="input-group">
																							<input type="textbox" id="dscnt" name="dscnt" class="discount input-xs col-xs-3 col-sm-3 col-md-3 col-lg-3 form-control" value="" maxlength="3" style="text-align:right;"/>
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
																					<td style="text-align: right;font-style: italic;"><span id="amount"></span><input type="hidden" name="f_amount" id="pymnt" value=""></td>
																				</tr>
																				<tr>
																					<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>Discount:</em></td>
																					<td style="text-align: right;font-style: italic;"><span id="disc"></span><input type="hidden" name="f_discount" id="discount" value=""></td>
																				</tr>
																				<tr>
																					<td colspan="2" style="font-weight: bold;font-size: 14px;"><em>TOTAL AMOUNT:</em></td>
																					<td style="text-align: right;font-style: italic;"><span id="totAmount"></span><input type="hidden" name="ft_amount" id="total_amount" value=""></td>
																				</tr>
																			</tfoot>
																		</table>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
																		<div class="row">
																			<div class="form-group">
																			  <label class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_pymnt_schm">Payment Scheme:</label>

																			  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
																			  	<div class="clearfix">
																					  <select class="form-control input-xxlarge" name="stud_pymnt_schm" id="pymntSchm">
																					  	<option value="">Select Payment Scheme</option>
																					  	<?php foreach($scheme as $item): ?>
																					  	<option value="<?php echo $item->scheme_code; ?>"><?php echo $item->scheme_code; ?></option>
																					  	<?php endforeach; ?>
																					  </select>
																					</div>
																			  </div>
																			</div><!-- form-group -->
																		</div>
																		<div class="row">
																			<div class="form-group">
																			  <label class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 no-padding-right" for="stud_pymnt_method">Payment Method:</label>

																			  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
																			  	<div class="clearfix">
																					  <select class="form-control input-xxlarge" name="stud_pymnt_method">
																					  	<option value="">Select Payment Method</option>
																					  	<option value="Over the Counter">Over the Counter</option>
																					  	<!-- <option value="Online Payment">Online Payment</option> -->
																					  </select>
																					</div>
																			  </div>
																			</div><!-- form-group -->
																		</div>
																		<div class="row">
																			<div id="payables"></div>
																		</div>
																	</div>
																</fieldset>
															</div>
														</div>
														<div class="row">
														  <div class="col-md-4">
														  	<button class="btn btn-danger btn-sm" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
																  <i class="ace-icon fa fa-check bigger-110"></i>
																  Update Assessment
																</button>
														  </div><!-- col-md-offset-3 -->
														</div><!-- /.form-buttons -->
														<?php echo form_close(); ?>
													</div>
												</div>
											</div><!-- /.tabbable -->
										<?php endif; ?>
										</div>

										<div class="row">
											<div class="space-2"></div>
											<div class="clearfix form-actions">
											  <div class="pull-right">
											  	<a href="<?php echo site_url('admin/student_rcrd'); ?>" class="btn btn-danger" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
													  <i class="ace-icon fa fa-arrow-left bigger-110"></i>
													  Go Back
													</a>
											  </div><!-- col-md-offset-3 -->
											</div><!-- clearfix -->
										</div><!-- /.form-buttons -->
									</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
								</div><!-- /.row -->
							</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
						</div><!-- /.row -->
					</div><!-- page-content -->
				</div>
			</div><!-- main-content-inner -->
		</div><!-- main-content -->

		<div id="modal-form" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="red bigger">Update Student Assessment</h4>
					</div>
				<?php echo form_open(site_url('admin/student_rcrd/update_assessment/'.$stud_info->stud_id), 'role="form" class="form-horizontal"'); ?>
					<div class="modal-body">
						<!--insert result here-->
					</div>
					<div class="modal-footer">
						<button class="btn btn-sm btn-danger addSchm" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Adding">
							<i class="ace-icon fa fa-check"></i>
							Update
						</button>
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Cancel
						</button>
					</div>
				<?php echo form_close(); ?>
				</div>
			</div>
		</div>

		<div id="edit-form" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="red bigger">Edit Student Assessment</h4>
					</div>
				<?php echo form_open(site_url('admin/student_rcrd/edit_asmnt/'.$stud_info->stud_id), 'role="form" class="form-horizontal"'); ?>
					<div class="modal-body" id="edit-result">
						<!--insert result here-->
					</div>
					<div class="modal-footer">
						<button class="btn btn-sm btn-danger addSchm" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Adding">
							<i class="ace-icon fa fa-check"></i>
							Edit
						</button>
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Cancel
						</button>
					</div>
				<?php echo form_close(); ?>
				</div>
			</div>
		</div>

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

			$('.tab-content').find('div').first().addClass('active in');

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

			var updteAssmntBtn = $('#updteAssmntBtn');
			var editAssmntBtn = $('#editAssmntBtn');

			updteAssmntBtn.on('click', function(e){
				var studID = updteAssmntBtn.attr('data-id');

				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('admin/student_rcrd/get_student_assessment_info'); ?>',
				  data: { 
				  				studID: studID
				  			},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('.modal-body').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');
				  },
				  success:function(data){
				    // successful request; do something with the data
				    //$('.modal-body').empty();
			      $('.modal-body').html(data);
				  },
				  error:function(){
				    // failed request; give feedback to user
				    $('.modal-body').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
				  }
				});
			});

			editAssmntBtn.on('click', function(e){
				var studID = editAssmntBtn.attr('data-id');
				var course = editAssmntBtn.attr('data-course');
				var yr = editAssmntBtn.attr('data-yr');
				var sem = editAssmntBtn.attr('data-sem');
				var scheme = editAssmntBtn.attr('data-scheme');

				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('admin/student_rcrd/get_student_assessment'); ?>',
				  data: { 
				  				studID: studID,
				  				course: course,
				  				yr: yr,
				  				sem: sem,
				  				scheme: scheme
				  			},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('.modal-body').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');
				  },
				  success:function(data){
				    // successful request; do something with the data
				    //$('.modal-body').empty();
						$('#edit-result').html(data);
				  },
				  error:function(){
				    // failed request; give feedback to user
				    $('.modal-body').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
				  }
				});
			});

			$('#modal-form').on('shown.bs.modal', function () {
		    $(this).find('.modal-dialog')
		    .css(
		    	{
		    		width:'1024px',
            height:'auto', 
			      'max-height':'100%'
			    }
			  );
			});

			$('#edit-form').on('shown.bs.modal', function () {
		    $(this).find('.modal-dialog')
		    .css(
		    	{
		    		width:'1024px',
            height:'auto', 
			      'max-height':'100%'
			    }
			  );
			});

			var payment = 0;
			var tuition_fee = 0;
			var misc_fee = 0;
			$('#tuition_fee').val(parseFloat(tuition_fee));
			$('#misc_fee').val(parseFloat(misc_fee));

			$(document).on('change', '[class^=fees]', function(){
				var id = $(this).attr('data-id');
				var feeRow = $('#fee_name'+id).val();

				if ($(this).is(':checked')) {
					$.get('<?php echo site_url("admin/student_rcrd/get_fee_amount") ?>', {id:feeRow}, function(data){
						if (id == 1) {
							$('#units').prop('disabled', false);
							$('#units').on('change', function(){
								var misc = $('#misc_fee').val();
								var tuition = data * $(this).val();
								payment = parseFloat(misc) + (data * $(this).val());
								$('#feeAmount'+id).html('Php '+ number_format(tuition, 2,'.', ','));
								$('#feeAmnt'+id).val(parseFloat(tuition));
								$('#fName'+id).val(feeRow);
								$('#amount').html('Php '+ number_format(payment, 2,'.', ','));
								$('#tuition_fee').val(parseFloat(tuition));
								$('#pymnt').val(parseFloat(payment));
							});
						}
						else {
							payment += parseFloat(data);
							misc_fee += parseFloat(data);
							$('#misc_fee').val(parseFloat(misc_fee));
							$('#feeAmount'+id).html('Php '+ number_format(data, 2,'.', ','));
							$('#feeAmnt'+id).val(parseFloat(data));
							$('#fName'+id).val(feeRow);
							$('#amount').html('Php '+ number_format(payment, 2,'.', ','));
							$('#pymnt').val(parseFloat(payment));
						}
					});
				}
				else {
					if (id == 1) {
						$('#feeAmount'+id).empty();
						$('#feeAmnt'+id).val(parseFloat(0));
						$('#fName'+id).val('');
						var tuition_fee = $('#tuition_fee').val();
						payment -= parseFloat(tuition_fee);
						$('#amount').html('Php '+ number_format(payment, 2,'.', ','));
						$('#pymnt').val(parseFloat(payment));
						$('#tuition_fee').val(0);
						$('#units').val('');
						$('#misc_fee').val(parseFloat(payment));
						$('#units').prop('disabled', true);
					}
					else {
						$('#feeAmount'+id).empty();
						$('#feeAmnt'+id).val(parseFloat(0));
						$('#fName'+id).val('');
						$.get('<?php echo site_url("admin/student_rcrd/get_fee_amount") ?>', {id:feeRow}, function(data){
							payment -= parseFloat(data);
							misc_fee -= parseFloat(data);
							$('#amount').html('Php '+ number_format(payment, 2,'.', ','));
							$('#pymnt').val(parseFloat(payment));
							$('#misc_fee').val(parseFloat(misc_fee));
						});
					}
				}
			});

			$(document).on('blur', '#dscnt', function(){
				var discount = $(this).val();

				if (discount > 0){
					var payment = $('#pymnt').val();
					var total_amount = parseFloat(payment) - (parseFloat(payment) * (parseFloat(discount) / 100));
					var total_discount = parseFloat(payment) * (parseFloat(discount) / 100);

					$('#totAmount').html('Php '+ number_format(total_amount, 2,'.', ','));
					$('#disc').html('Php '+ number_format(total_discount, 2,'.', ','));
					$('#discount').val(parseFloat(total_discount));
					$('#total_amount').val(parseFloat(total_amount));
				}
				else {
					var payment = $('#pymnt').val();
					$('#totAmount').html('Php '+ number_format(payment, 2,'.', ','));
					$('#disc').html('Php '+ number_format(total_discount, 2,'.', ','));
					$('#discount').val(parseFloat(total_discount));
					$('#total_amount').val(parseFloat(payment));
				}
			});

			$(document).on('change', '#pymntSchm', function(){
				var scheme = $(this).val();
				var total_fees = $('#total_amount').val();

				if (total_fees) {
					$.ajax({
					  type: 'GET',
					  url: '<?php echo site_url('admin/student_rcrd/get_payment_scheme'); ?>',
					  data: { scheme: scheme, totalFees: total_fees },
					  // beforeSend:function(){
					  //   // this is where we append a loading image
					  //   $('#ajax-panel').html('<div class="loading"><img src="/images/loading.gif" alt="Loading..." /></div>');
					  // },
					  success:function(data){
					    // successful request; do something with the data
					    $('#payables').empty();
				      $('#payables').append(data);
					  },
					  error:function(){
					    // failed request; give feedback to user
					    $('#payables').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
					  }
					});
				}
				else {
					var html = '<h4>You must have a valid assessment.</h4>';
					$('#pymntSchm').val('');
					$('#payables').empty();
		      $('#payables').append(html);
				}
			});

			$('#assessment_form').validate({
			  errorElement: 'div',
			  errorClass: 'help-block',
			  focusInvalid: false,
			  ignore: "",
			  rules: {
			    stud_pymnt_schm: {
			    	required: true,
			    },
			    stud_pymnt_method: {
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

			$('#loadingBtn').on(ace.click_event, function () {
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