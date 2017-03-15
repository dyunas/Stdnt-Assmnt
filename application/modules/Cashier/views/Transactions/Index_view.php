 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo base_url('cashier/dashboard'); ?>">Dashboard</a>
						</li>
						<li>Daily Transactions</li>
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
							View Daily Transactions
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12">
							<table class="table table-bordered table-condensed" id="dailyTransTbl">
								<thead>
									<tr>
										<th>Date</th>
										<th>Fee Name</th>
										<th>Amount Paid</th>
										<th>Paid by</th>
										<th>Course</th>
										<th>Year Level</th>
										<th>Semester</th>
										<th>Paid to</th>
										<th>Receipt #</th>
									</tr>
								</thead>
								<tbody>
								<?php $year_level = ['', '1st Year', '2nd Year', '3rd Year', '4th Year'] ?>
								<?php if($dly_trans): ?>
									<?php foreach($dly_trans as $trans): ?>
									<tr>
										<td style="text-align: center;vertical-align: middle;"><?php echo $trans->trans_date; ?></td>
										<td style="text-align: center;vertical-align: middle;"><?php echo $trans->trans_name; ?></td>
										<td style="text-align: right;"><?php echo 'Php '.number_format($trans->trans_amount, 2); ?></td>
										<td><?php echo $trans->stud_name; ?></td>
										<td style="text-align: center;vertical-align: middle;"><?php echo $trans->stud_course; ?></td>
										<td style="text-align: center;vertical-align: middle;"><?php echo $year_level[$trans->stud_year]; ?></td>
										<td style="text-align: center;vertical-align: middle;"><?php echo $trans->stud_semester; ?></td>
										<td><?php echo $trans->fname.' '.$trans->lname; ?></td>
										<td style="text-align: center;vertical-align: middle;"><?php echo $trans->trans_receipt_no; ?></td>
									</tr>
									<?php endforeach; ?>
								<?php endif; ?>
								</tbody>
							</table>
						</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
					</div><!-- /.row -->
				</div><!-- page-content -->
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
	<script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/autoNumeric.min.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jQuery.print.js'); ?>"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$('#dailyTransTbl').dataTable();
		});
	</script>
</body>