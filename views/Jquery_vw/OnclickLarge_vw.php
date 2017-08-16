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
  #effect { position: relative; }
  .newClass { width: 240px;  padding: 1em; letter-spacing: 0; margin: 0; }
  .anotherNewClass { text-indent: 40px; letter-spacing: .2em; width: 410px; height: 100px; padding: 30px; margin: 10px; font-size: 1.1em; }
  </style>
 </style>
 <script src="<?php echo base_url('assets/Jquery/jquery-1.12.4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Jquery/jquery-ui.js'); ?>"></script>
<script>
 $( function() {
    $( "#button" ).on( "click", function() {
      $( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
      $( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
    });
  } );
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="newClass ui-corner-all">
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede.
  </div>
</div>
<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
 
 
</body>
</html>