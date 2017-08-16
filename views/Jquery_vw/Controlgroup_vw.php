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
    $( ".controlgroup" ).controlgroup()
    $( ".controlgroup-vertical" ).controlgroup({
      "direction": "vertical"
    });
  } );
  </script>
</head>
<body>
<div class="widget">
  <h1>Controlgroup</h1>
  <fieldset>
    <legend>Rental Car</legend>
    <div class="controlgroup">
      <select id="car-type">
        <option>Compact car</option>
        <option>Midsize car</option>
        <option>Full size car</option>
        <option>SUV</option>
        <option>Luxury</option>
        <option>Truck</option>
        <option>Van</option>
      </select>
      <label for="transmission-standard">Standard</label>
      <input type="radio" name="transmission" id="transmission-standard">
      <label for="transmission-automatic">Automatic</label>
      <input type="radio" name="transmission" id="transmission-automatic">
      <label for="insurance">Insurance</label>
      <input type="checkbox" name="insurance" id="insurance">
      <label for="horizontal-spinner" class="ui-controlgroup-label"># of cars</label>
      <input id="horizontal-spinner" class="ui-spinner-input">
      <button>Book Now!</button>
    </div>
  </fieldset>
  <br>
  <fieldset>
    <legend>Rental Car</legend>
    <div class="controlgroup-vertical">
      <select>
        <option>Compact car</option>
        <option>Midsize car</option>
        <option>Full size car</option>
        <option>SUV</option>
        <option>Luxury</option>
        <option>Truck</option>
        <option>Van</option>
      </select>
      <label for="transmission-standard-v">Standard</label>
      <input type="radio" name="transmission-v" id="transmission-standard-v">
      <label for="transmission-automatic-v">Automatic</label>
      <input type="radio" name="transmission-v" id="transmission-automatic-v">
      <label for="insurance-v">Insurance</label>
      <input type="checkbox" name="insurance" id="insurance-v">
      <label for="vertical-spinner" class="ui-controlgroup-label"># of cars</label>
      <input id="vertical-spinner" class="ui-spinner-input">
      <button id="book">Book Now!</button>
    </div>
  </fieldset>
</div>
 
</body>
</html>