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
            <h1>Update Form</h1>

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
                    
                    
<!--display success error msg-->
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
                        <div class="col-sm-12 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">

                            <!--form------------------------------------------------------------------------------------------------------------------------------------->

<form action="<?php echo site_url() . "/Welcome/Form_submit/"?>" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
         <input type="hidden" name="Id" value="<?php echo $res[0]->Id; ?>" class="form-control" id="name" >
        <input type="name" name="name" value="<?php echo $res[0]->name; ?>" class="form-control" id="name" >
        <span style="color:red" ><?php echo form_error('name'); ?> </span>
    </div>
    <div class="form-group">
        <label for="tp">Telephone:</label>
        <input type="tp" name="tp" value="<?php echo $res[0]->telephone; ?>"class="form-control" id="tp">
       <span style="color:red" ><?php echo form_error('tp'); ?></span>

    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" value="<?php echo $res[0]->email;?>" class="form-control" id="email">
        <span style="color:red" ><?php echo form_error('email'); ?></span>

    </div>
      <div class="form-group">
       
        <input type="hidden" value="<?php echo $res[0]->password;?>" name="password" class="form-control" id="pwd">
        <span style="color:red" ><?php echo form_error('password'); ?></span>

    </div>
    

    <button type="submit" name="Update" value="Update" class="btn btn-default">Update</button>
    <button type="submit" name="Delete" value="Delete" class="btn btn-default">Delete</button>
</form>
<!--form----------------------------------------------------------------------------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>







    </div>                                                      

</html>