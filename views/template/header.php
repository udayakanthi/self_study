<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
        <!-- Tell the browser to be responsive to screen width -->

        <!-- Dilan online links. -->
        <!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        -->
        <!--oio-->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />


        <!--  daterangepicker -->

        <link href="<?php echo base_url('assets/bootstrap/css/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <!--<link href="<?php // echo base_url('assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/plugins/ionicons-2.0.1/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet" type="text/css" /> <!-- animation -->
        <link href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!--<link href="<?php // echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url('assets/css/nprogress.css'); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/plugins/datepicker/datepicker3.css">

<!--<link href="<?php // echo base_url('assets/css/skins/animate');  ?>" rel="stylesheet" type="text/css" />-->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.multicolselect.js'); ?>" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--<link href="<?php // echo base_url('assets/css/table-fixed-header.css');  ?>" rel="stylesheet" type="text/css" />-->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
        <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.css'); ?>" type="text/css"></script>
        <!--<script src="<?php echo base_url('assets/plugins/datatables/select.dataTables.min'); ?>" type="text/css"></script>-->
        <style>
            #clock {
                width: 100px;
                height: 100px;
                margin: 10px auto 60px auto;
                position: relative;
                top: 0px;
                left: 0px;
            }
            .rotatingHands {
                position: absolute;
                width: 250px;
                height: 100px;
                top: 0px;
                left: 00px;
            }

            #hours, #minutes, #seconds {
                position: absolute;
                display: block;
            }

            .glass {
                position: absolute;
                width: 100px;
                height: 100px;
                top: 0px;
                left: 0px;
            }
            /*ljhij*/
            /*            .table-fixed thead {
                            width: 97%;
                        }
                        .table-fixed tbody {
                            height: 230px;
                            overflow-y: auto;
                            width: 100%;
                        }
                        .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                            display: block;
                        }
                        .table-fixed tbody td, .table-fixed thead > tr> th {
                            float: left;
                            border-bottom-width: 0;
                        }*/
            
            .overline {
                text-decoration:overline;
                border-bottom: 1px solid #000;
            }
            .underline {
/*                border-bottom: 1px dotted black;
                padding-bottom: 2px;*/

                /*text-decoration:underline;*/
                border-bottom: 4px ridge #000;
                
                /*border-bottom-style: ridge;*/
                .nowrap{
                    white-space: nowrap;
                }
            }
            
            /*just to test*/
            
            /*.sidebar-menu li a:hover, .sidebar-menu li.active{*/
            .sidebar-menu li a:hover, .sidebar-menu li a.selected{
                background-color: #96C11F;
                color: #fff;
                -moz-transition: background-color 0.01s;
                -webkit-transition: background-color 0.01s;
                -o-transition: background-color 0.01s;
                transition: background-color 0.01s;
            }
            li a{
/*                display: block;
                color: #969E8D;
                width: 196px;
                padding: 3px 4px;
                margin: 5px 13px;
                border-bottom: 1px dotted #96BF1F;*/


                -moz-transition: background-color .3s ease-in;
                -webkit-transition: background-color .3s ease-in;
                -o-transition: background-color .3s ease-in;
                transition: background-color .3s ease-in;
            }
        </style>
        



    </head>

    <body class="skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <?php //date_default_timezone_set("Asia/Colombo");?>
                <a href="#<?php echo base_url('welcome'); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>LMS</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="font-size:12px;font-weight:750;"><b>Library Management System</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-layout="sidebar-collapse" role="button"> <!-- data-toggle="offcanvas" -->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                             <!-- Messages: style can be found in dropdown.less-->
<!--              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                     inner menu: contains the actual data 
                    <ul class="menu">
                      <li> start message 
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li> end message 
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>-->
              <!-- Notifications: style can be found in dropdown.less -->
<!--              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                     inner menu: contains the actual data 
                    <ul class="menu">
                      <li>
                        <a href="<?php echo base_url('Approvals_controll/grn_Approve_sumary'); ?>">
                            <i class="fa fa-users text-aqua"></i><?php // echo count($loadGrn);?> GRN Have to Approve today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
               Tasks: style can be found in dropdown.less 
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                     inner menu: contains the actual data 
                    <ul class="menu">
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>-->
                            <!-- User Account: style can be found in dropdown.less -->
                             
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <!--<img src="<?php // echo base_url('assets/img/user2-160x160.jpg');     ?>" class="user-image" alt="User Image" />-->
<!--                                    <img src="<?php echo base_url('assets/img/olemi3.jpg'); ?>" class="user-image" alt="" />-->
                                    <span class="hidden-xs"><?php //echo $comName; ?></span>
                                </a>
                                <!--<ul class="dropdown-menu" style="background-color:#605ca8;  padding:2px;">-->
                                <!--<ul class="dropdown-menu" style="background-color:#00c0ef;  padding:2px;">-->
                                <ul class="  dropdown-menu progress-bar-striped active" style="background-color: #00c0ef;  padding:7px;">
                                    <!--background-color: #00c0ef /royalblue /#337ab7 ;-->
                                    <!-- User image -->
                                    <!--<li class="user-header progress-bar-striped active">-->
                  <!--                    <img src="<?php // echo base_ur150pxl('assets/img/olemi3.jpg');     ?>" class="img-circle" alt="User Image" />
                                      <p>
                                        Online Cloud
                                        <small>Member since Nov. 2012</small>
                                      </p>-->
                                  
                                    <!--</li>-->
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!--                    <div class="pull-left">
                                                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                            </div>-->
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('Welcome/logout'); ?>" class="btn btn-info bg-olive- progress-bar-striped " style="background-color: #00c0ef;" ><i class="fa fa-sign-out fa-fw fa-2x-"></i>
                                                Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
                <!--<div id="processBar" class="col-sm-12"></div>-->
            <div class="modal fade" data-backdrop="static"  id="model_alertReconcil">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #F7CF07">
                            <button type="button" class="close" data-dismiss="modal" hidden="" aria-hidden="false">×</button>
                            <h4 class="modal-title">Warning!</h4>
                        </div>
                        <div class="modal-body ">
                            <center>   <p>You have previous Reconciliation in process, Do you want to continue?</p></center>
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                            <button type="button" class="btn btn-primary" onclick="previousReconcilUserClick_Yes()">Yes</button>
                            <button type="button" class="btn btn-danger" onclick="previousReconcilUserClick_No()">No</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--<div id="main" class="col-sm-12"></div>-->