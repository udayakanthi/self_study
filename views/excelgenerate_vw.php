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



                    <div class="box-body">
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-8 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
<!--form------------------------------------------------------------------------------------------------------------------------------------->

<form action="<?php echo site_url() . "/GenerateExcel/gen_excel/"; ?>" method="post">
    

    <button type="submit" name="Send_mail" value="Send_email" class="btn btn-default">Generate Excel</button>
</form>
<!--form----------------------------------------------------------------------------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>







    </div>                                                      

</html>