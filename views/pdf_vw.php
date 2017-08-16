<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
    <!--form------------------------------------------------------------------------------------------------------------------------------------->
<h3>User Details</h3>
<table>
    <thead><tr>
    <th>Name</th>
    <th>Telephone</th>
    <th>Email</th></tr>
    </thead>
    <tbody>
        <?php foreach($res as $row) {?>
        <tr>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->telephone ?></td>
        </tr>
        
        <?php } ?>
    </tbody>
</table>
    </body>
<!--form----------------------------------------------------------------------------------------------------------------------------------------->

              


                                                    

</html>