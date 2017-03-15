<div class="row" id="printThis">
	<div class="col-lg-12 col-md-12 col-xs-12">
	<?php if ($stud_info): ?>
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
		<input type="hidden" name="tag" id="tag" value="<?php echo $tag; ?>">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<table class="table table-condensed">
					<?php $year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
					<tbody>
						<tr>
							<td>Student ID:</td>
							<td><?php echo $stud_info->stud_id; ?><input type="hidden" name="stud_id" id="stud_id" value="<?php echo $stud_info->stud_id; ?>"></td>
							<td colspan="2"></td>
							<td>Receipt No.:</td>
							<td>123456789<input type="hidden" name="receipt_no" id="receipt_no" value="<?php echo '123456789'; ?>"></td>
						</tr>
						<tr>
							<td>Name:</td>
							<td colspan="2"><?php echo $stud_info->stud_name; ?></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td>Course:</td>
							<td><?php echo $assessment->course; ?><input type="hidden" name="course" id="course" value="<?php echo $assessment->course; ?>"></td>
							<td>Year:</td>
							<td><?php echo $year[$assessment->year]; ?><input type="hidden" name="stud_year" id="stud_year" value="<?php echo $assessment->year; ?>"></td>
							<td>Semester:</td>
							<td><?php echo $assessment->semester; ?><input type="hidden" name="semester" id="semester" value="<?php echo $assessment->semester; ?>"></td>
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
						<?php if ($scheme == 'CSHPYMNT'): ?>
							<?php if ($tag == 'rsrvtn'): ?>
							<tr>
								<td colspan="4">Reservation Fee</td>
								<td style="text-align: right;"><?php echo $fees->rsrvtn_fee; ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->rsrvtn_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'reservation' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
							</tr>
							<?php elseif ($tag == 'upon'): ?>
							<tr>
								<td colspan="4">Upon Enrollment</td>
								<td style="text-align: right;"><?php echo $fees->upon_fee; ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->upon_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'upon' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
								<input type="hidden" name="stud_status" id="stud_status" value="Enrolled">
							</tr>
							<?php endif; ?>
						<?php elseif ($scheme == 'INSTLMNT'): ?>
							<?php if ($tag == 'rsrvtn'): ?>
							<tr>
								<td colspan="4">Reservation Fee</td>
								<td style="text-align: right;">Php <?php echo number_format($fees->rsrvtn_fee, 2); ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->rsrvtn_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'reservation' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
							</tr>
							<?php elseif ($tag == 'upon'): ?>
							<tr>
								<td colspan="4">Upon Enrollment</td>
								<td style="text-align: right;">Php <?php echo number_format($fees->upon_fee, 2); ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->upon_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'upon' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
								<input type="hidden" name="stud_status" id="stud_status" value="Enrolled">
							</tr>
							<?php elseif ($tag == 'prelim'): ?>
							<tr>
								<td colspan="4">Prelim</td>
								<td style="text-align: right;">Php <?php echo number_format($fees->prelim_fee, 2); ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->prelim_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'prelim' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
							</tr>
							<?php elseif ($tag == 'midterm'): ?>
							<tr>
								<td colspan="4">Midterm</td>
								<td style="text-align: right;">Php <?php echo number_format($fees->midterm_fee, 2); ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->midterm_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'midterm' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
							</tr>
							<?php elseif ($tag == 'finals'): ?>
							<tr>
								<td colspan="4">Finals</td>
								<td style="text-align: right;">Php <?php echo number_format($fees->finals_fee, 2); ?></td>
								<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $fees->finals_fee ?>" />
								<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo 'finals' ?>" />
								<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
							</tr>
							<?php endif; ?>
						<?php elseif ($scheme == 'MNTHLY'): ?>
							<?php foreach($fees as $item): ?>
								<?php if($item->pymnt_for == $tag): ?>
								<tr>
									<td colspan="4"><?php echo $tag; ?></td>
									<td style="text-align: right;">Php <?php echo number_format($item->amount, 2); ?></td>
									<input type="hidden" name="amout_due" id="amount_due" value="<?php echo $item->amount ?>" />
									<input type="hidden" name="pymnt_for" id="pymnt_for" value="<?php echo $tag ?>" />
									<input type="hidden" name="scheme" id="scheme" value="<?php echo $scheme ?>" />
									<?php echo ($tag == 'upon') ? '<input type="text" name="stud_status" id="stud_status" value="Enrolled">' : ''; ?>
								</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						<tr>
							<td colspan="4">Amount Paid</td>
							<td style="text-align:right;">
								<input type="text" name="amount_pd" value="" id="amount_pd" style="text-align:right;" class="input-sm"/>
								<input type="hidden" name="amnt_pd" value="" id="amnt_pd" style="text-align:right;" class="input-sm"/>
								<span style="display:none;" id="amount"></span>
							</td>
						</tr>
						<tr>
							<td colspan="4">Previous Payment</td>
							<td style="text-align:right;">
								Php <?php echo ($total_payment) ? number_format($total_payment->total_amount, 2) : ''; ?>
								<input type="hidden" name="prev_pd" value="<?php echo ($total_payment) ? $total_payment->total_amount : 0; ?>" id="prev_pd" style="text-align:right;" class="input-sm"/>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="4"><em>Total:</em></th>
							<th style="text-align:right;"><em><span id="totalRes"></span></em>
							<input type="hidden" name="total" value="" id="total" style="text-align:right;" class="input-sm"/></th>
						</tr>
						<tr>
							<th colspan="4"><em>Balance:</em></th>
							<th style="text-align:right;"><em><span id="balRes"></span></em>
							<input type="hidden" name="balance" value="" id="balance" style="text-align:right;" class="input-sm"/></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	<?php else: ?>
		<fieldset>
			<h4>No records to show.</h4>
		</fieldset>
	<?php endif; ?>
	</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
</div><!-- /.row -->