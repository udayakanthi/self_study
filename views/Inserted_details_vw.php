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
<?php
                    $Delete_msg = $this->session->flashdata('Delete_msg');
                    if (!empty($Delete_msg)) {
                        ?>
                        <div class="alert alert-info information col-sm-10" style="border: 2px solid #0099CC; padding: 10px 40px; border-radius: 10px; font-size:16px">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                            <?php echo $this->session->flashdata('Delete_msg'); ?>
                        </div>
                        <?php
                        $this->session->set_flashdata("Delete_msg", "");
                    }
                    ?>

                    <div class="box-body">
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-12 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
                            <!--form------------------------------------------------------------------------------------------------------------------------------------->

                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sidata as $raw) {
                                        echo '<tr>';
                                        echo '<td>' . $raw->Id . '</td>';
                                        echo '<td>' . $raw->name . '</td>';
                                        echo '<td>' . $raw->telephone . '</td>';
                                        echo '<td>' . $raw->email . '</td>';
                                        echo '<td><a href='.site_url('Welcome/select_update_data/'.$raw->Id).'><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue">Edit</i></a></td>';
                                        echo '<td><a href='.site_url('Welcome/Delete_directly/'.$raw->Id).'><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue">Delete</i></a></td>';

                                        echo '<tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>

                            <!--form----------------------------------------------------------------------------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>







    </div>                                                      

</html>