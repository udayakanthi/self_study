<html>
<head>
<style>

</style>

<!--<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>-->
<script>
    var myWindow;
 function myFunction(){
     window.open("https://www.w3schools.com");
 }
 function myFunction2() {
    var myWindow = window.open("", "", "width=200,height=100");
}
 function CloseWindow(){
        myWindow.close();
 }
 function OpenWindow(){
      myWindow = window.open("", "myWindow", "width=200,height=100");
    myWindow.document.write("<p>This is 'myWindow'</p>");
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
                        <div class="col-sm-8 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
<!--form------------------------------------------------------------------------------------------------------------------------------------->
<button type="button" onclick="myFunction()">Click Me</button>
<button type="button" onclick="myFunction2()">open small window</button>

                    </div>
                </div>
<!--//--------------------------------------------------------->
<div class="box-body"><p>Open and close window</p>
                        <div class="form-inline">
                        </div>
                        <div class="col-sm-8 col-sm- sidebar" style = "margin-left: 10px; margin-right: 10px;padding-top: 13px; background-color:#EBEFFB ">
<!--form------------------------------------------------------------------------------------------------------------------------------------->
<button type="button" onclick="OpenWindow()">OpenWindow</button>
<button type="button" onclick="CloseWindow()">CloseWindow</button>

                    </div>
                </div>
            </div>







    </div>                                                      

</html>