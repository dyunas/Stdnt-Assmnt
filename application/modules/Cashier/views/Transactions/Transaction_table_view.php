<style type="text/css">
	.img-position {
		/*float:left;*/
		top: 12px;
		left: 50px;
		position: absolute;
	}
	@media print {
		#print_head {
			display: block!important;
		}
	}
</style>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="print_head" style="display:none;">
		<img src="<?php echo base_url('assets/images/cdsp_logo.png'); ?>" class="img-position">
		<h3 class="center">
			Colegio de San Pedro<br/>
			<small>Phase 1A, Pacita Complex 1, San Pedro, Laguna</small><br/>
			<small>Tel. No.: 847-5535 / 529-1725 / 529-3905 / 869-0155</small>
		</h3>
	</div>
</div>
<br/>
<div class="page-header">
	<h1>
		<?php echo date('M d, Y', strtotime($trans_date)).' Transactions'; ?>
	</h1>
</div><!-- /.page-header -->
<table class="table table-condensed table-bordered" id="transTbl">
	<thead>
		<tr>
			<th style="text-align: center">Date</th>
			<th style="text-align: center">Receipt #</th>
			<th>Student</th>
			<th>Cashier</th>
			<th>Fee</th>
			<th style="text-align: right">Amoun Paid</th>
		</tr>
	</thead>
	<tbody>
		<?php $total_amount = 0; ?>
		<?php if ($transactions):?>
			<?php foreach($transactions as $row): ?>
			<tr>
				<td style="text-align: center"><?php echo date('m-d-Y', strtotime($row->trans_date)); ?></td>
				<td style="text-align: center"><?php echo $row->trans_receipt_no; ?></td>
				<td><?php echo $row->stud_name; ?></td>
				<td><?php echo $row->fname.' '.$row->lname; ?></td>
				<td><?php echo $row->trans_name; ?></td>
				<td style="text-align: right;"><?php echo 'Php '.number_format($row->trans_amount, 2); ?></td>
				<?php $total_amount += $row->trans_amount; ?>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td style="font-weight:bold;text-align: right;">TOTAL:</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: right;font-weight: bold;"><?php echo 'Php '.number_format($total_amount, 2); ?></td>
			</tr>
		<?php else: ?>
			<tr>
				<td colspan="6">No result</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>