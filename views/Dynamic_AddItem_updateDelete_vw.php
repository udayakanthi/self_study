<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
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

                </div>
                <div class="box-body">



                    <div class="box-body">
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-12 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">

                            <!-------------------------------------------------------------------------------------------------------------------------------------->
                            <form method="post" action="<?php echo site_url() . "/Welcome/ItemList_Update/"; ?>" >
                                <input type="hidden-" name="rowCount" value="<?php echo $rowCount1; ?>" class="form-control" id="rowCount" > 

                                <table class="table table-condensed" id="authors_list">
                                    <thead>

                                        <tr>
                                            <th> Name</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr > <td><input type="id" name="id1" value="" class="form-control" id="id1" ><span style="color:red" ><?php echo form_error('id1'); ?> </span> </td>
                                            <td><input type="name1" name="name1" value="<?php echo set_value('name1'); ?>" class="form-control" id="name" ><span style="color:red" ><?php echo form_error('name1'); ?> </span> </td>
                                            <td> <input type="tp1" name="tp1" value="<?php echo set_value('tp1'); ?>"class="form-control" id="tp"><span style="color:red" ><?php echo form_error('tp1'); ?> </span></td>
                                            <td><input type="email1" name="email1" value="<?php echo set_value('email1'); ?>" class="form-control" id="email"><span style="color:red" ><?php echo form_error('email1'); ?> </span></td>

                                        </tr>
                                        <?php
                                        $count = $this->input->post("rowCount1");
                                        if ($rowCount1 > 1) {
                                            for ($i = 2; $i < $rowCount1 + 1; $i++) {
                                                $res = $this->input->post("id" . $i);
                                                $name = $this->input->post("name" . $i);

                                                $tp = $this->input->post("tp" . $i);
                                                $email = $this->input->post("email" . $i);
                                                
                                                ?>
                                                <tr >
                                                    <td><input type="id" name="<?php echo "id" . $i; ?>" value="<?php echo htmlentities($res, ENT_QUOTES);  ?>" class="form-control" id="id" ><span style="color:red" ><?php echo form_error('id'.$i); ?> </span> </td>
                                                    <td><input type="name" name="<?php echo "name" . $i; ?>" value="<?php echo htmlentities($name, ENT_QUOTES); ?>" class="form-control" id="<?php echo 'name' . $i ?>" ><span style="color:red" ><?php echo form_error('name' . $i); ?> </span> </td>
                                                    <td> <input type="tp" name="<?php echo "tp" . $i; ?>" value="<?php echo htmlentities($tp, ENT_QUOTES); ?>" class="form-control" id="<?php echo "tp" . $i; ?>"><span style="color:red" ><?php echo form_error('tp' . $i); ?> </span></td>
                                                    <td><input type="email" name="<?php echo "email" . $i; ?>" value="<?php echo htmlentities($email, ENT_QUOTES); ?>" class="form-control" id="<?php echo "email" . $i; ?>"><span style="color:red" ><?php echo form_error('email' . $i); ?> </span></td>
                                                    <td  class="text-blue"><button type="button" id="btn"  ><i class="fa fa-trash fa-lg text-blue text-right"> </i></button></td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <input type="hidden-" name="rowCount1" value="<?php $var = $rowCount1 + 1;
                                        echo $var;
                                        ?>" class="form-control" id="rowCount1" > 
                                <div class="form-inline">
                                    <button type="button" class="button-primary"  id="add_newline">Add New</button>
                                    <button type="submit" name="Save" value="Save" class="btn btn-default">Update</button>
                                </div>
                            </form>

                            <!-------------------------------------------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
            </div>







    </div>   

    <script>




        jQuery(function () {
            //  alert();
            var counter = document.getElementById("rowCount1").value;

            alert(counter)
            jQuery("#add_newline").click(function (event) {
                event.preventDefault();

                var newRow = jQuery('<tr id="tr' + counter + '"><td><input type="hidden-" id="count" value="' + counter + '"><input type="name" id="name' + counter + '" name="name' + counter + '" value="<?php echo set_value('name'); ?>" class="form-control" > <span style="color:red" ><?php echo form_error('name1'); ?> </span> </td>\n\
<td><input type="tp" id="tp' + counter + '" name="tp' + counter + '" value="<?php echo set_value('tp'); ?>"class="form-control" ></td>\n\
 <td><input type="email" id="email' + counter + '" name="email' + counter + '" value="<?php echo set_value('email'); ?>" class="form-control" ></td>  <td  class="text-blue"><button type="button" id="btn" onclick="getCount(' + counter + ')" ><i class="fa fa-trash fa-lg text-blue text-right"> </i></button></td></tr>');
                counter++;
                document.getElementById("rowCount1").value = counter - 1;

                jQuery("#authors_list").append(newRow);


            });
        });



        function getCount(counter) {
            //document.getElementById("rowCount").innerHTML =counter;
            document.getElementById('authors_list').deleteRow(counter);
            document.getElementById("rowCount1").value = counter - 1;


        }




//                    if (num < 3) {


    </script>

</html>