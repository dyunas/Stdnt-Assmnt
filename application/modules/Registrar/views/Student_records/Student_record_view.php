 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo site_url('registrar/dashboard'); ?>">Dashboard</a>
						</li>
						<li><a href="<?php echo site_url('registrar/student_rcrd'); ?>">Student's Record</a></li>
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
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<img src="<?php echo base_url('assets/uploads/profile/'.$stud_info->stud_avatar); ?>" />
									</div><!-- /.col-lg-3 col-md-3 col-sm-3 col-xs-12 -->

									<div class="col-lg-9 col-md-9 col-xs-12">
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
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-xs-12">
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

										<div class="space-2"></div>

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

										<fieldset>
											<h4>Student Assessment:</h4>
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
										<?php $pymnt_scheme = $this->student->get_stud_pymnt_schme($stud_info->stud_id); ?>
										<?php if ($pymnt_scheme): ?>
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
																		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
										<?php endif; ?>
										</div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="space-2"></div>
												<div class="clearfix form-actions">
												  <div class="pull-right">
												  	<a href="<?php echo site_url('registrar/student_rcrd'); ?>" class="btn btn-danger" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
														  <i class="ace-icon fa fa-arrow-left bigger-110"></i>
														  Go Back
														</a>
												  </div><!-- col-md-offset-3 -->
												</div><!-- clearfix -->
											</div>
										</div><!-- /.form-buttons -->
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

			$('.tab-content').find('div').first().addClass('active in');

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