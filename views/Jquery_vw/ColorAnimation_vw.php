<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
 <link rel="stylesheet" href="<?php echo base_url('assets/Jquery/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
     .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 170px; padding: 0.4em; position: relative; background: #fff; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
 </style>
 <script src="<?php echo base_url('assets/Jquery/jquery-1.12.4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Jquery/jquery-ui.js'); ?>"></script>
 <script>
  $( function() {
    var state = true;
    $( "#button" ).on( "click", function() {
      if ( state ) {
        $( "#effect" ).animate({
          backgroundColor: "#aa0000",
          color: "#fff",
          width: 500
        }, 1000 );
      } else {
        $( "#effect" ).animate({
          backgroundColor: "#fff",
          color: "#000",
          width: 240
        }, 1000 );
      }
      state = !state;
    });
  } );
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Animate</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>
 
<button id="button" class="ui-state-default ui-corner-all">Toggle Effect</button>
 
 
</body>
</html>