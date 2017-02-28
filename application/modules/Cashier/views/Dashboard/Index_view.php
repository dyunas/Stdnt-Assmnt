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
							View Student Record
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="form-inline">
										<div class="input-group">
											<!-- <span class="input-group-addon">
												Student ID:
											</span> -->
											<input type="text" class="form-control search-query" name="stud_id" id="stud_id" value="" placeholder="Student ID" />
											<span class="input-group-btn">
												<button type="button" class="btn btn-danger btn-sm" id="searchStudent">
													<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
													Search
												</button>
											</span>
										</div>

										<button type="button" class="btn btn-danger btn-sm" id="clearResult">
											<span class="ace-icon fa fa-undo icon-on-right bigger-110"></span>
											Clear
										</button>
									</div>
								</div><!-- /.col-lg-4 col-md-4 col-xs-12 -->
							</div><!-- /.row -->
							<hr/>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12">
									<div id="result"></div>
								</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
							</div><!-- /.row -->
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
			//$('#stud_rec').dataTable();

			//Search student
			$('#searchStudent').on('click', function(data){
				var stud_id = $('#stud_id').val();
				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('cashier/get_student_record'); ?>',
				  data: { stud_id: stud_id},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('#result').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');
				  },
				  success:function(data){
				    // successful request; do something with the data
				    //$('#result').empty();
			      $('#result').html(data);
			      $('#hstry').dataTable();
				  },
				  error:function(){
				    // failed request; give feedback to user
				    $('#result').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
				  }
				});
			});

			$('#clearResult').on('click', function(data){
				$('#stud_id').val('');
				$('#result').empty();
			});

			$('#stud_id').mask('99-9999-99');

			$(document).on('click', 'a.manage', function(){
				var tag = $(this).attr('id');
				var stud_id = $(this).attr('data-id');
				var stud_year = $(this).attr('data-year');
				var stud_sem = $(this).attr('data-sem');
				var scheme = $(this).attr('data-scheme');
				
				//console.log(tag+'/'+stud_id+'/'+stud_year+'/'+stud_sem+'/'+scheme);

				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('cashier/get_student_payment'); ?>',
				  data: { 
				  				tag: tag, 
				  				stud_id: stud_id,
				  				year: stud_year,
				  				sem: stud_sem,
				  				scheme: scheme 
				  			},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('.modal-body').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');
				  },
				  success:function(data){
				    // successful request; do something with the data
				    //$('#result').empty();
			      $('.modal-body').html(data);
			      $('#amount_pd').autoNumeric('init');
			      $('#amount_pd').autoNumeric('set');
				  },
				  error:function(){
				    // failed request; give feedback to user
				    $('.modal-body').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
				  }
				});
			});

			$(document).on('blur', '#amount_pd', function(){
				$("#amnt_pd").attr('value', $(this).autoNumeric('get'));
				$("#amount").html($(this).autoNumeric('get'));
				var amount_pd = $("#amnt_pd").val();
				var amount_due = $("#amount_due").val();
				var total = parseFloat(amount_pd);
				var balance = parseFloat(amount_due - amount_pd);

				$('#totalRes').html(total);
				$('#totalRes').autoNumeric('init');
	      $('#totalRes').autoNumeric('set', total);

				$('#balRes').html(balance);
				$('#balRes').autoNumeric('init');
	      $('#balRes').autoNumeric('set', balance);
			});

			$(document).on('click', '#procPrint', function(){
				$('#amount').css('display','block');
				$('#amount_pd').attr('type','hidden');

				$('#printThis').print({
					globalStyles: true,
          mediaPrint: true,
          doctype: '<!doctype html>'
				});
			});
		});
	</script>
</body>