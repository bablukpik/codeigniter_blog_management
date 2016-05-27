<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>admin/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">

                                        <?php
                                            $exception = $this->session->userdata("exception");
                                            if (isset($exception)) { ?>
                                                 <div class="alert alert-danger">
                                                     <button type="button" class="close" data-dismiss="alert">×</button>
                                                     <?php 
                                                        echo $exception;
                                                         $this->session->unset_userdata("exception");
                                                     ?>
                                                 </div>
                                               
                                            <?php
                                            }
                                        ?>
                                    <!--Success message-->
                                     <?php
                                            $success = $this->session->userdata("success");
                                            if (isset($success)) { ?>
                                                 <div class="alert alert-success">
                                                     <button type="button" class="close" data-dismiss="alert">×</button>
                                                     <?php
                                                        echo $success;
                                                         $this->session->unset_userdata("success");
                                                     ?>
                                                 </div>

                                            <?php
                                            }
                                        ?>
                                    
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <div class="social">
	                            <a class="face_login" href="#">
	                                <span class="face_icon">
	                                    <img src="<?php echo base_url();?>admin/images/facebook.png" alt="fb">
	                                </span>
	                                <span class="text">Sign in with Facebook</span>
	                            </a>
	                            <div class="division">
	                                <hr class="left">
	                                <span>or</span>
	                                <hr class="right">
	                            </div>
	                        </div>
                                        <form action="<?php echo base_url();?>admin_controller/login_check" method="post">
                                            <input class="form-control" name="form_email" type="text" placeholder="E-mail address">
                                            <input class="form-control" name="form_password" type="password" placeholder="Password">
                                            <input type="submit" class="btn btn-primary signup" value="Login">
                                        </form>
			            </div>
			        </div>

			        <div class="already">
			            <p>Don't have an account yet?</p>
			            <a href="signup.html">Sign Up</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin/js/custom.js"></script>
  </body>
</html>