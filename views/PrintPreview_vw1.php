<html>
<head>
<style>

</style>

<!--<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>-->
<script>
 function print_data(){

     document.getElementById("link").src = "<?php echo site_url('Welcome/PrintPreview');?>";
          var x =window.document.getElementById("printdiv").innerHTML;
          var body =document.body.innerHTML;
          document.body.innerHTML = x;
          window.print();
          document.body.innerHTML = body;
 }
</script>
</head>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Open Window</h1>

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
                        <div class="col-sm-12 col-sm- sidebar" id="printdiv" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
<!--form------------------------------------------------------------------------------------------------------------------------------------->
 <iframe id="link" name="link" style="display:none;"></iframe>
<table>
    <thead><tr>
    <th>Name</th>
    <th>Email</th>
    <th>Telephone</th></tr>
    </thead>
    <tbody>
        <?php foreach($res as $row){ ?>
        <tr>
            <td><?php echo $row->name ?></td>
                <td><?php echo $row->email?></td>
                    <td><?php echo $row->telephone?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>



                    </div>
                </div>
<button type="button" onclick="print_data()">Printdata</button>
            </div>







    </div>                                                      

</html>