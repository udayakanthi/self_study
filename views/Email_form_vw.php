<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Insert Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 


        <style type="text/css">
            #imaginary_container{
                margin-top:20%; /* Don't copy this */
            }
            .stylish-input-group .input-group-addon{
                background: white !important; 
            }
            .stylish-input-group .form-control{
                border-right:0; 
                box-shadow:0 0 0; 
                border-color:#ccc;
            }
            .stylish-input-group button{
                border:0;
                background:transparent;
            }

        </style>


    </head>






    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Insert Form</h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa  fa-map-marker fa-fw"></i></h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
<!--display success error msg-------------------------------------------------------------------------------------------------------->
<?php
                    $success_msg = $this->session->flashdata('Success_msg');
                    if (!empty($success_msg)) {
                        ?>
                        <div class="alert alert-info information col-sm-10" style="border: 2px solid #0099CC; padding: 10px 40px; border-radius: 10px; font-size:16px">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                            <?php echo $this->session->flashdata('Success_msg'); ?>
                        </div>
                        <?php
                        $this->session->set_flashdata("Success_msg", "");
                    }
                    ?>
                    <?php
                    $error_msg = $this->session->flashdata('error_msg');
                    if (!empty($error_msg)) {
                        ?>
                        <div class="alert alert-warning information col-sm-10" style="border: 2px solid #CC0033;padding: 10px 40px; border-radius: 10px;font-size:16px">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                            <?php echo $this->session->flashdata('error_msg'); ?>
                        </div>
                        <?php
                        $this->session->set_flashdata("error_msg", "");
                    }
                    ?>


                    <div class="box-body">
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-8 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
<!--form------------------------------------------------------------------------------------------------------------------------------------->

<form action="<?php echo site_url() . "/SendMail/sendMail/"; ?>" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name" >
        <span style="color:red" ><?php echo form_error('name'); ?> </span>
    </div>
    
    <div class="form-group">
        <label for="email">Email address(From):</label>
        <input type="from" name="from" value="<?php echo set_value('from');?>" class="form-control" id="from">
        <span style="color:red" ><?php echo form_error('from'); ?></span>

    </div>
    
     <div class="form-group">
        <label for="to">Email address(to):</label>
        <input type="to" name="to" value="<?php echo set_value('to');?>" class="form-control" id="to">
        <span style="color:red" ><?php echo form_error('to'); ?></span>

    </div>
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="subject" value="<?php echo set_value('subject'); ?>" name="subject" class="form-control" id="subject">
        <span style="color:red" ><?php echo form_error('subject'); ?></span>

    </div>
    <div class="form-group">
        <label for="msg">Message Body:</label>
        <input type="msg" style="height:100px" name="msg" value="<?php echo set_value('msg'); ?>"class="form-control" id="tp">
       <span style="color:red" ><?php echo form_error('msg'); ?></span>

    </div>
  

    <button type="submit" name="Send_mail" value="Send_email" class="btn btn-default">Send Email</button>
</form>
<!--form----------------------------------------------------------------------------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>







    </div>                                                      

</html>