 		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
						</li>
						<li>School Year and Semester Manager</li>
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
								School Year and Semester Manager
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div><!-- /.page-header -->
						<?php if($this->session->flashdata('error')): ?>
              <span class="help-block">
                <?php echo '<div class="alert alert-success">
			      			<button type="button" class="close" data-dismiss="alert">
						  			<i class="ace-icon fa fa-times"></i>
									</button>
									'.$this->session->flashdata('error').'</div>'; ?>
      			  </span>
            <?php endif; ?>
						<?php if($this->session->flashdata('error_2')): ?>
              <span class="help-block">
                <?php echo '<div class="alert alert-danger">
			      			<button type="button" class="close" data-dismiss="alert">
						  			<i class="ace-icon fa fa-times"></i>
									</button>
									'.$this->session->flashdata('error_2').'</div>'; ?>
      			  </span>
            <?php endif; ?>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="row">
									<div class="col-lg-3 col-md-6">
										<div class="panel panel-red">
											<div class="panel-heading">
												<div class="row">
													<div class="col-xs-3">
                          	<i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $schl_yr->school_yr; ?></div>
                            <div style="font-size: 16px;">School Year</div>
                          </div>
												</div>
											</div>
											<a href="#" data-toggle="modal" data-target="#chngeSY">
												<div class="panel-footer">
	                        <span class="pull-left">Change Settings</span>
	                        <span class="pull-right"><i class="fa fa-cog"></i></span>
	                        <div class="clearfix"></div>
	                      </div>
	                    </a>	
										</div>
									</div><!-- /.col-lg-3 col-md-6 -->
									<div class="col-lg-3 col-md-6">
										<div class="panel panel-red">
											<div class="panel-heading">
												<div class="row">
													<div class="col-xs-3">
                          	<i class="fa fa-calendar fa-5x"></i>
                          </div>
                          <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $smstr->semester; ?></div>
                            <div style="font-size: 16px;">Semester</div>
                          </div>
												</div>
											</div><!-- /.col-lg-3 col-md-6 -->
											 <a href="#" data-toggle="modal" data-target="#chngeSem">
												<div class="panel-footer">
	                        <span class="pull-left">Change Settings</span>
	                        <span class="pull-right"><i class="fa fa-cog"></i></span>
	                        <div class="clearfix"></div>
	                      </div>
	                    </a>	
										</div>
									</div><!-- /.col-lg-3 col-md-6 -->
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

	<!-- MODALS -->
	<div class="modal fade bs-example-modal-md" id="chngeSem" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="moda-body">
        <div class='row'>
          <div class='col-md-4'></div>
            <div class='col-md-4'>
              <h4>Change Semester</h4>
            </div>
          <div class='col-md-4'></div>
        </div>

        <div class='row' style="margin:20px">
          <div class='col-md-4'>
            <label for='sem'>Semester:</label>
          </div>
          <div class='col-md-4'>
            <select id='sem'>
              <option value="1st" <?php echo ($smstr->semester == '1st') ? 'selected' : ''; ?>>1st Sem</option>
              <option value="2nd" <?php echo ($smstr->semester == '2nd') ? 'selected' : ''; ?>>2nd Sem</option>
            </select>
          </div>
          <div class='col-md-4'></div>
        </div>
        <div class='row' style="margin:20px">
          <div class='col-md-12 text-right' style=''>
            <button class='btn btn-md btn-danger' id="cnfChngeSem"><i class="ace-icon fa fa-check"></i> Update</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade bs-example-modal-md" id="chngeSY" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="moda-body">
        <div class='row'>
          <div class='col-md-4'></div>
            <div class='col-md-4'>
              <h4>Change School Year</h4>
            </div>
          <div class='col-md-4'></div>
        </div>

        <div class='row' style="margin:20px">
          <div class='col-md-4'>
            <label for='sy'>School Year:</label>
          </div>
          <div class='col-md-4'>
            <select id='sy'>
              <option value="2016-2017" <?php echo ($schl_yr->school_yr == '2016-2017') ? 'selected' : ''; ?>>2016-2017</option>
              <option value="2015-2016" <?php echo ($schl_yr->school_yr == '2015-2016') ? 'selected' : ''; ?>>2015-2016</option>
              <option value="2014-2015" <?php echo ($schl_yr->school_yr == '2014-2015') ? 'selected' : ''; ?>>2014-2015</option>
            </select>
          </div>
          <div class='col-md-4'></div>
        </div>
        <div class='row' style="margin:20px">
          <div class='col-md-12 text-right' style=''>
            <button class='btn btn-md btn-danger' id="cnfChngeSY"><i class="ace-icon fa fa-check"></i> Update</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>



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
	<script src="<?php echo base_url('assets/js/bootbox.min.js'); ?>"></script>

	<!--[if lte IE 8]>
	  <script src="assets/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootbox.min.js'); ?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cnfChngeSem').click(function(e){
        var status = $('#sem').val();

        $.get("<?php echo site_url('admin/settings/school_year/sem/update');?>",{code:status},function(data){
          });
        location.reload();
      });
      $('#cnfChngeSY').click(function(e){
        var status = $('#sy').val();

        $.get("<?php echo site_url('admin/settings/school_year/sy/update');?>",{code:status},function(data){
          });
        location.reload();
      });
		});
	</script>
</body>