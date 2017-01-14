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
								</small>
							</h1>
						</div><!-- /.page-header -->


						<div class="row">
							<div class="col-lg-3 col-md-4 col-xs-4 pull-right">
								<a href="#modal-form" role="button" data-toggle="modal" class="btn btn-danger btn-sm pull-right"><i class="fa fa-plus"></i> Add new course</a>
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
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($courses as $item): ?>
											<tr>
												<td><?php echo $item->course_name; ?></td>
												<td><?php echo $item->course_code; ?></td>
												<td>
													<div class="hidden-sm hidden-xs action-buttons">
														<a class="blue" href="#">
															<i class="ace-icon fa fa-search-plus bigger-130"></i>
														</a>
														<a class="green" href="#">
															<i class="ace-icon fa fa-pencil bigger-130"></i>
														</a>
														<a class="red" href="#">
															<i class="ace-icon fa fa-trash-o bigger-130"></i>
														</a>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-danger dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>
																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>
																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
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
											<div class="col-lg-12 col-md-12 col-xs-12 col-sm-7">
												<?php //echo form_open('', 'class="form-horizontal" role="form"'); ?>
												<fieldset class="form-horizontal col-lg-12 col-md-12">
													<div class="form-group">
														<label for="courseName" class="col-lg-4 col-mg-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Name:</span></label>
														<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
															<input type="text" name="courseName" id="courseName" placeholder="Course Name" />
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">
														<label for="courseCode" class="col-lg-4 col-mg-4 col-sm-4 col-xs-4 pull"><span class="pull-right">Course Code:</span></label>
														<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
															<input type="text" name="courseCode" id="courseCode" placeholder="First Name" />
														</div>
													</div>
												</fieldset>
												<?php //echo form_close(); ?>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-sm btn-danger addCourse" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Loading">
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

	<!-- dataTables scripts -->
	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.min.js'); ?>"></script>
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
    });
	</script>
</body>