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
			      $('.tab-content').find('div').first().addClass('active in');
			      $('#hstry').dataTable();

			      $('input[class^=bal]').each(function(){
			      	var id = $(this).attr('data-id');

			      	if ($(this).val() == 0){
			      		$('#'+id).prop('disabled', true);
			      		$('#'+id).attr("disabled","disabled");
			      	}
			      });
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
				var stud_course = $(this).attr('data-course');
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
				  				stud_course: stud_course,
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
				$("#amount").html('Php '+number_format($(this).val(), 2, '.', ','));
				var amount_pd = $("#amnt_pd").val();
				var amount_due = $("#amount_due").val();
				var prev_pd = $('#prev_pd').val();
				if (prev_pd > 0){
					prev_pd = $('#prev_pd').val();
				}
				else {
					prev_pd = parseFloat(0);
				}
				var total = parseFloat(amount_pd) + parseFloat(prev_pd);
				var balance = parseFloat(amount_due) - parseFloat(total);

				$('#totalRes').html(total);
				$('#totalRes').autoNumeric('init');
	      $('#totalRes').autoNumeric('set', total);
	      $('#total').val(total);

				$('#balRes').html(balance);
				$('#balRes').autoNumeric('init');
	      $('#balRes').autoNumeric('set', balance);
	      $('#balance').val(balance);
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

			$(document).on('click', '#updtBtn', function(){
				var stud_status = $('#stud_status').val();
				var stud_id = $('#stud_id').val();
				var course = $('#course').val();
				var stud_year = $('#stud_year').val();
				var semester = $('#semester').val();
				var scheme = $('#scheme').val();
				var trans_date = '<?php echo date('Y-m-d'); ?>'
				var pymnt_for = $('#pymnt_for').val();
				var amount = $('#amnt_pd').val(); 
				var receipt_no = $('#receipt_no').val();
				var cashier_id = $('#cashier_id').val();
				var bal = $('#balance').val();
				var total = 'Php '+number_format($('#total').val(), 2, '.', ',');
				var balance = 'Php '+number_format($('#balance').val(), 2, '.', ',');

				// alert(stud_id+'/'+course+'/'+stud_year+'/'+semester+'/'+scheme+'/'+trans_date+'/'+pymnt_for+'/'+amount+'/'+receipt_no+'/'+cashier_id);

				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('cashier/update_payment'); ?>',
				  data:
				  { 
				  	stud_status: stud_status,
				  	stud_id: stud_id,
				 		course: course,
				 		stud_year: stud_year,
				 		semester: semester,
				 		scheme: scheme,
				 		trans_date: trans_date,
				 		pymnt_for: pymnt_for,
				 		amount: amount,
				 		receipt_no: receipt_no,
				 		cashier_id: cashier_id,
				 	},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('#cover').css('display','block');
				  },
				  success:function(data){
				    // successful request; do something with the data
			    	$('#'+pymnt_for+'_total').html(total);
						$('#'+pymnt_for+'_bal').html(balance);
						var tag = $('#tag').val();
						if (parseFloat(bal) == 0){
							$('#'+tag).prop('disabled', true);
		      		$('#'+tag).attr("disabled","disabled");
						}
						var year = ['', '1st Year', '2nd Year', '3rd Year', '4th Year'];
						var tblRow = '<tr>'+
														'<td style="text-align: center;"><?php echo date('m-d-Y'); ?></td>'+
														'<td style="text-align: center;">'+course+'</td>'+
														'<td style="text-align: center;">'+year[stud_year]+'</td>'+
														'<td style="text-align: center;">'+semester+'</td>'+
														'<td style="text-align: center;">'+pymnt_for+'</td>'+
														'<td style="text-align: center;">'+number_format('Php '+amount, 2, '.', ',')+'</td>'+
														'<td style="text-align: center;">'+receipt_no+'</td>'+
														'<td style="text-align: center;">'+cashier_id+'</td>'+
													'</tr>';

						$('#hstry tbody').prepend(tblRow);
						$('#cover').css('display','none');
				  },
				  error:function(){
				    // failed request; give feedback to user
				    $('#cover').css('display','none');
				    bootbox.dialog({
				      message: "<p style='font-size:16px;'>Error updating student payment. Please try again later.</p>",
				      title: "<span style='font-size:18px;font-weight:bold;'><i class='fa fa-info-circle'></i>	Something went wrong</span>",
				      buttons: {
				        cancel: {
				          label: "Ok",
				          className: "btn btn-default"
				        }
				      }
				    });
				  }
				});
			})
		});
	</script>
</body>