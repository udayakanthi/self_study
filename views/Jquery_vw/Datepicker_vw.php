<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
 <link rel="stylesheet" href="<?php echo base_url('assets/Jquery/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="/resources/demos/style.css">
 <style>
    .ui-controlgroup-vertical {
      width: 150px;
    }
    .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
    .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
      text-align: center;
    }
    #car-type-button {
      width: 120px;
    }
    .ui-controlgroup-horizontal .ui-spinner-input {
      width: 20px;
    }
  </style>
 <script src="<?php echo base_url('assets/Jquery/jquery-1.12.4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Jquery/jquery-ui.js'); ?>"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>