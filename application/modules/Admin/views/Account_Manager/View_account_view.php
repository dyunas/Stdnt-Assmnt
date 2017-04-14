 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<!-- <script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script> -->
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
						</li>
						<li><a href="<?php echo site_url('admin/acct_mngr'); ?>">Account Manager</a></li>
						<li>New Account</li>
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
								Account Manager
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									New Account
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
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
		            </div><!-- /.row -->
		            <br/>
		            <div class="row">
		            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		            		<img src="<?php echo base_url('assets/uploads/profile/'.$acct_info->emp_photo); ?>" />
		            	</div><!-- /.col-lg-3 col-md-3 col-sm-3 col-xs-12 -->

		            	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		            		<fieldset>
		            			<h4>Employee Information:</h4>
		            			<table class="table table-condensed">
		            				<tbody>
		            					<tr>
		            						<td>Employee Name:</td>
		            						<td><?php echo $acct_info->lname.', '.$acct_info->fname.' '.$acct_info->mname; ?></td>
		            						<td colspan="3"></td>
		            					</tr>
		            					<tr>
		            						<td>E-mail Address:</td>
		            						<td><?php echo $acct_info->email; ?></td>
		            						<td colspan="4"></td>
		            					</tr>
		            					<tr>
		            						<td>Address:</td>
		            						<td colspan="2"><?php echo $acct_info->adrs; ?></td>
		            						<td>City/Municipality:</td>
		            						<td><?php echo $acct_info->city; ?></td>
		            					</tr>
		            					<tr>
		            						<td>Province:</td>
		            						<td><?php echo $acct_info->province; ?></td>
		            						<td colspan="3"></td>
		            					</tr>
		            				</tbody>
		            			</table>
		            		</fieldset><!-- /.employee information -->

		            		<div class="row">
		            			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		            				<div class="space-2"></div>
		            				<div class="clearfix form-actions">
		            				  <div class="pull-right">
		            				  	<a href="<?php echo site_url('admin/acct_mngr'); ?>" class="btn btn-danger" id="cancel" data-loading-text="<i class='ion-loading-c'></i> Please wait...">
		            						  <i class="ace-icon fa fa-arrow-left bigger-110"></i>
		            						  Go Back
		            						</a>
		            				  </div><!-- col-md-offset-3 -->
		            				</div><!-- clearfix -->
		            			</div>
		            		</div><!-- /.form-buttons -->
		            	</div><!-- /.col-lg-9 col-md-9 col-sm-9 col-xs-12 -->
		            </div><!-- /.row -->
							</div>
						</div>
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
	<script src="<?php echo base_url('assets/js/fuelux.wizard.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js'); ?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>
</body>
<script type="text/javascript">
		jQuery(function($) {
	    $('#cancel').on(ace.click_event, function () {
	      var btn = $(this);
	      btn.button('loading');

	      setTimeout(function () {
	        btn.button('reset');
	      }, 2000)
	    });
	  });
</script>