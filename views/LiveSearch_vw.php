<html>
<head>
<style>

</style>

<!--<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>-->
<script>
 $(document).ready(function(){
   $("#search").keyup(function(){
  if($("#search").val().length>3){
  $.ajax({
   type: "post",
   url: "<?php echo site_url("LiveSearchl/live_search"); ?>",
   cache: false,    
   data:'search='+$("#search").val(),
   success: function(response){
      // alert();
    $('#finalResult').html("");
    var obj = JSON.parse(response);
    if(obj.length>0){
     try{
      var items=[];  
      $.each(obj, function(i,val){           
          items.push($('<li/>').text(val.FIRST_NAME + " " + val.LAST_NAME));
      }); 
      $('#finalResult').append.apply($('#finalResult'), items);
     }catch(e) {  
      alert('Exception while request..');
     }  
    }else{
     $('#finalResult').html($('<li/>').text("No Data Found"));  
    }  
    
   },
   error: function(){      
    alert('Error while request..');
   }
  });
  }
  return false;
   });
 });
</script>
</head>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Live Search</h1>

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


<div id="container">
<p>Note:- Search Last Name as "Udayakanthi"</p>
<input type="text" name="search" id="search" />
<ul id="finalResult"></ul>
</div>
                    </div>
                </div>
            </div>







    </div>                                                      

</html>