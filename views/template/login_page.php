<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <!--<link href="../../plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body  {
            /*background-image: url("<?php // echo base_url('assets/img/bg_img/265163.jpg'); ?>");*/
            /*background-image: url("<?php // echo base_url('assets/img/bg_img/rsz_background_max1_2.jpg'); ?>");*/
            background-image: url("<?php echo base_url('assets/img/bg_img/imag1_1.jpg'); ?>");
            /*background-image: url("265163.jpg");*/
            /*background-image: url("EYSuu.jpg");*/
            /*background-image: url("post-201195-1213888138.png");*/
            /*background-image: url("LoginBackground_ST.jpg");*/
            /*background-image: url("blue-background-152655.jpg");*/
/*            background-image: url("background_2.jpg");*/
/*            background-image: url("login-background.jpg");*/
            background-color: #cccccc;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        
        .wrapper {    
            margin-top: 80px;
            margin-bottom: 20px;
        }

        .form-signin {
          max-width: 380px;
          padding: 30px 38px 66px;
          margin: 0 auto;
          background-color: rgba(70, 140, 200, 0.8);
          /*background-color: #66a;*/
          /*background-color: rgba(100,100,180,0.9)*/
          border: 3px dotted rgba(0,0,0,0.0);  
          }

        .form-signin-heading {
          text-align:center;
          margin-bottom: 40px;
        }

        .form-control {
          position: relative;
          font-size: 14px;
          height: auto;
          padding: 10px;
        }

        input[type="text"] {
          margin-bottom: 0px;
          border-bottom-left-radius: 0;
          border-bottom-right-radius: 0;
        }

        input[type="password"] {
          margin-bottom: 14px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }

        .colorgraph {
          height: 6px;
          border-top: 0;
          background: #c4e17f;
          border-radius: 5px;
          background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
  </head>
  <body class="login-page-">
 
      <div class = "container">
            <div class="wrapper">
                    <form action="<?php echo site_url('Welcome/login'); ?>" method="post" name="Login_Form" class="form-signin">       
<!--                        <h3 class="form-signin-heading" style="color: #fff;">Welcome Back! Please Sign In</h3>-->
                        <h3 class="form-signin-heading" style="color: #fff;">
                            <i class="fa fa-expeditedssl  fa-fw"></i> Sign In!
                            
                        </h3>
                        
                            <hr class="colorgraph"><br>

                            <?php
                                if ($this->session->flashdata('message')) {
                                    if ($this->session->flashdata('message') == 'error') {
                                        $this->session->set_flashdata('message', '');
                                        ?>
                                        <div class="col-md-1"></div>
                                        <div class="label label-danger col-md-12 error_message" >
                                            Error occurred.
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                            <?php
                                if ($this->session->flashdata('message')) {
                                    if ($this->session->flashdata('message') == 'invalied_user') {
                                        $this->session->set_flashdata('message', '');
                                        ?>
                                        <div class="col-md-1"></div>
                                        <div class="label label-danger col-md-12 error_message" >
                                            Incorrect Username or Password..
                                        </div>
                                         <br> 
                                        <?php
                                    }
                                }
                            ?>
							<div id="loading" style="display:none;">
							<center><img src='<?php echo base_url();?>assets/img/loading2.gif'/></center>
							</div>
                                      <div id="loading2">
                            <div class=" input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                                </div>
                              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" autofocus="" />
                            </div>          
                                  
                              <?php echo form_error('username', '<div class="label label-danger col-md-12 error_message" >', '</div>'); ?>
                              <br>
                              <div class=" input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-key"></i>
                                </div>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required=""/> 
</div>                                     
                              <?php echo form_error('password', '<div class="label label-danger col-md-12 error_message" >', '</div>'); ?>
                              <br>
                              <button class="btn btn-lg btn-info  btn-block"  name="Submit" value="Login" type="Submit" onclick="setLogo();">
                                  <i class="fa fa-key fa-2x- fa-fw"></i> Login
                              </button>  		
</div>							  
                    </form>			
            </div>
    </div>
   

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!-- iCheck -->

    <script>
//      $(function () {
//        $('input').iCheck({
//          checkboxClass: 'icheckbox_square-blue',
//          radioClass: 'iradio_square-blue',
//          increaseArea: '20%' // optional
//        });
//      });

function setLogo(){
	if(document.getElementById("username").value!="" && document.getElementById("password").value!=""){
//document.getElementById("loading").style.display="block";
//	document.getElementById("loading2").style.display="none";
	} 
}
    </script>
  </body>
</html>
