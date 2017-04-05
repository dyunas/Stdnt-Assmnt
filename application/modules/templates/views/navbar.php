<body class="no-skin">
	<div id="cover"></div>
	<div id="navbar" class="navbar navbar-red">
		<script type="text/javascript">
		  try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>
		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header pull-left">
				<a href="<?php echo base_url('admin/dashboard'); ?>" class="navbar-brand">
					<small>
						<img width="26" src="<?php echo base_url().'assets/images/cdsp_logo.png" alt="CDSP Logo'; ?>" />
						Colegio de San Pedro - Enrollment and Registration System
					</small>
				</a>
			</div><!-- navbar-header pull-left -->
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="red">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo base_url().'assets/avatars/user.jpg" alt="Jason\'s Photo'; ?>" />
							<span class="user-info">
								<small>Welcome,</small>
								<?php echo $usr->fname.' '.$usr->lname; ?>
							</span>
							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="<?php echo base_url('admin/profile'); ?>">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url('logout'); ?>">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- navbar-buttons navbar-header pull-right -->
		</div><!-- /.navbar-container -->
	</div><!-- navbar -->