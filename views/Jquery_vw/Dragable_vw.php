<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/Jquery/jquery-ui.css'); ?>">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script src="<?php echo base_url('assets/Jquery/jquery-1.12.4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Jquery/jquery-ui.js'); ?>"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>Drag me around</p>
</div>