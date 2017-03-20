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
			<?php if ($stud_info): ?>
				<fieldset>
					<h4>Student Information:</h4>
					<table class="table table-condensed">
						<tbody>
							<tr>
								<td>Student ID:</td>
								<td><?php echo $stud_info->stud_id; ?></td>
								<td colspan="4"></td>
							</tr>
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
						
				<?php $year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
				<?php $sem = ['1st Sem.' => 1, '2nd Sem.' => 2]; ?>

				<fieldset>
					<h4>Student Course and Year:</h4>
					<table class="table table-condensed">
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
								<div id="<?php echo $scheme->stud_course.'-'.$scheme->stud_year.'-'.$sem[$scheme->stud_sem]; ?>" class="tab-pane fade">
									<div class="row">
										<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<table class="table table-collapsed table-condensed">
														<tbody>
															<tr>
																<td>Payment Scheme:</td>
																<td><?php echo $scheme->stud_pymnt_schm; ?></td>
																<td>Payment Method:</td>
																<td><?php echo 'OTC'; ?></td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									        <h4>Payables for the whole term</h4>
									        <table class="table table-condensed">
									        	<thead>
									        		<tr>
									        			<th></th>
									        			<th style="text-align: center;">Amount Due</th>
									        			<th style="text-align: center;">Amount Paid</th>
									        			<th style="text-align: center;">Balance</th>
									        			<th style="text-align: center;">Action</th>
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
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="rsrvtn" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $scheme->stud_year; ?>" data-sem="<?php echo $scheme->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
												        </tr>
												        <tr>
												        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'upon'); ?>
													        <td><strong>Upon Enrollment:</strong></td>
													        <td style="text-align: center;">Php <?php echo number_format($fees->upon_fee, 2) ?></td>
												        	<td style="text-align: center;" id="upon_total"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($total_payment->total_amount) : '(Php 0.00)'; ?></td>
													        <td style="text-align: center;" id="upon_bal"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($fees->upon_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->upon_fee, 2); ?>
													        	<input type="hidden" name="upon" data-id="upon" class="bal" value="<?php echo ($total_payment->trans_name == 'upon') ? number_format($fees->upon_fee - $total_payment->total_amount, 2) : number_format($fees->upon_fee, 2); ?>">
													        </td>
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="upon" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $scheme->stud_year; ?>" data-sem="<?php echo $scheme->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
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
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="rsrvtn" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm; ?>">Manage</a></td>
							        	        </tr>
												        <tr>
												        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'upon'); ?>
												        	<td><strong>Upon Enrollment:</strong></td>
												        	<td style="text-align: center;">Php <?php echo number_format($fees->upon_fee, 2) ?></td>
												        	<td style="text-align: center;" id="upon_total"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
													        <td style="text-align: center;" id="upon_bal"><?php echo ($total_payment->trans_name == 'upon') ? 'Php '.number_format($fees->upon_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->upon_fee, 2); ?>
													        	<input type="hidden" name="upon" data-id="upon" class="bal" value="<?php echo ($total_payment->trans_name == 'upon') ? number_format($fees->upon_fee - $total_payment->total_amount, 2) : number_format($fees->upon_fee, 2); ?>">
													        </td>
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="upon" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
												        </tr>
												        <tr>
												        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'prelim'); ?>
												        	<td><strong>Prelim Payment:</strong></td>
												        	<td style="text-align: center;">Php <?php echo number_format($fees->prelim_fee, 2) ?></td>
												        	<td style="text-align: center;" id="prelim_total"><?php echo ($total_payment->trans_name == 'prelim') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
													        <td style="text-align: center;" id="prelim_bal"><?php echo ($total_payment->trans_name == 'prelim') ? 'Php '.number_format($fees->prelim_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->prelim_fee, 2); ?>
													        	<input type="hidden" name="prelim" data-id="prelim" class="bal" value="<?php echo ($total_payment->trans_name == 'prelim') ? number_format($fees->prelim_fee - $total_payment->total_amount, 2) : number_format($fees->prelim_fee, 2); ?>">
													        </td>
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="prelim" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
												        </tr>
												        <tr>
												        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'midterm'); ?>
												        	<td><strong>Mid-term Payment:</strong></td>
												        	<td style="text-align: center;">Php <?php echo number_format($fees->midterm_fee, 2) ?></td>
												        	<td style="text-align: center;" id="midterm_total"><?php echo ($total_payment->trans_name == 'midterm') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
													        <td style="text-align: center;" id="midterm_bal"><?php echo ($total_payment->trans_name == 'midterm') ? 'Php '.number_format($fees->midterm_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->midterm_fee, 2); ?>
													        	<input type="hidden" name="midterm" data-id="midterm" class="bal" value="<?php echo ($total_payment->trans_name == 'midterm') ? number_format($fees->midterm_fee - $total_payment->total_amount, 2) : number_format($fees->midterm_fee, 2); ?>">
													        </td>
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="midterm" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
												        </tr>
												        <tr>
												        	<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, 'finals'); ?>
													        <td><strong>Finals Payment:</strong></td>
													        <td style="text-align: center;">Php <?php echo number_format($fees->finals_fee, 2) ?></td>
													        <td style="text-align: center;" id="finals_total"><?php echo ($total_payment->trans_name == 'finals') ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
													        <td style="text-align: center;" id="finals_bal"><?php echo ($total_payment->trans_name == 'finals') ? 'Php '.number_format($fees->finals_fee - $total_payment->total_amount, 2) : 'Php '.number_format($fees->finals_fee, 2); ?>
													        	<input type="hidden" name="finals" data-id="finals" class="bal" value="<?php echo ($total_payment->trans_name == 'finals') ? number_format($fees->finals_fee - $total_payment->total_amount, 2) : number_format($fees->finals_fee, 2); ?>">
													        </td>
													        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="finals" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
												        </tr>
											        </tbody>
												    <?php elseif ($scheme->stud_pymnt_schm == 'MNTHLY'): ?>
											        <tbody>
											        	<?php $fees = $this->stud_assessment->get_stud_assessment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm); ?>
										        		<?php foreach ($fees as $item): ?>
										        			<?php $total_payment = $this->stud_assessment->get_total_payment($stud_info->stud_id, $scheme->stud_course, $scheme->stud_year, $scheme->stud_sem, $scheme->stud_pymnt_schm, $item->pymnt_for); ?>
										        			<tr>
											         			<td><strong>Total Payment for <?php echo $item->pymnt_for; ?></strong></td>
											         			<td style="text-align: center;">Php <?php echo number_format($item->amount, 2) ?></td>
														        <td style="text-align: center;" id="<?php echo $item->pymnt_for.'_total'; ?>"><?php echo ($total_payment->trans_name == $item->pymnt_for) ? 'Php '.number_format($total_payment->total_amount, 2) : '(Php 0.00)'; ?></td>
														        <td style="text-align: center;" id="<?php echo $item->pymnt_for,'_bal'; ?>"><?php echo ($total_payment->trans_name == $item->pymnt_for) ? 'Php '.number_format($item->amount - $total_payment->total_amount, 2) : 'Php '.number_format($item->amount, 2); ?>
														        	<input type="hidden" name="<?php echo $item->pymnt_for ?>" data-id="<?php echo $item->pymnt_for ?>" class="bal" value="<?php echo ($total_payment->trans_name == $item->pymnt_for) ? number_format($item->amount - $total_payment->total_amount, 2) : number_format($item->amount, 2); ?>">
														        </td>
														        <td style="text-align: center;"><a href="#pymnt_modal" data-toggle="modal" class="manage btn btn-sm btn-danger" id="<?php echo $item->pymnt_for; ?>" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $scheme->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" data-scheme="<?php echo $scheme->stud_pymnt_schm ?>">Manage</a></td>
													        </tr>
										        		<?php endforeach; ?>
											        </tbody>
													  <?php endif; ?>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
							<div id="others" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-xs-4 pull-right">
										<a href="#otherPymnt_modal" data-toggle="modal" data-id="<?php echo $stud_info->stud_id; ?>" data-course="<?php echo $stud_info->stud_course; ?>" data-year="<?php echo $stud_info->stud_year; ?>" data-sem="<?php echo $stud_info->stud_sem; ?>" id="otherFeeBtn" data-loading-text="<i class='ion-loading-c'></i> Please wait..." class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Add Other Fee</a>
									</div>
								</div>
								<hr/>
								<div class="row">
									<table class="table table-condensed table-bordered" id="otherPayments">
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
										<?php if($other_payments): ?>
											<?php foreach($other_payments as $others): ?>
											<tr>
												<td style="text-align: center;"><?php echo date('m-d-Y', strtotime($others->trans_date)); ?></td>
												<td style="text-align: center;"><?php echo $others->stud_course; ?></td>
												<td style="text-align: center;"><?php echo $year[$others->stud_year].' Year'; ?></td>
												<td style="text-align: center;"><?php echo $others->stud_sem; ?></td>
												<td style="text-align: center;"><?php echo $others->fee_name; ?></td>
												<td style="text-align: center;"><?php echo 'Php '.number_format($others->amount_pd, 2); ?></td>
												<td style="text-align: center;"><?php echo $others->receipt_no; ?></td>
												<td style="text-align: center;"><?php echo $others->cashier_id; ?></td>
											</tr>
											<?php endforeach; ?>
										<?php endif; ?>
										</tbody>
									</table>
								</div>
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
				</div><!-- /.row -->

				<div class="space-2"></div>

				<div id="pymnt_modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="smaller lighter blue no-margin">Manage Payment</h3>
							</div>
						<?php //echo form_open(site_url('cashier/update_payment/'.$stud_info->stud_id), 'class="form-horizontal" role="form" id="student_form"'); ?>
							<div class="modal-body">
								<div id="modalBody"></div>
							</div>

							<div class="modal-footer">
								<button class="btn btn-sm btn-danger" type="button" id="procPrint">
									<i class="ace-icon fa fa-print"></i>
									Print
								</button>

								<button class="btn btn-sm btn-danger" type="button" data-dismiss="modal" id="updtBtn">
									<i class="ace-icon fa fa-check"></i>
									Update Payment
								</button>

								<button class="btn btn-sm btn-danger" data-dismiss="modal">
									<i class="ace-icon fa fa-times"></i>
									Close
								</button>
							</div>
						<?php //echo form_close(); ?>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>

				<div id="otherPymnt_modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="smaller lighter blue no-margin">Other Payment</h3>
							</div>
						<?php echo form_open('', 'class="form-horizontal" role="form" id="otherPymnt_form"'); ?>
							<div class="modal-body">
								<div class="row" id="printThisOthers">
									<div class="col-lg-12 col-md-12 col-xs-12">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
													<img src="<?php echo base_url('assets/images/cdsp_logo.png'); ?>" alt="CDSP-LOGO"/>
												</div>
												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
													<h4 style="text-align: center;">
														Colegio de San Pedro<br/>
														<small>Phase 1A, Pacita Complex 1, San Pedro, Laguna</small><br/>
														<small>Tel. No.: 847-5535 / 529-1725 / 529-3905 / 869-0155</small>
													</h4>
												</div>
											</div>
										</div>
										<br/>
										<input type="hidden" name="cashier_id" id="cashier_id" value="<?php echo $usr->user_id; ?>">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12">
												<table class="table table-condensed">
													<?php $year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
													<tbody>
														<tr>
															<td>Student ID:</td>
															<td><?php echo $stud_info->stud_id; ?><input type="hidden" name="ostud_id" id="ostud_id" value="<?php echo $stud_info->stud_id; ?>"></td>
															<td colspan="2"></td>
															<td>Receipt No.:</td>
															<td><span style="display:none;" id="ornum"></span><input type="text" name="or_num" id="or_num" value="" required="required"/></td>
														</tr>
														<tr>
															<td>Name:</td>
															<td colspan="2"><?php echo $stud_info->stud_name; ?></td>
															<td colspan="3"></td>
														</tr>
														<tr>
															<td>Course:</td>
															<td><?php echo $stud_info->stud_course; ?><input type="hidden" name="ocourse" id="ocourse" value="<?php echo $stud_info->stud_course; ?>"></td>
															<td>Year:</td>
															<td><?php echo $year[$stud_info->stud_year]; ?><input type="hidden" name="ostud_year" id="ostud_year" value="<?php echo $stud_info->stud_year; ?>"></td>
															<td>Semester:</td>
															<td><?php echo $stud_info->stud_sem; ?><input type="hidden" name="osemester" id="osemester" value="<?php echo $stud_info->stud_sem; ?>"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div><!-- /.student information -->

										<div class="space-2"></div>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-xs-12">
												<table class="table table-condensed table-bordered">
													<tbody>
														<tr>
															<td>Payment for:</td>
															<td><span style="display:none;" id="opymnt"></span><input type="text" name="opymnt_for" id="opymnt_for" value="" style="width:100%;" required="required"/></td>
														</tr>
														<tr>
															<td>Amount:</td>
															<td><span style="display:none;" id="oamount"></span><input type="text" name="oamount_pd" id="oamount_pd" value="" style="width:100%;" required="required"/></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
								</div><!-- /.row -->
							</div>

							<div class="modal-footer">
								<button class="btn btn-sm btn-danger" type="button" id="procPrintOthers">
									<i class="ace-icon fa fa-print"></i>
									Print
								</button>

								<button class="btn btn-sm btn-danger" type="button" data-dismiss="modal" id="procPymnt">
									<i class="ace-icon fa fa-check"></i>
									Process Payment
								</button>

								<button class="btn btn-sm btn-danger" data-dismiss="modal">
									<i class="ace-icon fa fa-times"></i>
									Close
								</button>
							</div>
						<?php echo form_close(); ?>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
			<?php else: ?>
				<fieldset>
					<h4>No records to show.</h4>
				</fieldset>
			<?php endif; ?>
			</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
		</div><!-- /.row -->
	</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
</div><!-- /.row -->