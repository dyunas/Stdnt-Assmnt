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
						<li>Transactions</li>
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
							Transactions
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-inline">
										<div class="input-group">
											<label class="input-group-addon btn-danger" style="color: #fff;font-size: 12px;text-shadow: -1px 0px #000;">
												Transaction Date:
											</label>
											<input type="text" class="form-control search-query input-xs date-picker" name="trans_dte" id="trans_dte" value="" placeholder="mm/dd/yyyy" />
										</div>
										<button type="button" class="btn btn-danger btn-sm" id="searchTrans">
											<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
											Search
										</button>

										<button type="button" class="btn btn-danger btn-sm" id="clearResult">
											<span class="ace-icon fa fa-undo icon-on-right bigger-110"></span>
											Clear
										</button>

										<button type="button" class="btn btn-danger btn-sm" id="print">
											<span class="ace-icon fa fa-print icon-on-right bigger-110"></span>
											Print
										</button>

										<button type="button" class="btn btn-danger btn-sm" id="print">
											<span class="ace-icon fa fa-file-excel-o icon-on-right bigger-110"></span>
											Export to Excel
										</button>
									</div>
								</div><!-- /.col-lg-4 col-md-4 col-sm-4 col-xs-12 -->
							</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
						</div><!-- /.row -->
						<hr/>
						<div class="row" id="printThis">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div id="trans_result">
									<!-- append transaction table here -->
								</div>
							</div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
						</div>
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
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jQuery.print.js'); ?>"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			})
			//show datepicker when clicking on the icon
			.next().on(ace.click_event, function(){
				$(this).prev().focus();
			});

			$('#trans_dte').mask('99/99/9999');

			$('#clearResult').on('click', function(data){
				$('#trans_dte').val('');
				$('#trans_result').empty();
			});

			$('#searchTrans').on('click', function(e){
				var trans_dte = $('#trans_dte');

				$.ajax({
					type: 'GET',
					url: '<?php echo site_url('cashier/transaction/get_transaction_tbl'); ?>',
					data: {
						transDte: trans_dte.val()
					},
					beforeSend: function(){
						// this is where we append a loading image
			    	$('#trans_result').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');
				  },
		  	  success:function(data){
		  	    // successful request; do something with the data
		  	    //$('#result').empty();
		        $('#trans_result').html(data);
		        // $('#transTbl').dataTable();
		  	  },
		  	  error:function(){
		  	    // failed request; give feedback to user
		  	    $('#trans_result').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
		  	  }
				});
			});

			$(document).on('click', '#print', function(){
				$('#printThis').print();
			});
		});
	</script>
</body>