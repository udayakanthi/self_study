<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Default functionality</title>
 <link rel="stylesheet" href="<?php echo base_url('assets/Jquery/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
 <script src="<?php echo base_url('assets/Jquery/jquery-1.12.4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Jquery/jquery-ui.js'); ?>"></script>
  <script>
  $( function() {
    $( "input" ).checkboxradio();
  } );
  </script>
</head>
<body>
<div class="widget">
  <h1>Checkbox and radio button widgets</h1>
 
  <h2>Radio Group</h2>
  <fieldset>
    <legend>Select a Location: </legend>
    <label for="radio-1">New York</label>
    <input type="radio" name="radio-1" id="radio-1">
    <label for="radio-2">Paris</label>
    <input type="radio" name="radio-1" id="radio-2">
    <label for="radio-3">London</label>
    <input type="radio" name="radio-1" id="radio-3">
  </fieldset>
 
  <h2>Checkbox</h2>
  <fieldset>
    <legend>Hotel Ratings: </legend>
    <label for="checkbox-1">2 Star</label>
    <input type="checkbox" name="checkbox-1" id="checkbox-1">
    <label for="checkbox-2">3 Star</label>
    <input type="checkbox" name="checkbox-2" id="checkbox-2">
    <label for="checkbox-3">4 Star</label>
    <input type="checkbox" name="checkbox-3" id="checkbox-3">
    <label for="checkbox-4">5 Star</label>
    <input type="checkbox" name="checkbox-4" id="checkbox-4">
  </fieldset>
 
  <h2>Checkbox nested in label</h2>
  <fieldset>
    <legend>Bed Type: </legend>
    <label for="checkbox-nested-1">2 Double
      <input type="checkbox" name="checkbox-nested-1" id="checkbox-nested-1">
    </label>
    <label for="checkbox-nested-2">2 Queen
      <input type="checkbox" name="checkbox-nested-2" id="checkbox-nested-2">
    </label>
    <label for="checkbox-nested-3">1 Queen
      <input type="checkbox" name="checkbox-nested-3" id="checkbox-nested-3">
    </label>
    <label for="checkbox-nested-4">1 King
      <input type="checkbox" name="checkbox-nested-4" id="checkbox-nested-4">
    </label>
  </fieldset>
</div>
 
 
</body>
</html>