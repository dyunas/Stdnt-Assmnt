 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
						</li>
						<li>Course Manager</li>
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
								Course Manager
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Available Courses
								</small>
							</h1>
						</div><!-- /.page-header -->


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
							<div class="col-lg-3 col-md-4 col-xs-4 pull-right">
								<a href="#modal-form" role="button" data-toggle="modal" class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Add New Course</a>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<table id="course_tbl" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Course Name</th>
											<th>Course Code</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php if ($courses): ?>
											<?php foreach($courses as $item): ?>
												<tr>
													<td><?php echo $item->course_name; ?></td>
													<td><?php echo $item->course_code; ?></td>
													<td id="status<?php echo $item->course_code; ?>"><?php echo $item->status; ?>
													<td>
														<div class="hidden-sm hidden-xs action-buttons">
															<a class="editBtn red" href="#edit-form" data-rel="tooltip" data-placement="bottom" title="Edit" data-id="<?php echo $item->course_code; ?>" role="button" data-toggle="modal">
																<i class="ace-icon fa fa-pencil bigger-130"></i>
															</a>
															<a class="toggler red" href="#" data-rel="tooltip" data-placement="bottom" title="Toggle" data-id="<?php echo $item->course_code; ?>" data-status="<?php echo $item->status; ?>">
																<i class="toggler-icon ace-icon fa bigger-130" id="<?php echo $item->course_code; ?>"></i>
																<input type="hidden" class="iconica" data-id="<?php echo $item->course_code; ?>" id="icon<?php echo $item->course_code; ?>" value="<?php echo $item->status; ?>">
															</a>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										<?php else: ?>
											<tr>
												<td colspan="3">No Courses Available</td>
											</tr>
										<?php endif; ?>
									</tbody>
								</table>
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
						<h4 class="red bigger">Add New Course</h4>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 col-xs-12">
							<?php //echo form_open('#', 'role="form"'); ?>
								<fieldset class="form-horizontal" id="add_form">
									<div class="form-group">
										<label for="courseName" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Name:</span></label>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
											<input type="text" class="form-control" name="courseName" id="courseName" placeholder="Course Name" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="courseCode" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Code:</span></label>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<input type="text" class="form-control" name="courseCode" id="courseCode" placeholder="Course Code" />
										</div>
									</div>
								</fieldset>
							<?php //echo form_close(); ?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-sm btn-danger addCourse" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Adding">
							<i class="ace-icon fa fa-plus"></i>
							Add course
						</button>
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Cancel
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="edit-form" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="red bigger">Edit Course</h4>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 col-xs-12">
							<?php //echo form_open('#', 'role="form"'); ?>
								<fieldset class="form-horizontal" id="edit_form">
									<!-- append ajax result here -->
								</fieldset>
							<?php //echo form_close(); ?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="editCourse btn btn-sm btn-danger" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Updating">
							<i class="ace-icon fa fa-plus"></i>
							Update course
						</button>
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Cancel
						</button>
					</div>
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

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>

	<!-- dataTables scripts -->
	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#course_tbl').dataTable();
		});


		jQuery(function($) {
      $('#loadingBtn').on(ace.click_event, function () {
          var btn = $(this);
          btn.button('loading');

          setTimeout(function () {
            btn.button('reset');
          }, 2000)
        });

      $('#modal-form').on('hidden.bs.modal', function(){
		    $(this).find('input[type=text]').val('');
			});

			$('.addCourse').click(function(e){
				var courseName = $('#courseName').val();
				var courseCode = $('#courseCode').val();

        var code = courseName+'/'+courseCode;

        $.get("<?php echo site_url('admin/course_mngr/add');?>",{code:code},function(data){
        	window.location.reload();
        });
      });

      $('.editBtn').on('click', function(){
      	var code = $(this).attr('data-id');

      	$.ajax({
      		type: 'GET',
      		url: '<?php echo site_url('admin/course_mngr/get_course_info'); ?>',
      		data: {
      			code: code,
      		},
      		beforeSend:function(){
      		  // this is where we append a loading image
      		  $('#edit_form').html('<div class="loading"><img src="<?php echo base_url('assets/img/loading.gif') ?>"; alt="Loading..." />Please wait...</div>');      		
      		},
      		success:function(data){
      			if (data != 'false')
      			{
      				$('#edit_form').html(data);
      			}
      			else
      			{
      				var message = 'No result';
      				$('#edit_form').html(message);
      			}
      		},
      		error:function(){
      		  // failed request; give feedback to user	
      		}
      	});
      });

      $(document).on('click', '[class^=editCourse]', function(e){
      	var courseName = $('#course_name').val();
      	var courseCode = $('#course_code').val();
      	var courseUpdate = $('#courseUpdate').val();
      	var codeUpdate = $('#codeUpdate').val();
      	var nameUpdate = $('#nameUpdate').val();

      	// alert(courseName);
      	$.get("<?php echo site_url('admin/course_mngr/update');?>",
      		{
      			courseName: courseName,
      			courseCode: courseCode,
      			codeUpdate: codeUpdate,
      			nameUpdate: nameUpdate,
      		},
      		function(data){
      		window.location.reload();
      	});
      })

			$('a[class^=toggler]').on('click', function(e){
				e.preventDefault();
				var code = $(this).attr('data-id');
				var status = $('#icon'+code).val();
				
				$.ajax({
				  type: 'GET',
				  url: '<?php echo site_url('admin/course_mngr/toggler'); ?>',
				  data: { 
				  				code: code,
				  				status: status
				  			},
				  beforeSend:function(){
				    // this is where we append a loading image
				    $('#cover').fadeIn();
				  },
				  success:function(data){
				  	if (data == 'true')
				  	{
				  		if (status == 'Available') {
				  			$('#'+code).removeClass('fa-remove').addClass('fa-check');
				  			$('#status'+code).empty();
				  			$('#status'+code).append('Unavailable');
				  			$('#icon'+code).val('Unavailable');
					    	$('#cover').fadeOut();
				  		}
				  		else {
				  			$('#'+code).removeClass('fa-check').addClass('fa-remove');
				  			$('#status'+code).empty();
				  			$('#status'+code).append('Available');
				  			$('#icon'+code).val('Available');
					    	$('#cover').fadeOut();
				  		}
				  	}
				  	else
				  	{
				  		bootbox.dialog({
							  message: "<p style='font-size:16px;'>Something went wrong. Please try again.</p>",
							  title: "<span style='font-weight: bold;font-size:18px;'><i class='fa fa-times-circle'></i> Error updating</span>",
							  buttons: {
							    cancel: {
							      label: "<i class='fa fa-close'></i> Close",
							      className: "btn btn-default"
							    }
							  }
							});
							$('#cover').fadeOut();
				  	}
				  },
				  error:function(){
				    // failed request; give feedback to user
				   	
				  }
				});
			});

			$('.iconica').each(function(){
				var id = $(this).attr('data-id');
				if ($(this).val() == 'Available') {
					$('#'+id).removeClass('fa-check').addClass('fa-remove');
				}
				else{
					$('#'+id).removeClass('fa-remove').addClass('fa-check');
				}
			});
    });
	</script>
</body>