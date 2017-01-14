<body class="login-layout dark-login">
<section>
  <div class="main-container">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="login-container">
    		    <div class="center">
    		  	  <h1>
    		  		  <span class="red">Enrollment and </span>
    		  		  <span class="white" id="id-text2">Registration System</span>
    		  	  </h1>
    		  	  <h4 class="red" id="id-company-text">&copy; Colegio de San Pedro</h4>
    		  	</div><!-- center -->

            <div class="space-6"></div><!-- space-6 -->

    		  	<div class="position-relative">
    		  	  <div id="login-box" class="login-box visible widget-box no-border">
    		  	    <div class="widget-body">
    		  	      <div class="widget-main">
    		  	        <h4 class="header red lighter bigger">
          					  <i class="ace-icon fa fa-sign-in red"></i>
          					  Log-in here
          					</h4>
                    <?php if($this->session->flashdata('error_2')): ?>
                    <span class="help-block">
                    <?php echo '<div class="alert alert-danger">
			      	  			<button type="button" class="close" data-dismiss="alert">
						  					<i class="ace-icon fa fa-times"></i>
											</button>
											'.$this->session->flashdata('error_2').'</div><!-- alert -->'; ?>
      			      	</span>
                    <?php endif; ?>
                    <div class="space-6"></div><!-- space-6 -->
          					<?php echo form_open('login/auth_login'); ?>
          					  <fieldset>
          					    <label class="block clearfix">
          					      <span class="block input-icon input-icon-right">
            						    <input type="text" class="form-control" name="user_id" maxlength="16" placeholder="User ID" />
            						    <i class="ace-icon fa fa-user"></i>
            						  </span><!-- block input-icon input-icon-right -->
            						</label><!-- block clearfix -->
            						<label class="block clearfix">
            					    <span class="block input-icon input-icon-right">
            						    <input type="password" class="form-control" name="pword" maxlength="16" placeholder="Password" />
            						    <i class="ace-icon fa fa-lock"></i>
            						  </span><!-- block input-icon input-icon-right -->
            						</label><!-- block clearfix -->
          						  <div class="space"></div><!-- space -->
            						<div class="clearfix">
            						  <button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-danger" id="loadingBtn" data-loading-text="<i class='ion-loading-c'></i> Loading">
            						    <i class="ace-icon fa fa-key"></i>
            						    <span class="bigger-110">Login</span>
            						  </button>
            						</div><!-- clearfix -->
          						  <div class="space-4"></div><!-- space-4 -->
          					  </fieldset>
          					<?php echo form_close(); ?>
		  	          </div><!-- widget-main -->

    		  	      <div class="toolbar clearfix">
                  	<div>
                    	<a href="#" data-target="#forgot-box" class="forgot-password-link">
                      	<i class="ace-icon fa fa-arrow-left"></i>
                       	I forgot my password
                      </a>
                    </div>
                  </div>
		  	        </div><!-- widget-body -->
              </div><!-- login-box visible widget-box no-border -->
    		  	  <div id="forgot-box" class="forgot-box widget-box no-border">
              	<div class="widget-body">
                	<div class="widget-main">
                  	<h4 class="header red lighter bigger">
                    	<i class="ace-icon fa fa-key"></i>
                      Forgot Password
                    </h4>

                    <div class="space-6"></div>
                    <p>
                    	Enter your User ID
                    </p>

                    <?php echo form_open(site_url('user/login/reset_pw'), 'class="form-horizontal" id="reset-pw-form"'); ?>
                    	<fieldset>
                      	<label class="block clearfix">
                        	<div class="form-group">
                        		<span class="block input-icon input-icon-right">
    	                      	<input type="text" name="user_id" id="user_id" class="form-control" placeholder="User ID" />
    	                      	<i class="ace-icon fa fa-user"></i>
    	                      </span>
                        	</div>
                        </label>

                        <div class="clearfix">
    	                  	<button type="submit" class="pull-right btn btn-sm btn-danger">
    	                    	<i class="ace-icon fa fa-undo"></i>
    	                      <span class="bigger-110">Reset Password!</span>
    	                    </button>
                        </div>
                      </fieldset>
                    <?php echo form_close(); ?>
                  </div><!-- /.widget-main -->

                  <div class="toolbar center">
                  	<a href="#" data-target="#login-box" class="back-to-login-link">
                    	Back to login
                      <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- /.widget-body -->
              </div><!-- /.forgot-box -->
            </div><!-- position-relative -->
		      </div><!-- login-container -->
        </div><!-- col-sm-10 col-sm-offset-1 -->
      </div><!-- row -->
    </div><!-- main-content -->
  </div><!-- main-container -->

  <!-- basic scripts -->

  <!--[if !IE]> -->
    <script src="assets/js/jquery.2.1.1.min.js"></script>
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
      window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
    </script>
  <![endif]-->

  <script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js'); ?>'>"+"<"+"/script>");
  </script>

  <!-- inline scripts related to this page -->
  <script src="<?php echo base_url('assets/js/fuelux.wizard.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/ace-elements.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/ace.min.js'); ?>"></script>

  <script type="text/javascript">
    jQuery(function($)
    {
      var $validation = false;
      $('#fuelux-wizard-container')
      .on('actionclicked.fu.wizard' , function(e, info){
        if(info.step == 1 && $validation) {
          if(!$('#reset-pw-form').valid()) e.preventDefault();
        }
      });

      $('#reset-pw-form').validate({
      errorElement: 'div',
      errorClass: 'help-block',
      focusInvalid: false,
      ignore: "",
      rules: {
        user_id: {
          required: true,
        }
      },
      messages: {
        user_id: {
          required: "Please enter your User ID"
        }
      },

      highlight: function (e) {
        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
      },
      
      success: function (e) {
        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
      $(e).remove();
      },
      
      errorPlacement: function (error, element) {
        error.insertAfter(element.parent());
      },
      
      submitHandler: function (form) {
        $(form).ajaxSubmit();
      },
      invalidHandler: function (form) {
      }
    });
  });
  </script>

  <script type="text/javascript">
    jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });

    jQuery(function($) {
      $('#loadingBtn').on(ace.click_event, function () {
          var btn = $(this);
          btn.button('loading');

          setTimeout(function () {
            btn.button('reset');
          }, 2000)
        });
    });
  </script>
</section>
<!-- login-layout -->