	<div class="main-container" id="main-container">
	<?php if ($this->session->userdata('user_type') == 'Admin'):?>
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
		<div id="sidebar" class="sidebar responsive">
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>
			<ul class="nav nav-list">
				<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2)) == site_url('admin/dashboard')) ? 'active' : '' ; ?>">
					<a href="<?php echo site_url('admin/dashboard'); ?>">
						<i class="menu-icon fa fa-home"></i>
						<span class="menu-text">Dashboard</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2)) == site_url('admin/acct_mngr')) ? 'active' : '' ; ?>">
					<a href="<?php echo site_url('admin/acct_mngr'); ?>">
						<i class="menu-icon fa fa-user"></i>
						<span class="menu-text">Account Manager</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2)) == site_url('admin/course_mngr')) ? 'active' : '' ; ?>">
					<a href="<?php echo site_url('admin/course_mngr'); ?>">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text">Course Manager</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2)) == site_url('admin/student_rcrd')) ? 'active' : '' ; ?>">
					<a href="<?php echo site_url('admin/student_rcrd'); ?>">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text">Student's Record</span>
					</a>
					<b class="arrow"></b>
				</li>
				<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2)) == site_url('admin/settings')) ? 'active' : '' ; ?>">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cogs"></i>
						<span class="menu-text">Settings</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) == site_url('admin/settings/school_year')) ? 'active' : '' ; ?>">
							<a href="<?php echo site_url('admin/settings/school_year'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								S.Y. and Semester
							</a>
							<b class="arrow"></b>
						</li>
						<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) == site_url('admin/settings/fee_mngr')) ? 'active' : '' ; ?>">
							<a href="<?php echo site_url('admin/settings/fee_mngr'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Fee Manager
							</a>
							<b class="arrow"></b>
						</li>
						<li class="<?php echo (site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) == site_url('admin/settings/pymnt_schm')) ? 'active' : '' ; ?>">
							<a href="<?php echo site_url('admin/settings/pymnt_schm'); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								Payment Scheme
							</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul><!-- /.nav-list -->

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>

			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>
	<?php else:?>
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>
		<div id="sidebar" class="sidebar responsive">
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>

			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>
	<?php endif; ?>
