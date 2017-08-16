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
                    
                    

                    <div class="box-body">
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-12 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">

<!--form------------------------------------------------------------------------------------------------------------------------------------->


<!--//Model-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">
             <form action="<?php echo site_url() . "/Welcome/SCInsert/"; ?>" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name" >
        <span style="color:red" ><?php echo form_error('name'); ?> </span>
    </div>
    <div class="form-group">
        <label for="tp">Telephone:</label>
        <input type="tp" name="tp" value="<?php echo set_value('tp'); ?>"class="form-control" id="tp">
       <span style="color:red" ><?php echo form_error('tp'); ?></span>

    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" value="<?php echo set_value('email');?>" class="form-control" id="email">
        <span style="color:red" ><?php echo form_error('email'); ?></span>

    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" value="<?php echo set_value('password'); ?>" name="password" class="form-control" id="pwd">
        <span style="color:red" ><?php echo form_error('password'); ?></span>

    </div>

    
                
                
                
            </div>
            <div class="modal-footer">
                
    <button type="submit" name="Save&_close" value="Save & Close" class="btn btn-default">Save & Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</form>  
            </div>
        </div>
    </div>
</div>
<button id="myBtn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="showpopup()">Show Model</button>
<!--form----------------------------------------------------------------------------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>







    </div>   
    
    <script>
        function showpopup (){
    $(document).ready(function () {
      
    $("#myBtn").click(function(){
         $('#myModal').modal('show');
    });
});
        }
    </script>

</html>