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
								Student Records
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="row">
									<table class="table table-condensed table-bordered" id="stud_rec">
										<thead>
											<tr>
												<th style="text-align: center;">Student ID</th>
												<th>Student Name</th>
												<th style="text-align: center">Course</th>
												<th style="text-align: center">Year</th>
												<th style="text-align: center">Status</th>
												<th style="text-align: center">Action</th>
											</tr>
										</thead>
										<tbody>
										<?php if ($stud_records): ?>
											<?php foreach($stud_records as $record): ?>
											<tr>
												<td style="text-align: center"><?php echo $record->stud_id ?></td>
												<td><?php echo $record->stud_name ?></td>
												<td style="text-align: center"><?php echo $record->stud_course ?></td>
												<?php $year = ['1st Year', '2nd Year', '3rd Year', '4th Year']; ?>
												<td style="text-align: center"><?php echo $year[$record->stud_year] ?></td>
												<td style="text-align: center"><?php echo $record->stud_status ?></td>
												<td>
													<div class="hidden-sm hidden-xs action-buttons">
														<a class="red" href="<?php echo site_url('cashier/student_rcrd/view/'.$record->stud_id); ?>">
															<i class="ace-icon fa fa-search-plus bigger-130"></i>
														</a>
														<a class="red" href="<?php echo site_url('cashier/student_rcrd/update/'.$record->stud_id); ?>">
															<i class="ace-icon fa fa-pencil bigger-130"></i>
														</a>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-danger dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="<?php echo site_url('cashier/student_rcrd/view/'.$record->stud_id); ?>" class="tooltip-success" data-rel="tooltip" title="View">
																		<span class="red">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>
																<li>
																	<a href="<?php echo site_url('cashier/student_rcrd/update/'.$record->stud_id); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																		<span class="red">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>
											<?php endforeach; ?>
										<?php endif; ?>
										</tbody>
									</table><!-- /.table -->
								</div><!-- /.row -->
							</div><!-- /.col-lg-12 col-md-12 col-xs-12 -->
						</div><!-- /.row -->
					</div><!-- page-content -->
				</div>
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

	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$('#stud_rec').dataTable();
		});
	</script>
</body>