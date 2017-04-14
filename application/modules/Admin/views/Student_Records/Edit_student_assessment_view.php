<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
								  		<option value="<?php echo $item->course_code; ?>" <?php echo ($ccourse == $item->course_code) ? 'selected="selected"' : ''; ?>><?php echo $item->course_name; ?></option>
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
									  	<option value="1" <?php echo ($cyear == '1') ? 'selected="selected"' : ''; ?>>1st Year</option>
									  	<option value="2" <?php echo ($cyear == '2') ? 'selected="selected"' : ''; ?>>2nd Year</option>
									  	<option value="3" <?php echo ($cyear == '3') ? 'selected="selected"' : ''; ?>>3rd Year</option>
									  	<option value="4" <?php echo ($cyear == '4') ? 'selected="selected"' : ''; ?>>4th Year</option>
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
									  <input type="text" id="stud_semester" name="stud_semester" value="<?php echo $csem; ?>" readonly="readonly">
									</div>
							  </div>
							</div><!-- form-group -->
						</div><!-- /.third-column -->
					</div><!-- /.first row -->

					<div class="space-2"></div>
					<div class="space-2"></div>

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
																<input name="form-field-checkbox" class="fees ace ace-checkbox-2" id="feeCheck<?php echo $x; ?>" data-id="<?php echo $x; ?>" type="checkbox" <?php echo ($item->fee_amount > 0) ? 'checked="checked"' : ''; ?> />
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
												<input type="hidden" name="tuition_fee" id="tuition_fee" value="0" />
												<input type="hidden" name="misc_fee" id="misc_fee" value="0" />
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
												  <select class="form-control input-xxlarge" name="stud_pymnt_schm" id="pymntSchm" required>
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
												  <select class="form-control input-xxlarge" name="stud_pymnt_method" required>
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
				</div>
			</div>
		</fieldset><!-- /.student assessment -->
	</div>
</div>